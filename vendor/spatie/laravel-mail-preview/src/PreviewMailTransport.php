<?php

namespace Spatie\MailPreview;

use Carbon\Carbon;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Mail\Transport\Transport;
use Illuminate\Support\Str;
use Spatie\MailPreview\Events\MailStoredEvent;
use Spatie\MailPreview\SentMails\SentMail;
use Spatie\MailPreview\SentMails\SentMails;
use Swift_Mime_SimpleMessage;
use Symfony\Component\Finder\SplFileInfo;

class PreviewMailTransport extends Transport
{
    protected Filesystem $filesystem;

    protected int $maximumLifeTimeInSeconds;

    public array $sentMails = [];

    public function __construct(Filesystem $files, int $maximumLifeTimeInSeconds = 60)
    {
        $this->filesystem = $files;

        $this->maximumLifeTimeInSeconds = $maximumLifeTimeInSeconds;
    }

    public function send(Swift_Mime_SimpleMessage $message, &$failedRecipients = null): void
    {
        $this->sentMails[] = $message;

        if (! config('mail-preview.enabled')) {
            return;
        }

        $this->beforeSendPerformed($message);

        $this
            ->ensureEmailPreviewDirectoryExists()
            ->cleanOldPreviews();

        $previewPath = $this->getPreviewFilePath($message);

        session()->put('mail_preview_file_name', basename($previewPath));

        $htmlFullPath = "{$previewPath}.html";
        $emlFullPath = "{$previewPath}.eml";

        $this->filesystem->put($htmlFullPath, $this->getHtmlPreviewContent($message));
        $this->filesystem->put($emlFullPath, $this->getEmlPreviewContent($message));

        $sentMail = new SentMail($message, $htmlFullPath, $emlFullPath);

        app(SentMails::class)->add($sentMail);

        event(new MailStoredEvent($message, $htmlFullPath, $emlFullPath));
    }

    protected function getHtmlPreviewContent(Swift_Mime_SimpleMessage $message): string
    {
        $messageInfo = $this->getMessageInfo($message);

        return $messageInfo . $message->getBody();
    }

    protected function getEmlPreviewContent(Swift_Mime_SimpleMessage $message): string
    {
        return $message->toString();
    }

    protected function getPreviewFilePath(Swift_Mime_SimpleMessage $message): string
    {
        $recipients = array_keys($message->getTo());

        $to = ! empty($recipients)
            ? str_replace(['@', '.'], ['_at_', '_'], $recipients[0]) . '_'
            : '';

        $subject = $message->getSubject();

        return $this->storagePath() . '/' . Str::slug($message->getDate()->format('u') . '_' . $to . $subject, '_');
    }

    protected function getMessageInfo(Swift_Mime_SimpleMessage $message): string
    {
        return sprintf(
            "<!--\nFrom:%s, \nto:%s, \nreply-to:%s, \ncc:%s, \nbcc:%s, \nsubject:%s\n-->\n",
            json_encode($message->getFrom()),
            json_encode($message->getTo()),
            json_encode($message->getReplyTo()),
            json_encode($message->getCc()),
            json_encode($message->getBcc()),
            $message->getSubject(),
        );
    }

    protected function ensureEmailPreviewDirectoryExists(): self
    {
        if ($this->filesystem->exists($this->storagePath())) {
            return $this;
        }

        $this->filesystem->makeDirectory($this->storagePath());

        $this->filesystem->put("{$this->storagePath()}/.gitignore", '*' . PHP_EOL . '!.gitignore');

        return $this;
    }

    protected function cleanOldPreviews(): self
    {
        collect($this->filesystem->files($this->storagePath()))
            ->filter(function (SplFileInfo $path) {
                $fileAgeInSeconds = Carbon::createFromTimestamp($path->getCTime())->diffInSeconds();

                return $fileAgeInSeconds >= $this->maximumLifeTimeInSeconds;
            })
            ->each(fn (SplFileInfo $file) => $this->filesystem->delete($file->getPathname()));

        return $this;
    }

    protected function storagePath(): string
    {
        return config('mail-preview.storage_path');
    }
}

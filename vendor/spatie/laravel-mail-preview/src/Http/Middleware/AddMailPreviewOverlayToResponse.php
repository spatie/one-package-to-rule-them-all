<?php

namespace Spatie\MailPreview\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AddMailPreviewOverlayToResponse
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if (! $this->shouldAttachPreviewLinkToResponse($request, $response)) {
            return $response;
        }

        $this->attachPreviewLink(
            $response,
            $request->session()->get('mail_preview_file_name')
        );

        $request->session()->forget('mail_preview_file_name');

        return $response;
    }

    protected function shouldAttachPreviewLinkToResponse($request, $response): bool
    {
        if (app()->runningInConsole()) {
            return false;
        }

        if (! config('mail-preview.enabled')) {
            return false;
        }

        if (! config('mail-preview.show_link_to_preview')) {
            return false;
        }

        if (! $response instanceof Response) {
            return false;
        }

        if (! $request->hasSession()) {
            return false;
        }

        if (! $request->session()->get('mail_preview_file_name')) {
            return false;
        }

        return true;
    }

    protected function attachPreviewLink($response, $storedMailFileName)
    {
        $content = $response->getContent();

        $previewUrl = route('mail.preview', ['mail_preview_file_name' => $storedMailFileName]);

        $timeoutInSeconds = config('mail-preview.popup_timeout_in_seconds');

        $linkContent = view('mail-preview::previewLinkPopup')
            ->with(compact('previewUrl', 'timeoutInSeconds'))
            ->render();

        $bodyPosition = strripos($content, '</body>');

        if (false !== $bodyPosition) {
            $content = substr($content, 0, $bodyPosition)
                . $linkContent
                . substr($content, $bodyPosition);
        }

        $response->setContent($content);
    }
}

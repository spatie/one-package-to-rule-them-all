<?php

namespace Spatie\MailPreview\SentMails;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use PHPUnit\Framework\Assert;

class SentMails
{
    protected array $mails = [];

    public function add(SentMail $sentMail): self
    {
        $this->mails[] = $sentMail;

        return $this;
    }

    public function reset(): self
    {
        $this->mails = [];

        return $this;
    }

    public function count(): int
    {
        return count($this->mails);
    }

    public function assertCount(int $expectedCount): self
    {
        Assert::assertCount($expectedCount, $this->mails, "Expected $expectedCount mail(s) sent, but actual number of sent mails is " . count($this->mails));

        return $this;
    }

    public function all(): array
    {
        return $this->mails;
    }

    public function last(): ?SentMail
    {
        return Arr::last($this->mails);
    }

    public function lastContains($expectedSubstring): bool
    {
        if (! $lastMail = $this->last()) {
            return false;
        }

        return Str::of($lastMail->body())->contains($expectedSubstring);
    }

    public function assertLastContains(string $expectedSubstring): self
    {
        if (! $lastMail = $this->last()) {
            Assert::assertTrue(false, "No mails were sent.");
        }

        $lastMail->assertContains($expectedSubstring);

        return $this;
    }

    public function timesSent(Closure $findMail): int
    {
        $timesSent = 0;
        foreach ($this->mails as $mail) {
            if ($findMail($mail)) {
                $timesSent++;
            }
        }

        return $timesSent;
    }

    public function assertSent(Closure $findMail, int $expectedCount = 1): self
    {
        $actualCount = $this->timesSent($findMail);

        Assert::assertEquals($expectedCount, $actualCount, "Mail was expected to be sent `$expectedCount` times, but was sent ``");

        return $this;
    }

    public function assertNothingSent(): self
    {
        Assert::assertCount(0, $this->all(), "Unexpected mails were sent");

        return $this;
    }

    public function assertTimesSent(int $expectedCount, Closure $findMail): self
    {
        $this->assertSent($findMail, $expectedCount);

        return $this;
    }

    public function assertNotSent(Closure $findMail)
    {
        $actualCount = $this->timesSent($findMail);

        Assert::assertEquals(0, $actualCount, "A mail was unexpectedly sent `$actualCount` times.");
    }
}

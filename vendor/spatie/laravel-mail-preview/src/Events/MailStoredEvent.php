<?php

namespace Spatie\MailPreview\Events;

use Swift_Mime_SimpleMessage;

class MailStoredEvent
{
    public function __construct(
        public Swift_Mime_SimpleMessage $message,
        public string $pathToHtmlVersion,
        public string $pathToEmlVersion,
    ) {
    }
}

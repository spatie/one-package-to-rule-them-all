<?php

namespace Spatie\MailPreview\Facades;

use Illuminate\Support\Facades\Facade;

class SentMails extends Facade
{
    /**
     * @see \Spatie\MailPreview\SentMails\SentMails
     */
    protected static function getFacadeAccessor()
    {
        return 'sentMails';
    }
}

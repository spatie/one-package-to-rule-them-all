<?php

namespace Spatie\MailPreview\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ShowMailController
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'file_type' => Rule::in(['html', 'eml']),
        ]);

        $storedMailFileName = $request->get('mail_preview_file_name');

        $storedMailPath = $storedMailFileName
            ? config('mail-preview.storage_path').'/'.$storedMailFileName.'.' . $request->file_type
            : last(glob(config('mail-preview.storage_path').'/*.' . $request->file_type));

        $headers = $request->file_type === 'eml'
            ? ['Content-Type' => 'message/rfc822']
            : [];

        return response()->view('mail-preview::showMail', [
            'mailContent' => file_get_contents($storedMailPath),
            ])->withHeaders($headers);
    }
}

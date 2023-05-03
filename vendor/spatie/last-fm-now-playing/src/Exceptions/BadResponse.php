<?php

namespace Spatie\NowPlaying\Exceptions;

class BadResponse extends \Exception
{
    public static function create($response)
    {
        if (is_array($response)) {
            $response = print_r($response, true);
        }

        return new static("Unexpected response: `{$response}``");
    }
}

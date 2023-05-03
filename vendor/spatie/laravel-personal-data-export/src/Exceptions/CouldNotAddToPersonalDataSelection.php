<?php

namespace Spatie\PersonalDataExport\Exceptions;

use Exception;

class CouldNotAddToPersonalDataSelection extends Exception
{
    public static function fileAlreadyAddedToPersonalDataSelection(string $path): self
    {
        return new static("Could not add `{$path}` because it already exists.");
    }
}

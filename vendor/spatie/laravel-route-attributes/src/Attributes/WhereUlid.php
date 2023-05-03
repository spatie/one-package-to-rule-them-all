<?php

namespace Spatie\RouteAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class WhereUlid extends Where
{
    public function __construct(string $param)
    {
        $this->param = $param;
        $this->constraint = '[0-7][0-9A-HJKMNP-TV-Z]{25}';
    }
}

<?php

namespace Spatie\OrElse;

trait OrElse
{
    public function __call($name, array $args)
    {
        $isOrElse =
            preg_match('/OrElse$/i', $name) === 1 &&
            count($args) > 0;

        if ($isOrElse) {
            $orElse = array_pop($args);
            $methodName = substr($name, 0, -6);

            $result = call_user_func_array([$this, $methodName], $args);

            if (is_null($result) || $result === false) {
                return is_callable($orElse) ? $orElse() : $orElse;
            }

            return $result;
        }
    }
}

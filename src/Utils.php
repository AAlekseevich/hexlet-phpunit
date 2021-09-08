<?php

namespace Php\Package;

class Utils
{
    public static function reverseString(string $string): string
    {
        return implode(array_reverse(str_split($string)));
    }
}

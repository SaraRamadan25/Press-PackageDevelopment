<?php

namespace SaraRamadan\Press;

use Parsedown;

class MarkdownParser
{

    public static function parse($string): string
    {
        return Parsedown::instance()->text($string);
    }
}
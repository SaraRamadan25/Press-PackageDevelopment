<?php

namespace SaraRamadan\Press;

class MarkdownParser
{

    public static function parse($string): string
    {
        return \Parsedown::instance()->text($string);
    }
}
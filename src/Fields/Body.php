<?php

namespace SaraRamadan\Press\Fields;

use SaraRamadan\Press\MarkdownParser;

class Body
{
    public static function process($type, $value): array
    {
        return [
            $type => MarkdownParser::parse($value),
        ];
    }

}
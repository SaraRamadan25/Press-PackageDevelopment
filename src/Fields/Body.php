<?php

namespace SaraRamadan\Press\Fields;

use SaraRamadan\Press\MarkdownParser;

class Body
{
    public static function process($fieldType, $fieldValue, $data)
    {
        return [
            $fieldType => MarkdownParser::parse($fieldValue),
        ];
    }

}
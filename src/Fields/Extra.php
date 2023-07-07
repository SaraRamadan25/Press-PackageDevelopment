<?php

namespace SaraRamadan\Press\Fields;

use SaraRamadan\Press\MarkdownParser;

class Extra
{
    public static function process($fieldType, $fieldValue, $data)
    {
        $extra = isset($data['extra']) ? (array)json_decode($data['extra']) : [];

        return [
            'extra' => json_encode(array_merge($extra, [
                $fieldType => $fieldValue,
            ]))
        ];
    }

}
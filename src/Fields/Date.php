<?php

namespace SaraRamadan\Press\Fields;

use Carbon\Carbon;

class Date
{

    public static function process($fieldType, $fieldValue, $data)
    {
        return [
            $fieldType => Carbon::parse($fieldValue),
            'parsed_at' => Carbon::now(),
        ];
    }
}
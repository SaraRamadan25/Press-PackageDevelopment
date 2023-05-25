<?php

namespace SaraRamadan\Press\Fields;

use Carbon\Carbon;

class Date
{

    public static function process($type, $value, $extra): array
    {
        return [
            $type => Carbon::parse($value),
            'parsed_at' => Carbon::now(),
            'foo' => 'bar',
        ];
    }
}
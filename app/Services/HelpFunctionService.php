<?php

namespace App\Services;

use Illuminate\Validation\ValidationException;

class HelpFunctionService
{
    public function transformToTime($time): string
    {
        $parts = explode(':', $time);


        if(!is_numeric($parts[0]) || (isset($parts[1]) && !is_numeric($parts[1]))){
            throw ValidationException::withMessages([
                'error' => ['Invalid time. It should be in the format of HH:MM where HH is between 0 and 24 and MM is between 0 and 59.'],
            ]);
        }

        $hour = intval($parts[0]);
        $minute = isset($parts[1]) ? intval($parts[1]) : 0;

        if ($hour < 0 || $hour > 24 || $minute < 0 || $minute > 59) {
            throw ValidationException::withMessages([
                'error' => ['Invalid time. It should be in the format of HH:MM where HH is between 0 and 24 and MM is between 0 and 59.'],
            ]);
        }

        return str_pad($hour, 2, '0', STR_PAD_LEFT) . ':' . str_pad($minute, 2, '0', STR_PAD_LEFT);

    }
}

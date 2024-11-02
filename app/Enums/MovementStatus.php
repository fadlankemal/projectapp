<?php

namespace App\Enums;

enum MovementStatus: int
{
    case INCOMING = 0;
    case OUTCOMING = 1;

    public function label(): string
    {
        return match ($this) {

            self::INCOMING => __('Incoming'),
            self::OUTCOMING => __('Outcoming'),
        };
    }
}

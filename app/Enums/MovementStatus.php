<?php

namespace App\Enums;

enum MovementStatus: string
{
    case INCOMING = 'Masuk';
    case OUTCOMING = 'Keluar';

    public function label(): string
    {
        return match ($this) {

            self::INCOMING => __('Incoming'),
            self::OUTCOMING => __('Outcoming'),
        };
    }
}

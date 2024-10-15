<?php

namespace App\Enum;

enum ReportLogType: string
{
    case DEBUG = 'debug';
    case ERROR = 'error';
    case ALERT = 'alert';
    case INFO = 'info';
    case WARNING = 'warning';

    /**
     * Get all the values from the enum
     *
     * @return array<string>
     */
    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Date Cast ------------------------------------------------------
    |--------------------------------------------------------------------------
    */

    'date_formats' => [
        'date' => 'Y-m-d H:i:s',
        'short' => 'j F',
        'rendered' => 'j F Y - H:i',
    ],

    'date_formater' => [
        'default' => Carbon\Carbon::class,
        'j' => \Morilog\Jalali\Jalalian::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Status Cast Colors ------------------------------------------------------
    |--------------------------------------------------------------------------
    */

    'default_color' => 'light',

    /*
    |--------------------------------------------------------------------------
    |--------------------------------------------------------------------------
    */

    'status_colors' => [
        'danger' => [
            \NovinVision\MultiCast\Enums\Status::FAIL,
            \NovinVision\MultiCast\Enums\Status::UNPAID,
            \NovinVision\MultiCast\Enums\Status::REJECTED,
            \NovinVision\MultiCast\Enums\Status::UNVERIFIED,
        ],
        'dark' => [
            \NovinVision\MultiCast\Enums\Status::ANSWERED,
            \NovinVision\MultiCast\Enums\Status::DISABLE,
            \NovinVision\MultiCast\Enums\Status::REFUNDED,
            \NovinVision\MultiCast\Enums\Status::CLOSED,
        ],
        'warning' => [
            \NovinVision\MultiCast\Enums\Status::USER_REPLAY,
            \NovinVision\MultiCast\Enums\Status::PENDING,
            \NovinVision\MultiCast\Enums\Status::SUSPENDED,
            \NovinVision\MultiCast\Enums\Status::PENDING_CONFIRM,
            \NovinVision\MultiCast\Enums\Status::PENDING_PROGRESS,
        ],
        'success' => [
            \NovinVision\MultiCast\Enums\Status::PAID,
            \NovinVision\MultiCast\Enums\Status::DELIVERED,
            \NovinVision\MultiCast\Enums\Status::CONFIRM,
            \NovinVision\MultiCast\Enums\Status::ACTIVE,
            \NovinVision\MultiCast\Enums\Status::SUCCESS,
            \NovinVision\MultiCast\Enums\Status::VERIFIED,
        ],
        'secondary' => [
            \NovinVision\MultiCast\Enums\Status::CANCELED,
            \NovinVision\MultiCast\Enums\Status::COMPLETE,
            \NovinVision\MultiCast\Enums\Status::SENT,
            \NovinVision\MultiCast\Enums\Status::VERIFIED,
            \NovinVision\MultiCast\Enums\Status::ANSWERED,
        ],
        'info' => [
        ],
    ],

];

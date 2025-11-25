<?php

use NovinVision\MultiCast\Enums\Status;

return [

    /*
    |--------------------------------------------------------------------------
    | Status Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    Status::ACTIVE => 'فعال',
    Status::PENDING => 'در انتظار',
    Status::VERIFIED => 'تایید شده',
    Status::UNVERIFIED => 'تایید نشده',
    Status::PAID => 'پرداخت شده',
    Status::UNPAID => 'پرداخت نشده',
    Status::CONFIRM => 'تایید شده',
    Status::REJECTED => 'رد شده',
    Status::DRAFT => 'پیشنویس',
    Status::DISABLE => 'غیر فعال',
    Status::ANSWERED => 'پاسخ داده شده',
    Status::OPEN => 'باز',
    Status::USER_REPLAY => 'پاسخ کاربر',
    Status::COMPLETE => 'تکمیل شده',
    Status::REFUNDED => 'بازگشت وجه',
    Status::CANCELED => 'لغو شده',
    Status::LOW => 'پایین',
    Status::NORMAL => 'معمولی',
    Status::HIGH => 'بالا',
    Status::EMERGENCY => 'اورژانسی',
    Status::FAIL => 'نا موفق',
    Status::SUCCESS => 'موفق',
];

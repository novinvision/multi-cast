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
    Status::REJECT => 'رد شده',
    Status::DRAFT => 'پیشنویس',
    Status::PENDING_PAYMENT => 'در انتظار پرداخت',
    Status::PENDING_CREDIT => 'در انتظار اعتبار',
    Status::PENDING_SIGN => 'در انتظار امضا',
    Status::PENDING_CONFIRM => 'در انتظار تایید',
    Status::DISABLE => 'غیر فعال',
    Status::ANSWERED => 'پاسخ داده شده',
    Status::OPEN => 'باز',
    Status::USER_REPLAY => 'پاسخ کاربر',
    Status::COMPLETE => 'تکمیل شده',
    Status::REFUNDED => 'بازگشت وجه',
    Status::CANCEL => 'لغو شده',
    Status::LOW => 'پایین',
    Status::NORMAL => 'معمولی',
    Status::HIGH => 'بالا',
    Status::EMERGENCY => 'اورژانسی',
    Status::FAIL => 'نا موفق',
    Status::SUCCESS => 'موفق',
];

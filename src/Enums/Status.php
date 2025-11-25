<?php

namespace NovinVision\MultiCast\Enums;

enum Status
{
    const PENDING = 'pending';

    const DELIVERED = 'delivered';

    const SUSPENDED = 'suspended';

    const COMPLETE = 'complete';

    const ACTIVE = 'active';

    const DISABLE = 'disable';

    const UNPAID = 'unpaid';

    const SUCCESS = 'success';

    const FAIL = 'fail';

    const DONE = 'done';

    const FORWARDED = 'forwarded';

    const PAID = 'paid';

    const REFUNDED = 'refunded';
    const OPEN = 'open';

    const ON_HOLD = 'on_hold';
    const USER_REPLAY = 'user_replay';
    const ANSWERED = 'answered';
    const CLOSED = 'closeed';
    const HIDDEN = 'hidden';
    const DRAFT = 'draft';

    const PENDING_PROGRESS = 'pending_progress';
    const CONFIRM = 'confirm';
    const PENDING_PAYMENT = 'pending_payment';
    const PENDING_CONFIRM = 'pending_confirm';

    const LOW = 'low';

    const NORMAL = 'normal';

    const HIGH = 'high';

    const EMERGENCY = 'emergency';

    const CANCELED = 'canceled';

    const REJECTED = 'rejected';

    const VERIFIED = 'verified';

    const UNVERIFIED = 'unverified';

    const SENT = 'sent';

    const PUBLISHED = 'published';
}

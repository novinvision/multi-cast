<?php

namespace NovinVision\MultiCast\Class;

use NovinVision\MultiCast\Casts\StatusCast;

/**
 *
 */
class StatusCaster implements \Stringable
{

    public string $rendered;

    public string $badge;

    public function __construct(public string $value)
    {
        $this->rendered = StatusCast::statusTitle($this->value);
        $this->badge = StatusCast::statusBadge($this->value);
    }

    public function __toString()
    {
        return $this->value;
    }
}

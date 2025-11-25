<?php

namespace NovinVision\MultiCast\Traits;

use NovinVision\MultiCast\Casts\StatusCast;
use NovinVision\MultiCast\Enums\Status;

trait HasStatus
{
    public function getStatus(): ?string
    {
        return is_string($this->status) ? $this->status : $this->status?->value;
    }

    public function statusTitle(): ?string
    {
        return $this->status?->rendered ?? null;
    }

    public function setStatus(Status $status, string $reason = null): ?string
    {
        if (!is_null($reason) && key_exists('status_reason', $this->fillable)) {
            $this->forceFill([
                'status_reason' => $reason,
            ]);
        }

        return $this->forceFill([
            'status' => $status,
        ])->save();
    }

    public function getStatusBadge(): ?string
    {
        return is_string($this->status) ? $this->status : $this->status?->badge;
    }

    public function getStatusColor():string
    {
        return StatusCast::statusColor($this->getStatus());
    }

    public function isStatus(array|string $status): bool
    {
        $status = is_array($status) ? $status : [$status];
        return in_array($this->getStatus(), $status);
    }

    public function isActive(): bool
    {
        return $this->getStatus() == Status::ACTIVE;
    }

    public function isDraft(): bool
    {
        return $this->getStatus() == Status::DRAFT;
    }

    public function isPending(): bool
    {
        return $this->getStatus() == Status::PENDING;
    }

    public function isOpen(): bool
    {
        return $this->getStatus() == Status::OPEN;
    }

    public function isSuspended(): bool
    {
        return $this->getStatus() == Status::SUSPENDED;
    }

    public function isDisable(): bool
    {
        return $this->getStatus() == Status::DISABLE;
    }

    public function isConfirm(): bool
    {
        return $this->getStatus() == Status::CONFIRM;
    }

    public function isPendingConfirm(): bool
    {
        return $this->getStatus() == Status::PENDING_CONFIRM;
    }

    public function isComplete(): bool
    {
        return $this->getStatus() == Status::COMPLETE;
    }

    public function isPaid(): bool
    {
        return $this->getStatus() == Status::PAID;
    }

    public function isPendingPayment(): bool
    {
        return $this->getStatus() == Status::PENDING_PAYMENT;
    }

    public function isRejected(): bool
    {
        return $this->getStatus() == Status::REJECTED;
    }

    public function scopeActive(\Illuminate\Database\Eloquent\Builder $query): void
    {
        $query->where('status', Status::ACTIVE);
    }
}

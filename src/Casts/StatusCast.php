<?php

namespace NovinVision\MultiCast\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use NovinVision\MultiCast\Class\StatusCaster;

class StatusCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param array<string, mixed> $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return new StatusCaster($value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param array<string, mixed> $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if ($value instanceof StatusCaster) {
            $value = $value->__toString();
        }

        return [$key => $value];
    }

    public static function statusColor($status): string
    {
        return match ($status) {
            in_array($status, config('multi-cast.status_colors.danger')) => 'danger',
            in_array($status, config('multi-cast.status_colors.dark')) => 'dark',
            in_array($status, config('multi-cast.status_colors.warning')) => 'warning',
            in_array($status, config('multi-cast.status_colors.success')) => 'success',
            in_array($status, config('multi-cast.status_colors.info')) => 'info',
            in_array($status, config('multi-cast.status_colors.secondary')) => 'secondary',
            default => config('multi-cast.default_color')
        };
    }

    public static function statusBadge($status): string
    {
        return sprintf(
            '<span class="badge text-bg-%s">%s</span>',
            self::statusColor($status),
            self::statusTitle($status)
        );
    }

    public static function statusTitle($status): string
    {
        return Str::of(__("multi-cast::status.{$status}"))
            ->replace('multi-cast::', '')
            ->replace('status.', '')->toString();
    }
}

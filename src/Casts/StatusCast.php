<?php

namespace NovinVision\MultiCast\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class StatusCast implements CastsAttributes
{
    public string $rendered = '';
    public string $badge = '';

    public function __construct(public ?string $value = null)
    {
        $this->rendered = trans("multi-cast::status.{$this->value}");
        $this->badge = self::statusBadge($this->value);
    }

    /**
     * Cast the given value.
     *
     * @param array<string, mixed> $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return new static($value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param array<string, mixed> $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return [$key => ($value->value ?? $value)];
    }

    public static function statusBadge($status): string
    {
        return sprintf('<span class="badge text-bg-%s">%s</span>', match ($status) {
            in_array($status, config('multi-cast.status_colors.danger')) => 'danger',
            in_array($status, config('multi-cast.status_colors.dark')) => 'dark',
            in_array($status, config('multi-cast.status_colors.warning')) => 'warning',
            in_array($status, config('multi-cast.status_colors.success')) => 'success',
            in_array($status, config('multi-cast.status_colors.info')) => 'info',
            in_array($status, config('multi-cast.status_colors.secondary')) => 'secondary',
            default => config('multi-cast.default_color'),
        }, Str::of(__("multi-cast::status.{$status}"))->replace('status.', ''));
    }
}

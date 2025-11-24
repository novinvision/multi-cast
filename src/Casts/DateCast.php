<?php

namespace NovinVision\MultiCast\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use NovinVision\MultiCast\Class\DateCaster;

class DateCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param array<string, mixed> $attributes
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if (!$value || $value == '0000-00-00 00:00:00') return null;

        return new DateCaster($value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param array<string, mixed> $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if($value instanceof DateCaster){
            $value = $value->toCarbon();
        }

        return $value;
    }
}

<?php

namespace NovinVision\MultiCast\Class;

use Carbon\Carbon;

/**
 *
 */
class DateCaster implements \Stringable
{
    public string $timezone;
    protected Carbon $carbon;

    public function __construct(public string $value)
    {
        $this->timezone = config('app.timezone');
        $this->carbon = Carbon::parse($this->value);

        foreach (self::parse($this->value, $this->timezone) as $key => $value) {
            $this->$key = $value;
        }
    }

    public static function parse(string $value, string $timeZone = null): array
    {
        if($timeZone){
            $timeZone = new \DateTimeZone($timeZone);
        }
        $formats = config('multi-cast.date_formats');
        $formater = config('multi-cast.date_formater');

        $output = [];
        foreach ($formater as $key => $class) {
            $prepend = $key != 'default' ? "{$key}_" : '';

            $date = match (true) {
                method_exists($class, 'createFromTimestamp') => $class::createFromTimestamp(strtotime($value), $timeZone),
                method_exists($class, 'forge') => $class::forge(strtotime($value), $timeZone),
                default => null,
            };
            if (!$date) {
                throw new \Exception("formater class doesn't have forge method");
            }

            foreach ($formats as $formatKey => $format) {
                $output[$prepend . $formatKey] = $date->format($format);
            }
        }

        return $output;
    }

    public function toCarbon(): Carbon
    {
        return $this->carbon;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}

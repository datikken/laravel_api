<?php

use Illuminate\Support\Carbon;

/**
 * Return a Carbon instance.
 */
if ( ! function_exists('carbon')) {
    function carbon(string $parseString = '', string $tz = null): Carbon
    {
        return new Carbon($parseString, $tz);
    }
}

/**
 * Return a formatted Carbon date.
 */
if ( ! function_exists('humanize_date')) {
    function humanize_date(Carbon $date, string $format = 'd F Y, H:i'): string
    {
        return $date->format($format);
    }
}

<?php

function formatSum(int $number)
{
    $number = ceil($number);
    if ($number > 1000) {
        $number = number_format($number, 0, ".", " ");
    }
    return $number .= " ₽";
}

date_default_timezone_set('Europe/Moscow');
const SECONDS_PER_HOUR = 3600;
const SECONDS_PER_MINUTE = 60;
const END_OF_COUNTER = 0;

function get_dt_range(string $lot_date): array
{

    $current_timestamp = time();
    $timestamp_lot_date = strtotime($lot_date);

    $interval = max(END_OF_COUNTER, $timestamp_lot_date - $current_timestamp);
    $hours = floor($interval / SECONDS_PER_HOUR);
    $minutes = floor(($interval / SECONDS_PER_HOUR - $hours) * SECONDS_PER_MINUTE);

    return [sprintf('%02d', $hours), sprintf('%02d', $minutes)];
}

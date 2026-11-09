<?php

declare(strict_types=1);


function formatSum(int $number)
{
    $number = ceil($number);
    if ($number > 1000) {
        $number = number_format($number, 0, ".", " ");
    }
    return $number .= " ₽";
}

function get_dt_range(string $lot_date): array
{

    $current_timestamp = time();
    $timestamp_lot_date = strtotime($lot_date);

    $interval = max(END_OF_COUNTER, $timestamp_lot_date - $current_timestamp);
    $hours = floor($interval / SECONDS_PER_HOUR);
    $minutes = floor(($interval / SECONDS_PER_HOUR - $hours) * SECONDS_PER_MINUTE);

    return [sprintf('%02d', $hours), sprintf('%02d', $minutes)];
}

function hsc(mixed  $value): mixed
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

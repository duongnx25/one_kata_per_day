<?php

// https://www.codewars.com/kata/58ca658cc0d6401f2700045f

function findMultiples(int $integer, int $limit): array
{
    $numbers = floor($limit / $integer);

    return range($integer, $integer * $numbers, $integer);
}

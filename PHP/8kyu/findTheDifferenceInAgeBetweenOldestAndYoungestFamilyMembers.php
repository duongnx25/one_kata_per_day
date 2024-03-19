<?php

//https://www.codewars.com/kata/5720a1cb65a504fdff0003e2

function differenceInAges($ages) {
    $max = max($ages);
    $min = min($ages);
    return [$min, $max, $max - $min];
}

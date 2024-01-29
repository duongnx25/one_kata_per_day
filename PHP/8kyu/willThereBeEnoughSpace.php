<?php

// https://www.codewars.com/kata/5875b200d520904a04000003

function enough($cap, $on, $wait)
{
    return max(0, $wait  + $on - $cap);
    return $cap - $on - $wait > 0 ? 0 : abs($cap - $on - $wait);
}

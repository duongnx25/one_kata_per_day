<?php

// https://www.codewars.com/kata/57f781872e3d8ca2a000007e

function maps($x)
{
    return array_map('double', $x);
}

function double($y)
{
    return 2 * $y;
}

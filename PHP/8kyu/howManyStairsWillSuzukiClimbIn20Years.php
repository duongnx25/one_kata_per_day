<?php

//https://www.codewars.com/kata/56fc55cd1f5a93d68a001d4e

function stairsIn20($arr) {
    return 20 * array_sum(array_merge(...$arr));
}

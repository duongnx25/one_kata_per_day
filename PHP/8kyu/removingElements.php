<?php

//https://www.codewars.com/kata/5769b3802ae6f8e4890009d2

function removeEveryOther($array) {
    $res = [];

    for ($i = 0; $i < count($array); $i += 2) {
        $res[$i] = $array[$i];
    }
    return $res;
}

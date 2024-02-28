<?php

// https://www.codewars.com/kata/57ee4a67108d3fd9eb0000e7

function gooseFilter($birds) {
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];

    return array_values(array_diff($birds, $geese));
}

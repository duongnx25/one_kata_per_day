<?php

// https://www.codewars.com/kata/57cfdf34902f6ba3d300001e

function twoSort($s) {
    sort($s);
    return implode('***', mb_str_split($s[0]));
}

<?php

// https://www.codewars.com/kata/5b4e779c578c6a898e0005c5/train/php

function draw_stairs($n)
{
    $stair = '';

    for ($i = 0; $i < $n; $i++) {
        $stair .= str_repeat(' ', $i);
        $stair .= 'I';
        if ($i < $n - 1) {
            $stair .= "\n";
        }
    }
    return $stair;
}

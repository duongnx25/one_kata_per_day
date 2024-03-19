<?php

//https://www.codewars.com/kata/5704aea738428f4d30000914

function triple_trouble(string $one, string $two, string $three): string {
    $str = '';
    for ($i = 0; $i < strlen($one); $i++) {
        $str .= $one[$i] . $two[$i] . $three[$i];
    }
    return $str;
}

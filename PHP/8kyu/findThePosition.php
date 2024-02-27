<?php

https://www.codewars.com/kata/5808e2006b65bff35500008f/php

function position(string $char): string
{
    return 'Position of alphabet: ' . strpos('abcdefghijklmnopqrstuvwxyz', strtolower($char)) + 1;
}

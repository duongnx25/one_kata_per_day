<?php

//https://www.codewars.com/kata/57a1fd2ce298a731b20006a4

function isPalindrome(string $str): bool
{
    return strtolower($str) === strtolower(strrev($str));
}

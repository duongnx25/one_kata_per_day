<?php

// https://www.codewars.com/kata/57eadb7ecd143f4c9c0000a3

function abbrevName($name)
{
  $names = explode(' ', $name);
  $inititals = [strtoupper($names[0][0]), strtoupper($names[1][0])];

  return implode('.', $inititals) ;
}

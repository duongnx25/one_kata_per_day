<?php

//https://www.codewars.com/kata/57642a90dee2da8dd3000161

function arr2bin($arr){
    $array = array_filter($arr, function($value) {
        return is_numeric($value);
    });
}

<?php

// https://www.codewars.com/kata/57a429e253ba3381850000fb

function bmi($weight, $height) {
    $bmi = $weight / $height / $height;

    return match (true) {
        $bmi <= 18.5 => "Underweight",
        $bmi <= 25 => "Normal",
        $bmi <= 30 => "Overweight",
        default => "Obese",
    };
}

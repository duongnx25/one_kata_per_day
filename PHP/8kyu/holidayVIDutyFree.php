<?php

// https://www.codewars.com/kata/57e921d8b36340f1fd000059

function shark(
    int $pontoonDistance,
    int $sharkDistance,
    int $youSpeed,
    int $sharkSpeed,
    bool $dolphin
): string {
    if ($dolphin) {
        $sharkSpeed = $sharkSpeed / 2;
    }

    return $pontoonDistance / $youSpeed < $sharkDistance / $sharkSpeed ? 'Alive!' : 'Shark Bait!';
}

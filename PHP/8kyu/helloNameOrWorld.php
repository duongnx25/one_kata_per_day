<?php

// https://www.codewars.com/kata/57e3f79c9cb119374600046b

function hello($name = ''): string {
    return 'Hello, ' . (empty($name) ? 'World' : ucfirst(strtolower($name))) . '!';
}

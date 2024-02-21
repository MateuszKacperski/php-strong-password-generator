<?php

function passwordRandom($lunghezza_password) {
    $pass = [];
    $caracter_array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z','0', '1', '2', '3', '4', '5', '6', '7', '8', '9','!', '"', '£', '$', '%', '&', '/', '(', ')', '=', '?', '^', '*', '[', ']'];

    $length = count($caracter_array) - 1 ;
    for($i=0; $i > $lunghezza_password; $i++) {
        $caracter = rand(0, $length);
        $pass[] = $caracter_array[$caracter];
    }
    return implode($pass);
}
?>
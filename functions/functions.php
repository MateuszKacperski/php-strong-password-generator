<?php

function passwordRandom($lunghezza_password) {
    $pass = '';
    $caracter = 'abcdefghijklmnopqrstuvwxyz0123456789!"£$%&/()=?^*[]';
    for($i=0; $i < $lunghezza_password; $i++) {
        $n = rand(0, strlen($caracter) - 1);
        $pass .= $caracter[$n];
    }
    return $pass;
}
?>
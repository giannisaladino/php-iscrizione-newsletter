<?php

// if (
//     str_contains($email, '@') && // Controllo se c'è @
//     str_contains($email, '.')
// ) {
//     $mailOk = true;
// } else {
//     $mailOk = false;
// }


function validate($email) {

    if(!$email) {
        return false;
    }

    if (strpos($email, '@') === false) {
        return false;
    }

    if (strpos($email, '.') === false) {
        return false;
    }

    return true;

}

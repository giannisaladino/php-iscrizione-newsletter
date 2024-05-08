<?php

$email = $_POST['email'] ?? '';

if (
    str_contains($email, '@') && // Controllo se c'è @
    str_contains($email, '.')
) {
    $mailOk = true;
} else {
    $mailOk = false;
}


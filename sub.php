<?php

session_start();

$email = $_SESSION['email'] ?? '';

session_unset();

if($email !== null) {
    echo 'Successo';

} else {
    echo 'Fail!';
}
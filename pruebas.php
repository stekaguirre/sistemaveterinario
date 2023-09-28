<?php

echo $password = "0248";

echo md5($password). "<br>";

echo sha1($password). "<br>";

echo password_hash("$password", PASSWORD_DEFAULT);

$hash = '$2y$10$aUJECIFrOf7QEshJp7c8IeUK9oOOCpyjlEUbg1kLvTk0liXfrW1UO';

if (password_verify($password, $hash)) {
    echo 'muy bien .. contraseña correcta';
} else {
    echo 'La contraseña no es válida.';
}
?>




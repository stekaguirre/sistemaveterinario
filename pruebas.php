<?php

echo $password = "1234";

echo md5($password). "<br>";

echo sha1($password). "<br>";

echo password_hash("$password", PASSWORD_DEFAULT);

$hash = '$2y$10$SG4uiosAqjvPpbYUwGdtLetl/IwRIKpz2SA1ri4EZFIs6XoA60iqK';

if (password_verify($password, $hash)) {
    echo 'muy bien .. contraseña correcta';
} else {
    echo 'La contraseña no es válida.';
}
?>




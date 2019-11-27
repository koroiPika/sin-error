




<?php
$mysqli = @new mysqli('localhost', 'root', '', 'login');

// Works as of PHP 5.2.9 and 5.3.0.
if ($mysqli->connect_error) {
    echo('Error de conexión: ' . $mysqli->connect_error);
}
?>
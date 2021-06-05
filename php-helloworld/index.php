<?php
print "Hello1 mundo! php is " . PHP_VERSION . "\n";

$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');

#if (!mysqli_connect($db_host, $db_user, $db_pass))
if (!mysqli_connect('127.0.0.1', 'user1', 'mypa55'))
    print "No se pudo establecer conexión a la base de datos";
else
    print "Conectado a BBDD";
?>

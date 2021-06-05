<?php
print "Hello mundo! php is " . PHP_VERSION . "\n";

$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');

if (!mysql_connect($db_host, $db_user, $db_pass))
    print "No se pudo establecer conexión a la base de datos";
else
    print "Conectado a BBDD";
?>

<?php
print "Hello mundo 2! php is " . PHP_VERSION . "\n\n";

echo "Conectando BBDD... ";
$db_handle = pg_connect("host=".$_ENV["HOST"]." dbname=".$_ENV["DATABASE"]." user=".$_ENV["USER"]." password=".$_ENV["PASSWORD"]);
if ($db_handle) {
echo 'CONECTADO';
} else {
echo 'ERROR';
}
pg_close($db_handle);
?>

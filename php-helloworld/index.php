<?php
print "Hello mundo! php is " . PHP_VERSION . "\n\n";

echo "Conectando BBDD...";
print "\n";
$db_handle = pg_connect("host=".$_ENV["HOST"]." dbname=".$_ENV["DATABASE"]." user=".$_ENV["USER"]." password=".$_ENV["PASSWORD"]);
if ($db_handle) {
echo 'CONECTADO';
} else {
echo 'ERROR';
}
print "\n";
pg_close($db_handle);
echo "Conexión cerrada...\n";
?>

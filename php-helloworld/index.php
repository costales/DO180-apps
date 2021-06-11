<?php
print "Hello mundo! php is " . PHP_VERSION . "\n\n";

echo "Conectando BBDD...\n\n";
$db_handle = pg_connect("host=".$_ENV["HOST"]." dbname=".$_ENV["DATABASE"]." user=".$_ENV["USER"]." password=".$_ENV["PASSWORD"]);
if ($db_handle) {
echo 'Connection attempt succeeded.\n\n';
} else {
echo 'Connection attempt failed.\n\n';
}
pg_close($db_handle);
echo "Conexión cerrada...\n";
?>

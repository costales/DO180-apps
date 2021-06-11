<?php
print "Hello2 mundo! php is " . PHP_VERSION . "\n\n";

echo "Conectando BBDD...\n\n";
$db_handle = pg_connect("host=".$_ENV["HOST"]." dbname=".$_ENV["DATABASE"]." user=".$_ENV["USER"]." password=".$_ENV["PASSWORD"]);
if ($db_handle) {
echo 'Connection attempt succeeded.\\nn';
} else {
echo 'Connection attempt failed.\\nn';
}
pg_close($db_handle);
echo "FIN BBDD...\n";
?>

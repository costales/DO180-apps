<?php
print "Hello2 mundo! php is " . PHP_VERSION . "\n";

echo 'Database user is: ' .$_ENV["MYSQL_USER"] . "\n";

echo "Conectando BBDD...\n";
$db_handle = pg_connect("host=127.0.0.1 dbname=items user=user1 password=mypa55");
if ($db_handle) {
echo 'Connection attempt succeeded.\n';
} else {
echo 'Connection attempt failed.\n';
}
pg_close($db_handle);
echo "FIN BBDD...\n";
?>

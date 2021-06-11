<?php
print "Hello2 mundo! php is " . PHP_VERSION . "\n\n";

echo "Conectando BBDD...\n\n";
$db_handle = pg_connect("host=".$_ENV["POSTGREESQL_HOST"]." dbname=".$_ENV["POSTGREESQL_DATABASE"]." user=".$_ENV["POSTGREESQL_USER"]." password"=.$_ENV["POSTGREESQL_PASSWORD"]);
if ($db_handle) {
echo 'Connection attempt succeeded.\\nn';
} else {
echo 'Connection attempt failed.\\nn';
}
pg_close($db_handle);
echo "FIN BBDD...\n";
?>

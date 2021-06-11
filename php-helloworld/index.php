<?php
print "Hello2 mundo! php is " . PHP_VERSION . "\n";

echo 'Database user is: ' .$_ENV["MYSQL_USER"];

$db_handle = pg_connect("host=127.0.0.1 dbname=items user=user1 password=mypa55");
if ($db_handle) {
echo 'Connection attempt succeeded.';
} else {
echo 'Connection attempt failed.';
}
pg_close($db_handle);
?>

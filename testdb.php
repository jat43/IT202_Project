#!/usr/bin/php
<?php

$db = new mysqli("localhost","root","kokopepe03","IT202");
/*
	In here we can access the DB if it worked
*/

if ($db->connect_errno > 0 )
{
    echo __FILE__.__LINE__." ERROR: ".$db->connect_error.PHP_EOL;
    exit(-1);
}

$query = "select * from products;";

$results = $db->query($query);

print_r($results);

while ($row = $results->fetch_assoc())
{
   print_r($row);
}

echo "We are connected to the DATERBASE".PHP_EOL;

$db->close();

?>

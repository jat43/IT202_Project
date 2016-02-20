#!/usr/bin/php
<?php

$dbhost	= "localhost";
$dbuser	= "root";
$dbpass = "kokopepe03";
$dbconn = mysql_connect( $dbhost, $dbuser, $dbpass);

if (! $dbconn )
{
  die('Could not connect: ' . mysql_error());
}

echo "We are connected to the DATABASE".PHP_EOL;

$sql = "CREATE TABLE user_info(".
    "idNum INT NOT NULL AUTO_INCREMENT, ".
    "first_name VARCHAR(30), ".
    "last_name VARCHAR(30), ".
    "user_email VARCHAR(30), ".
    "street_address VARCHAR(30), ".
    "city_address VARCHAR(30), ".
    "state_address VARCHAR(5), ".
    "PRIMARY KEY ( idNum ));";
    
mysql_select_db( 'customerInfo' );

$retval = mysql_query( $sql, $dbconn );
if(! $retval)
{
  die('Could not create table: ' . mysql_error());
}
echo "You made the table bruh, congrats\n";

//$query = "select * from Student;";

//$results = $db->query($query);

//print_r($results);

//while ($row = $results->fetch_assoc())
//{
//  print_r($row);
//}




mysql_close($dbconn);

/* populate a database in mysql from a php file 
*/

?>

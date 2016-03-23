<?php

echo "<p> before the require_once </p>";

require_once("clientDB.php.inc");

echo "<p> after the require once </p>";

$request = $_POST['request'];
$response = "FUCK<p>";
switch($request)
{
    case "register":
        $username = $_POST['username'];
        $password = $_POST['password'];
        $login = new clientDB("connect.ini");
        $response = $login->addNewClient($username,$password);
        if ($response['success']===true)
        {
		$response = "Registration Successful!!!<p>";
        }
        else
        {
		$response = "Registration Failed:".$response['message']."<p>";
        }
        break;
    case "login":
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = new clientDB("connect.ini");
	$response = $login->validateClient($username,$password);
	if ($response['success']===true)
	{
		$response = "Login Successful!<p>";
	}
	else
	{
		$response = "Login Failed:".$response['message']."<p>";
	}
	break;
}

echo $response;

?>

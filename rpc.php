<?php

require_once("clientDB.php.inc");

$request = $_POST['request'];
$response = "Umm<p>";
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
		HEADER("LOCATION: browse.html");
	}
	else
	{
		$response = "Login Failed:".$response['message']."<p>";
	}
	break;
}

echo $response;
?>

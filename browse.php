<?php

require_once("browseProduct.php.inc");

$request = $_POST['request'];

switch($request)
{
      case "browse all":
	  $browse = new browseProduct("connect.ini");
	  $browse->browse();
	  break;
      case "search":
	  $tags = $_POST['tags'];
	  $browse = new browseProduct("connect.ini");
	  $browse->browsetags($tags);
	  break;
      case "order":
	  $name = $_POST['name'];
	  $address = $_POST['address'];
	  $productName = $_POST['productName'];
	  $browse = new browseProduct("connect.ini");
	  $response = $browse->order($name,$address,$productName);
	  if ($response['success']===true)
	  {
		$response = "Order Successfulasd!<p>";
	  }
	  else
	  {
		$response = "Order Failed<p>";
	  }
	  break;
      
}
echo $response;

?>
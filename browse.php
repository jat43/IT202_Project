<?php

require_once("browseProduct.php.inc");

$request = json_decode(file_get_contents("php://input"),true);
$response = "error unrecognized request<p>";
switch($request["request"])
{
      case "browse all":
	  $browse = new browseProduct("connect.ini");
	  $browse->browse();
	  $response = "";
	  break;
      case "search":
	  $tags = $request['tags'];
	  $browse = new browseProduct("connect.ini");
	  $browse->browsetags($tags);
	  $response = "";
	  break;
      case "order":
	  $name = $request['name'];
	  $address = $request['address'];
	  $productName = $request['productName'];
	  $browse = new browseProduct("connect.ini");
	  $response = $browse->order($name,$address,$productName);
	  if ($response['success']===true)
	  {
		$response = "Order Successful!<p>";
	  }
	  else
	  {
		$response = "Order Failed<p>";
	  }
	  break;
      case "view":
	  $browse = new browseProduct("connect.ini");
	  $browse->view();
	  $response = "";
	  break;
      
}
echo json_encode($response);
?>
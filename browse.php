<?php

require_once("browseProduct.php.inc");

$request = $_POST['request'];

switch($request)
{
      case "browse":
	  $browse = new browseProduct("connect.ini");
	  $browse->browse();
      
}

?>
<?php

require_once("error.php.inc");
class browseProduct
{

    private $db;

    public function __construct($iniFile)
    {
	$ini = parse_ini_file($iniFile,true);
        $this->logger = new errorLogger("/var/log/it202.log");
	$this->db = new mysqli(
		$ini['loginDB']['host'],
		$ini['loginDB']["user"],
		$ini['loginDB']["password"],
		$ini['loginDB']["db"]);

	if ($this->db->connect_errno > 0 )
	{
		$this->logger->log(__FILE__.__LINE__."failed to connect to database re: ".$this->db->connect_error);
		exit(0);
	}
	$this->logger->log("testing");
    }
    public function __destruct()
    {
	$this->db->close();
    }


    public function browse()
    {
	$query = "select * from products;";
	$results = $this->db->query($query);
	
	
	while ($row = $results->fetch_assoc())
	{
	    
	    echo "Product Name: ";
	    print_r($row['productName']."<br>");
	    
	    echo "Product Image: "; 
	    print_r($row['productImage']."<br>");
	    
	    echo "Product Price: $";
	    print_r($row['productPricing']."<br>");
	    
	    echo "Product Review: ";
	    print_r($row['productReview']."<br>");
	    
	    echo "Product Stock Number: ";
	    print_r($row['productStock']."<br><br>");
	}
    }
    
    public function order($name, $address, $productName)
    {
	$name = $this->db->real_escape_string($name);
	$address = $this->db->real_escape_string($address);
	$productName = $this->db->real_escape_string($productName);
	$addQuery = "insert into orders (name, Address, itemName) values ('$name','$address','$productName');";
        $results = $this->db->query($addQuery);
	if (!$results)
	{
	    $this->logger->log("error: ".$this->db->error);
	}
	return array("success"=>true);
    }
    
    public function browsetags($tags)
    {
	$key = $tags;
	$query = "select * from products where tags = '$key';";
	$results = $this->db->query($query);
	
	while ($row = $results->fetch_assoc())
	{
	    
	    echo "Product Name: ";
	    print_r($row['productName']."<br>");
	    
	    echo "Product Image: "; 
	    print_r($row['productImage']."<br>");
	    
	    echo "Product Price: $";
	    print_r($row['productPricing']."<br>");
	    
	    echo "Product Review: ";
	    print_r($row['productReview']."<br>");
	    
	    echo "Product Stock Number: ";
	    print_r($row['productStock']."<br><br>");
	}
	
    }
}







?>
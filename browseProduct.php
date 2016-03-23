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
	
	$client = $results->fetch_assoc();
	
	while ($row = $results->fetch_assoc())
	{
	    print_r($row['productName']);
	    print_r($row['productImage']);
	    print_r($row['productPricing']);
	    print_r($row['productReview']);
	    print_r($row['productStock']);
	}
    }
}







?>
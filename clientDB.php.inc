<?php

class clientDB
{
  
  private $dbconn;
  
  
  public function __construct()
  {
    $this->dbconn = new mysqli( "localhost", "root", "kokopepe03", "IT202");
    
      if (! $this->dbconn )
      {
	die('Could not connect: ' . mysql_error());
      }
      
    echo "We are connected to the DATABASE".PHP_EOL;
  }

  public function __destruct()
  {
  $this->dbconn->close();
  echo "Bye Bye".PHP_EOL;
  }
  
  public function addNewClient ($name, $passwd)
  {
    $now = date("m/d/Y h:i:s", time());
    $query = "insert into clients (clientName, clientPW, activeSession, lastLogin) values ('$name', '$passwd', '$now', '$now');";
    $result = $this->dbconn->query($query);
    if(! $result)
    {
      die('Could not insert to table: ' . mysql_error());
    }
    
    echo "wrote stuff into the table".PHP_EOL;
  }
  
  
  
}

?>
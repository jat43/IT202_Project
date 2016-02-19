<html>

  <head>
    <title> Information Gathered </title>
  </head>
  
  <body>
  
  
  <?php
  
  echo "Data processed</br>";
  
  
  date_default_timezone_set('EST');
  
  echo date('h:i:s a, l F jS Y e');
  
  
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $email = $_POST['email'];
  $streetAddress = $_POST['street_address'];
  $cityAddress= $_POST['city_address'];
  $stateAddress = $_POST['state_address'];
  
  
  
  
  ?>
  
  
  </body>
</html>
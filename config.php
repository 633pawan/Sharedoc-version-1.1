<?php

define('BASE_PATH','http://localhost:3305/');
define('DB_HOST', 'localhost');
define('DB_NAME','sharedoc');
define('DB_USER','root');
define('DB_PASSWORD','root');

$con=mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
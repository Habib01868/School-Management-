<?php

  function con()
  {
  	$serverName="localhost";
  	$userName="root";
  	$pass="";
  	$dbName="school";
  	$conn=new mysqli($serverName,$userName,$pass,$dbName);
  	return $conn;
  }

?>
<?php
  //CRUD
  header("Access-Control-Allow-Origin: *");
  
  $conn = new mysqli("localhost", "root", "", "college");

  if ($conn->connect_error) {
    die("connection error");
  }

  $query = "select * from students where id=".$_GET['id'];
  $result = $conn->query($query);
  $arr = array();

  while ($row = $result->fetch_assoc()) {
    $myObj = new stdClass();
    $myObj->name = $row['name'];
    $myObj->address = $row['address'];
    array_push($arr, $myObj);
  }

  $myJSON = json_encode($arr);

  echo $myJSON;
?>
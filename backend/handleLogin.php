<?php
  if(isset($_POST['email']) && isset($_POST['pwd'])){
    if($_POST['email']=="akash@gmail.com" && $_POST['pwd']=="pass"){
      header("location: ../login.html");
    }else{
      header("location: ../login.php?login=false");
    }
  }else{
    header("location: ../login.html");
  }

?>
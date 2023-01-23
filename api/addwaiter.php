<?php
  require_once("../connect.php");
  if(isset($_POST['name'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $name = htmlentities($name);

    $query="INSERT INTO waiter (name,status) value ('$name',1)";
    if(mysqli_query($con,$query)){
      echo 1;
    }else{
      echo 0;
    }
    
  }
?>
<?php
  require_once("../connect.php");
  if(isset($_POST['id']) && isset($_POST['name'])){

  $id = mysqli_real_escape_string($con,@$_POST['id']);
  $id = htmlentities($id);

  $name = mysqli_real_escape_string($con,@$_POST['name']);
  $name = htmlentities($name);

  $query="update waiter set name='$name' where id='$id'";
    if(mysqli_query($con,$query)){
      echo 1;
    }else{
      echo 0;
    }
  }
?>
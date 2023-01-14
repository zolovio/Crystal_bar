<?php
  require_once("../connect.php");
  if(isset($_POST['id']) && isset($_POST['quantity'])){

    $id = mysqli_real_escape_string($con,$_POST['id']);
    $id = htmlentities($id);

    $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
    $quantity = htmlentities($quantity);

    $query3 = "SELECT * FROM product where id = '$id'";
    $run3 = mysqli_query($con, $query3);
    $row3 = mysqli_fetch_array($run3);
    $oldqnty = $row3['quantity'];

    if($quantity == 1){
      $newqnty = $oldqnty-1;
    }else{
      $newqnty = $oldqnty+1;
    }
    
    $query="UPDATE product SET quantity = '$newqnty' where id='$id'";
    if(mysqli_query($con,$query)){
      echo 1;
    }else{
      echo 0;
    }
    
  }
?>
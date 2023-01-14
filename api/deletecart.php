<?php
  require_once("../connect.php");
  if(isset($_POST['id']) && isset($_POST['quantity'])){

    $id = mysqli_real_escape_string($con,$_POST['id']);
    $id = htmlentities($id);

    $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
    $quantity = htmlentities($quantity);

    $query4 = "SELECT * FROM product WHERE id = '$id'";
    $run4 = mysqli_query($con, $query4);
    $row4 = mysqli_fetch_array($run4);
    $oldqnty = $row4['quantity'];
    $newqnty = $oldqnty+$quantity;


      $query="DELETE FROM cart WHERE product_id='$id'";
      if(mysqli_query($con,$query)){
        $query2="UPDATE product SET quantity = '$newqnty' WHERE id='$id'";
        if(mysqli_query($con,$query2)){
          echo 1;
        }
        
      }else{
        echo 0;
      }
    
  }
?>
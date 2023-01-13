<?php
require_once("../connect.php");
$query ="select * from cart order by 1 desc";
$run = mysqli_query($con,$query);
if (mysqli_num_rows($run) > 0) {
while($row = mysqli_fetch_array($run)){

$id = $row['id'];
$product_id = $row['product_id'];
$quantity = $row['quantity'];

$query2 ="select * from product where id='$product_id'";
$run2 = mysqli_query($con,$query2);
$row2 = mysqli_fetch_array($run2);
$name = substr($row2['name'], 0, 14);
$price = $row2['price'];
?>

<div class="productcart">

  <div class="cartdetails">
    <p><?php echo $name; ?></p>
    <p>Rs: <?php echo $price; ?></p>
  </div>
  <div class="cartqnty">
      <span id="cartplus" onclick="addqnty(<?php echo $id; ?>);">+</span><span id="cartqntyval<?php echo $id; ?>"><?php echo $quantity; ?></span><span id="cartminus" onclick="cartminus(<?php echo $id; ?>);">-</span>
  </div>
  <div class="cartdel">
    <p onclick="deleteitem(<?php echo $id; ?>);"><i class="fa fa-trash text-danger"></i></p>
  </div>
</div>

<?php } } ?>
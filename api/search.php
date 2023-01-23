<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Showing result from products</h3>
        </div>
        <div class="col-auto">
            <p onclick="searchbills()" class="nav-link float-right px-2 rounded border bg-primary text-white">Bills</p>
        </div>
    </div>
</div>
<?php
    require_once("../connect.php");
    if(isset($_POST['query']) && !empty($_POST['query'])){
        $query = $_POST['query'];
    $query ="select * from product where name LIKE '%{$query}%' and status=1";
    
    $run = mysqli_query($con,$query);
    if(mysqli_num_rows($run) > 0){
?>

        <div class="row mb-4">
            <div class="col-md-12 sales-table">
                <div class="table-responsive border">
                    <table class="table table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th class="text-left">Price</th>
                                <th>Stocks</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            while($row = mysqli_fetch_array($run)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $price = $row['price'];
                            $quantity = $row['quantity'];
                            $gst = $row['gst'];
                            $catid = $row['catid'];

                            $query2 = "SELECT * FROM category WHERE id = '$catid'";
                            $run2 = mysqli_query($con, $query2);
                            $row2 = mysqli_fetch_array($run2);
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $name; ?></td>
                                <td class="text-left">
                                    <span class="text-success">₹ </span> <?php echo $price; ?>
                                </td>
                                <td><?php echo $quantity; ?></td>
                                <td><?php echo $row2['name']; ?></td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php } } ?>

<script>

</script>
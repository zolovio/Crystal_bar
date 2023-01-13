<?php
require_once("../connect.php");
if(isset($_POST['cid']) && !empty($_POST['cid'])){
    $cid = $_POST['cid'];
    $query1 = "SELECT * FROM category where id IN ($cid)";
}else{
    $query1 = "SELECT * FROM category";
}
$run1 = mysqli_query($con, $query1);
if(mysqli_num_rows($run1) > 0){
$ci = 1;
while($row1 = mysqli_fetch_array($run1)){
?>
<!-- catogery one Table -->
<div class="row mb-4">
    <div class="col-md-12 text-center my-1">
        <h3><?php echo $row1['name']; ?> #<?php echo $ci; ?></h3>
    </div>
    <div class="col-md-12 sales-table">
        <div class="table-responsive border">
            <table class="table table-striped custom-table mb-0">
                <thead>
                    <tr>
                        <th>S No</th>
                        <th class="text-left">Product Name</th>
                        <th>Stock available</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM product where catid='$ci'";
                        $run = mysqli_query($con, $query);
                        if(mysqli_num_rows($run) > 0){
                        $i = 1;
                        while($row = mysqli_fetch_array($run)){
                        $id = $row['id'];

                        $query3 = "SELECT * FROM cart where product_id = '$id'";
                        $run3 = mysqli_query($con, $query3);
                        if (mysqli_num_rows($run3) > 0) {
                        $row3 = mysqli_fetch_array($run3);
                            $cquantity = $row3['quantity'];
                        }else{
                            $cquantity = 0;
                        }
                    ?>
                    <tr>
                        <td>#<?php echo $i; ?></td>
                        <td class="text-left"><?php echo $row['name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><span class="text-success">₹ </span> <?php echo $row['price']; ?></td>
                        <td> <i class="fas fa-plus ms-2" onclick="addqnty(<?php echo $id; ?>);"></i> <span class="mx-2 border p-2" id="cartqntyval<?php echo $id; ?>"> <?php echo $cquantity; ?> </span><i class="fa fa-minus ml-2" id="cartminus" onclick="cartminus(<?php echo $id; ?>);"></i></td>
                    </tr>
                    <?php $i++; } } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $ci++; } } ?>
<!-- /catogery one Table end -->



<!-- catogery two Table -->
<!-- <div class="row mb-4">
    <div class="col-md-12 text-center my-1">
        <h3>Category #2</h3>
    </div>
    <div class="col-md-12 sales-table">
        <div class="table-responsive border">
            <table class="table table-striped custom-table mb-0">
                <thead>
                    <tr>
                        <th>S No</th>
                        <th class="text-left">Product Name</th>
                        <th>Stock available</th>

                        <th>Amount</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td>#1</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i
                                class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>

                        <td>#2</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i
                                class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        
                        <td>#3</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i
                                class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        <td>#4</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i
                                class="fa fa-minus ml-2"></i></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->
<!-- /catogery two Table end -->

<!-- catogery three Table -->
<!-- <div class="row mb-4">
    <div class="col-md-12 text-center my-1">
        <h3>Category #3</h3>
    </div>
    <div class="col-md-12 sales-table">
        <div class="table-responsive border">
            <table class="table table-striped custom-table mb-0">
                <thead>
                    <tr>
                        <th>S No</th>
                        <th class="text-left">Product Name</th>
                        <th>Stock available</th>

                        <th>Amount</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                    
                        <td>#1</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i
                                class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        <td>#2</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i
                                class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        <td>#3</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        <td>#4</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-2"></i></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->
<!-- /catogery three Table end -->
<!-- catogery four Table -->
<!-- <div class="row mb-4">
    <div class="col-md-12 text-center my-1">
        <h3>Category #4</h3>
    </div>
    <div class="col-md-12 sales-table">
        <div class="table-responsive border">
            <table class="table table-striped custom-table mb-0">
                <thead>
                    <tr>
                        <th>S No</th>
                        <th class="text-left">Product Name</th>
                        <th>Stock available</th>

                        <th>Amount</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                    
                        <td>#1</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i
                                class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        
                        <td>#2</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i
                                class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                    
                        <td>#3</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        <td>#4</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-2"></i></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->
<!-- /catogery four Table end -->
<!-- catogery five Table -->
<!-- <div class="row mb-4">
    <div class="col-md-12 text-center my-1">
        <h3>Category #5</h3>
    </div>
    <div class="col-md-12 sales-table">
        <div class="table-responsive border">
            <table class="table table-striped custom-table mb-0">
                <thead>
                    <tr>
                        <th>S No</th>
                        <th class="text-left">Product Name</th>
                        <th>Stock available</th>

                        <th>Amount</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                    
                        <td>#1</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        
                        <td>#2</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        <td>#3</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-2"></i></td>

                    </tr>
                    <tr>
                        <td>#4</td>
                        <td class="text-left">samosa</td>
                        <td>28</td>
                        <td><span class="text-success">₹ </span> 17.00</td>
                        <td> <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-2"></i></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->
<!-- /catogery five Table end -->
<?php
    require_once("../connect.php");
    if(isset($_POST['cid']) && !empty($_POST['cid'])){
        $cid = $_POST['cid'];
        $query="SELECT p.id,p.name,p.price,p.quantity,p.gst, c.id as cid, c.name as cname FROM product as p JOIN category as c WHERE p.catid = c.id AND status = 1 AND catid IN ($cid)";
    }else{
        $query = "SELECT p.id,p.name,p.price,p.quantity,p.gst, c.id as cid, c.name as cname FROM product as p JOIN category as c WHERE p.catid = c.id AND status = 1";
    }
    $run = mysqli_query($con,$query);
    if(mysqli_num_rows($run) > 0){
?>

        <div class="row mb-4">
<!--             <div class="col-md-12 text-center my-1">
                <h3>All products</h3>
            </div> -->
            <div class="col-md-12 sales-table">
                <div class="table-responsive border">
                    <table class="table table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="text-left">Price</th>
                                <th>Stocks</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row = mysqli_fetch_array($run)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $price = $row['price'];
                            $quantity = $row['quantity'];
                            $gst = $row['gst'];
                            $cname = $row['cname'];
                            $cid = $row['cid'];
                            ?>
                            <tr>
                                
                                <td><?php echo $name; ?></td>
                                <td class="text-left">
                                    <span class="text-success">₹ </span> <?php echo $price; ?>
                                </td>
                                <td>
                                    <div>
                                        <p>

                                                <?php echo $quantity; ?>
                                            
                                        </p>

                                    </div>
                                </td>
                                <td><?php echo $cname; ?></td>
                                <td>
                                    <div>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal<?php echo $id; ?>">
                                            Edit
                                        </button>


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?php echo $id; ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Fill Details
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="text-left">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Name</label>
                                                                <input type="text" class="form-control" id="name<?php echo $id; ?>" placeholder="name..." value="<?php echo $name; ?>" />
                                                                <input type="hidden" name="id" id="id<?php echo $id; ?>" value="<?php echo $id; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Price</label>
                                                                <input type="number" class="form-control" id="price<?php echo $id; ?>" placeholder="₹..." value="<?php echo $price; ?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Stocks</label>
                                                                <input type="number" class="form-control" id="quantity<?php echo $id; ?>" placeholder="Stocks..." value="<?php echo $quantity; ?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">CATEGORY</label>
                                                                <select class="form-control" id="category<?php echo $id; ?>">
                                                                    <option value="<?php echo $cid; ?>" selected><?php echo $cname; ?></option>
                                                                    <option value="" disabled="">---Select---</option>
                                                                    <?php
                                                                        $query2 = "SELECT * FROM category";
                                                                        $run2 = mysqli_query($con, $query2);
                                                                        while($row2 = mysqli_fetch_array($run2)){
                                                                    ?>
                                                                        <option value="<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" onclick="editProduct(<?php echo $id; ?>)" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal end-->
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php } ?>
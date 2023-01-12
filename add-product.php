<?php
session_start();
if(!isset($_SESSION["crbadminid"])){
header("location:login");
}else{ ?>
<?php require_once('top.php'); ?>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
            <?php require_once('header.php'); ?>
        <!-- /Header -->
        <!-- Sidebar -->
            <?php require_once('sidebar.php'); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Product</h3>
                        </div>
                        
                    </div>
                </div>
             <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form class="text-left" id="addProductForm">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="name..." required="" />
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Price</label>
                            <input type="number" class="form-control" id="price" placeholder="₹..." required="" />
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Stocks</label>
                            <input type="number" class="form-control" id="quantity" placeholder="Quantity..." required="" />
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">CATEGORY</label>
                            <select class="form-control" id="category" required="">
                                <option value="" disabled="" selected="">---Select---</option>
                                <?php
                                    require_once("connect.php");
                                    $query2 = "SELECT * FROM category";
                                    $run2 = mysqli_query($con, $query2);
                                    while($row2 = mysqli_fetch_array($run2)){
                                ?>
                                    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">GST</label>
                            <select class="form-control" id="gst" required="">
                                <option value="" disabled="" selected="">---Select---</option>
                                <option value="1">YES</option>
                                <option value="0">NO</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" id="addProductBtn" class="btn btn-primary">Submit</button>
                        </div>
                        
                    </form>
                </div>
             </div>
            </div>
            <!-- Page Wrapper -->
          
        </div>

    </div>

    <?php require_once('footer.php'); ?>
    <script>
        $('#addProductForm').on('submit',function(e){
            e.preventDefault();
            
            var name = $('#name').val();
            var price = $('#price').val();
            var quantity = $('#quantity').val();
            var category = $('#category').val();
            var gst = $('#gst').val();

            $.ajax({
                url : "api/addproduct",
                type : "POST",
                data: {name: name, price: price, quantity: quantity, category: category, gst: gst},
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success : function(data){
                    if(data == 1){
                       location.href='manage-inventry';
                    }else{
                        alert('Something error, try after sometime');
                    }
                },
                complete: function () {
                    $("#loader1").hide();
                }
            });
        });
    </script>
</body>
</html>
<?php } ?>
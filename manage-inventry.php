<?php
session_start();
if(!isset($_SESSION["crbadminid"])){
header("location:login");
}else{ ?>    
<?php require_once('top.php'); ?>

    <div id="loader1">
      <div id="loader2">
        <div class="loader"></div>
      </div>
    </div>

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
                            <h3 class="page-title">Manage Inventory</h3>
                        </div>
                        
                        <div class="col-auto">
                            <a href=""
                                class="nav-link dropdown-toggle float-right px-2 rounded border bg-primary text-white"
                                data-toggle="dropdown" aria-expanded="false">Filter
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" id="filter-options">
                                <?php 
                                    require_once("connect.php");
                                    $query2 = "SELECT * FROM category order by name";
                                    $run2 = mysqli_query($con,$query2);
                                    while($row2 = mysqli_fetch_array($run2)){
                                      $cid = $row2['id'];
                                      $name = $row2['name'];
                                  ?>
                                    <a class="dropdown-item" href="javascript:void(0)"><input type="checkbox" value="<?php echo $cid; ?>" data-filter_id="<?php echo $cid; ?>" class="mx-2" /> <?php echo $name; ?></a>
                                    
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="add-product"
                                class="nav-link float-right px-2 rounded border bg-primary text-white">Add Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- catogery one Table -->
                <div id="product"></div>
                <!-- /catogery one Table end -->
            </div>
            <!-- Page Wrapper -->
<!--             <div class="row justify-content-center">
                <div>
                    <ul class="pagination pagination-lg">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
 -->        </div>
    </div>

    <?php require_once('footer.php'); ?>
    <script>
        function showproduct(){
            $.ajax({
                url : "api/getproducts",
                type : "POST",
                // data : {cid: cid},
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success : function(data){
                    if(data){
                        $('#loadmore').remove();
                        $("#product").append(data);
                    }else{
                        $('#loadmore').html('Fineshed');
                    }
                },
                complete: function () {
                    $("#loader1").hide();
                }
            });
        }
        showproduct();

        function editProduct(id){

            var id = $('#id'+id).val();
            var name = $('#name'+id).val();
            var price = $('#price'+id).val();
            var quantity = $('#quantity'+id).val();
            var category = $('#category'+id).val();

            $.ajax({
                url : "api/editproduct",
                type : "POST",
                data: {id: id, name: name, price: price, quantity: quantity, category: category},
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success : function(data){
                    if(data == 1){
                       location.href=location.href;
                    }else{
                        alert('Something error, try after sometime');
                    }
                },
                complete: function () {
                    $("#loader1").hide();
                }
            });
        }


        function showproduct2(cid){
            $.ajax({
                url : "api/getproducts",
                type : "POST",
                data : {cid: cid},
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success : function(data){
                    if(data){
                        $('#loadmore').remove();
                        $("#product").html(data);
                    }else{
                        $('#loadmore').html('Fineshed');
                    }
                },
                complete: function () {
                    $("#loader1").hide();
                }
            });
        }

        $("#filter-options :checkbox").click(function(){
            var arr = [];
            $("#filter-options :checkbox:checked").each(function(){
               arr.push($(this).val());
            });
            arr = arr.toString();
            console.log(arr);     
            showproduct2(arr);
        });
    </script>
</body>
</html>
<?php } ?>
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
            <?php require_once('topbar.php'); ?>
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
                            <h3 class="page-title">Creat bill</h3>
                        </div>

                        <div class="col-auto">
                            <a href=""
                                class="nav-link dropdown-toggle float-right px-2 rounded border bg-primary text-white"
                                data-toggle="dropdown" aria-expanded="false">Filter </a>
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
                    </div>
                </div>

                <div id="product"></div>

            </div>

        </div>

       
    </div>

    <?php require_once('footer.php'); ?>
    <script>
        function showproduct(){
            $.ajax({
                url : "api/getproductlist",
                type : "POST",
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success : function(data){
                    if(data){
                        $("#product").append(data);
                    }
                },
                complete: function () {
                    $("#loader1").hide();
                }
            });
        }
        showproduct();

        function showproduct2(cid){
            $.ajax({
                url : "api/getproductlist",
                type : "POST",
                data : {cid: cid},
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success : function(data){
                    if(data){
                        $("#product").html(data);
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

        function addqnty(id,catid){
            var qnt = parseInt($('#qnt'+id).html());
            var cartqntyvalue = parseInt($('#cartqntyvalue'+id).html());
            newVal = cartqntyvalue + 1;
            if (qnt >= 1) {
                $("#qnt"+id).html(qnt-1);
                $("#cartqntyvalue"+id).html(newVal);
                $("#cartqntyval"+id).html(newVal);
                manageproduct(id,newVal,catid);
                updateProduct(id,1);
            }
        }

        function cartminus(id,catid){
            var qnt = parseInt($('#qnt'+id).html());
            var cartqntyvalue = parseInt($('#cartqntyvalue'+id).html());
            newVal = cartqntyvalue - 1;
            if(newVal >= 1){
                $("#cartqntyvalue"+id).html(newVal);
                $("#cartqntyval"+id).html(newVal);
                $("#qnt"+id).html(qnt+1);
                manageproduct(id,newVal,catid);
                updateProduct(id,0);
            }
        }

        function manageproduct(id,quantity,catid){
            $.ajax({
                url : "api/manageproduct",
                type : "POST",
                data : {id: id, quantity: quantity, catid: catid},
                cache: false,
                beforeSend: function () {
                    //$("#loader1").show();
                },
                success : function(data){
                    loadCart();
                },
                complete: function () {
                    //$("#loader1").hide();
                }
            });
        }

        function updateProduct(id,quantity){
            $.ajax({
                url : "api/updateproduct",
                type : "POST",
                data : {id: id, quantity: quantity},
                cache: false,
                beforeSend: function () {
                    //$("#loader1").show();
                },
                success : function(data){

                },
                complete: function () {
                    //$("#loader1").hide();
                }
            });
        }

        function loadCart(){
          $.ajax({
            url : "api/countcart",
            type : "POST",
            success : function(data){
              $("#cartcount").html(data);
              if (data==-1) {
                $("#cartcount").html('0');
              }else{
                $("#cartcount").show();
              }
            }
          });
        }
    </script>
</body>
</html>
<?php } ?>
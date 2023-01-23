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
                            <h3 class="page-title">Manage Waiter</h3>
                        </div>
                        <div class="col-auto">
                            <a href="add-waiter"
                                class="nav-link float-right px-2 rounded border bg-primary text-white">Add Waiter
                            </a>
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
                url : "api/getwaiter",
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

            $.ajax({
                url : "api/editwaiter",
                type : "POST",
                data: {id: id, name: name},
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



    </script>
</body>
</html>
<?php } ?>
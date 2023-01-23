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

            $.ajax({
                url : "api/addwaiter",
                type : "POST",
                data: {name: name},
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success : function(data){
                    if(data == 1){
                       location.href='waiter';
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
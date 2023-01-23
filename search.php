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
            <?php require_once('header2.php'); ?>
        <!-- /Header -->

        <!-- Sidebar -->
            <?php require_once('sidebar.php'); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">


                <div id="product"></div>

            </div>

        </div>
    </div>

    <?php require_once('footer.php'); ?>
    <script>

        $("#searchs").keyup(function(){
            var query = $('#searchs').val();
            showproduct(query);
        });



        function showproduct(query){
            $.ajax({
                url : "api/search",
                type : "POST",
                data : {query: query},
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success : function(data){
                    if(data){
                        $("#product").html(data);
                    }else{
                        
                    }
                },
                complete: function () {
                    $("#loader1").hide();
                }
            });
        }

    function searchbills(){
        var query = $('#searchs').val();
        $.ajax({
            url : "api/searchb",
            type : "POST",
            data : {query: query},
            cache: false,
            beforeSend: function () {
                $("#loader1").show();
            },
            success : function(data){
                if(data){
                    $("#product").html(data);
                }else{
                    
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
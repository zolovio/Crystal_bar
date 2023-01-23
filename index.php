<?php
session_start();
if(!isset($_SESSION["crbadminid"])){
header("location:login");
}else{ ?>

<?php 
require_once('top.php'); 
    require_once("connect.php");

?>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
            <?php require_once('header.php'); ?>
        <!-- /Header -->
<div id="modal">
  <div id="modal-form">
    <h2>Message !!</h2>
    <p id="pm"></p>
    <div id="close-btn">OK</div>
    <div id="right-btn"><i class="fa fa-check"></i></div>
  </div>
</div>
<div id="loader1">
  <div id="loader2">
    <div class="loader"></div>
  </div>
</div>
        <!-- Sidebar -->
            <?php require_once('sidebar.php'); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper dashboard-wrap">

            <div class="content container-fluid" id="homepage">

                <div class="lock">
                    <h4 class="text-center py-2">Please enter passcord to see</h4>
                    <form id="homeForm">
                        <div class="form-group">
                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">Passcode</label>
                          <input type="text" class="form-control" id="passcode" name="passcode" placeholder="Please enter passcode">
                        </div>
                        <span id="error"></span>
                        <button id="homeBtn" type="submit" class="btn btn-primary btn-block">Next</button>
                    </form>
                </div>
            </div>
            <!-- Page Wrapper -->
        </div>
        <!-- /Main Wrapper -->
    </div>

    <?php require_once('footer.php'); ?>
    <script>
        $('#homeForm').on('submit',function(e){
            e.preventDefault();

            var passcode = $('#passcode').val();
            $.ajax({
                url : "api/homepage",
                type : "POST",
                data : {passcode: passcode},
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success: function(data){
                    
                    if(data == 2){
                        $("#modal").show();
                        $("#pm").html("Wrong pascode");
                    }else{
                        $('#homepage').html(data);
                    }
                },
                complete: function () {
                    $("#loader1").hide();
                }
            });
        });
        $("#close-btn").on("click",function(){
            $("#modal").hide();
        });
    </script>
</body>
</html>
<?php } ?>
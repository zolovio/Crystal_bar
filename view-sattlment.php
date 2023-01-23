<?php
session_start();
if(!isset($_SESSION["crbadminid"])){
header("location:login");
}else{ ?>
<?php 
require_once('top.php'); 
    require_once("connect.php");
  $query1 = "select * from bills where date(time) = current_date";
  $run1 = mysqli_query($con,$query1);
  $totalb = mysqli_num_rows($run1);

  $query2 = "select * from bills where week(time)=week(now())";
  $run2 = mysqli_query($con,$query2);
  $ws = mysqli_num_rows($run2);

  $query3 = "SELECT * FROM bills WHERE YEAR(time) = YEAR(CURRENT_DATE()) AND MONTH(time) = MONTH(CURRENT_DATE())";
  $run3 = mysqli_query($con,$query3);
  $ms = mysqli_num_rows($run3);

  $query4 = "select * from product";
  $run4 = mysqli_query($con,$query4);
  $totalproduct = mysqli_num_rows($run4);
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
                    <form id="settelForm">
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
        $('#settelForm').on('submit',function(e){
            e.preventDefault();

            var passcode = $('#passcode').val();
            $.ajax({
                url : "api/settelmentpage",
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
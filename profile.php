<?php
session_start();
if(!isset($_SESSION["crbadminid"])){
header("location:login");
}else{ ?>    
<?php require_once('top.php'); ?>

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

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
            <?php require_once('header.php'); ?>
        <!-- /Header -->

         <!-- Sidebar -->
            <?php require_once('sidebar.php'); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper dashboard-wrap">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">My Profile</h3>
                        </div>
                        
                    </div>
                </div>
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="" src="assets/img/user.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row align-items-center">
                                        <div class="col-md-5" style="min-height:130px;">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 m-b-0">Crystal Bar and Restaurant</h3>
                                            </div>
                                        </div>
                                        <?php
                                            require_once("connect.php");
                                            $query = "SELECT * FROM user WHERE email='admin@gmail.com'";
                                            $run = mysqli_query($con, $query);
                                            $row = mysqli_fetch_array($run);
                                        ?>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href=""><?php echo $row['phone']; ?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Alternative Phone:</span>
                                                    <span class="text"><a href=""><?php echo $row['phone']; ?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href=""><?php echo $row['email']; ?></a></span>
                                                </li>
                                              
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo $row['address']; ?></span>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase">change-Password</h3>
                        <div class="card-box">
                            
                            <div class="skills">
                                <form id="resetForm">
                                    <div class="form-group">
                                    
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Old Password</label>
                                      <input type="password" class="form-control" id="current" name="current">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input type="password" class="form-control" id="new" name="new">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm" name="confirm">
                                      </div>
                                   
                                    <span id="error"></span>
                                    <button id="resetBtn" type="submit" class="btn btn-primary">Save Change</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            
        </div>
        <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->
    
    <?php require_once('footer.php'); ?>
    <script>
        $("#resetBtn").on("click",function(e){
        e.preventDefault();
            var current = $('#current').val();
            var newp = $('#new').val();
            var confirm = $('#confirm').val();
            if(current !== '' && newp !== '' && confirm !== ''){
                $.ajax({
                    url : "api/reset",
                    type : "POST",
                    data : {current: current, newp: newp, confirm: confirm},
                    cache: false,
                    beforeSend: function () {
                        $("#loader1").show();
                    },
                    success: function(data){
                        if(data == 1){
                            location.href=location.href;
                        }if(data == 0){
                            $("#error").html("*Current password is wrong");
                        }if(data == 2){
                            $("#modal").show();
                            $("#pm").html("New and confirm password does not match.");
                        }if(data == 3){
                            $("#error").html("*Something wrong please try after some time");
                        }
                    },
                    complete: function () {
                        $("#loader1").hide();
                    }
                });
            }else{
                alert("Please Fill The Form Correctly");
            }
        });

        $("#close-btn").on("click",function(){
          $("#modal").hide();
        });

    </script>
</body>
</html>
<?php } ?>
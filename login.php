<?php require_once('top.php'); ?>

    <div id="loader1">
        <div id="loader2">
            <div class="loader"></div>
        </div>
    </div>

    <div id="modal">
        <div id="modal-form">
            <h2>Message !!</h2>
            <p>This phone/email do not have account, Please Contact to admin</p>
            <div id="close-btn">OK</div>
            <div id="right-btn"><i class="fa fa-check"></i></div>
        </div>
    </div>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title">Login</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="index.html"><img src="assets/img/logo.png" alt="Preadmin"></a>
                        </div>
                        <form action="index.html">
                            <div class="form-group form-focus">
                                <label class="focus-label">Username or Email</label>
                                <input type="text" id="username" name="username" class="form-control floating">
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control floating">
                            </div>
                            <div class="form-group text-center">
                                <button id="loginBtn" class="btn btn-primary btn-block account-btn" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    
    <?php require_once('footer.php'); ?>

    <script>
        $('#loginBtn').on('click',function(e){
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            if(username !='' && password !=''){
                $.ajax({
                  url : "api/login",
                  type : "POST",
                  data : {email: username, password: password},
                  dataType: "json",
                  cache: false,
                  beforeSend: function () {
                    $("#loader1").show();
                  },
                  success: function(data){
                    if(data.level == 1){
                      location.href="index";
                    }if(data == 2){
                      $("#error").html("*Wrong password");
                    }if(data == 3){
                      $("#modal").show();
                    }
                  },
                  complete: function () {
                    $("#loader1").hide();
                  }
                });
            }else{
                alert('Please fill the from');
            }
        });

        $("#close-btn").on("click",function(){
        $("#modal").hide();
      });
    </script>
</body>
</html>
        <div class="header">
            <!-- Logo -->
            <div class="header-left">
                <a href="index" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                    
                </a>
                <a href="index" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->
            
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="feather-menu"></i>
            </a>
            
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search" />
                    <button class="btn" type="submit"><i class="feather-search"></i></button>
                </form>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar">
                <i class="feather-menu" aria-hidden="true"></i>
            </a>
            <!-- /Mobile Menu Toggle -->
            
            <!-- Header Right Menu -->
            <ul class="nav user-menu float-right">

                 <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="ad-text">Crystal Bar and Restaurant</span>
                        <span class="user-img">
                            <img src="assets/img/profile/user-06.jpg" alt="">
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile">My Profile</a>
                        <a class="dropdown-item" href="login">Logout</a>
                    </div>
                </li>
                <li class="nav-item mr-2 mt-2">
                    <a href="javascript:void(0);" onclick="opennav();"><i class="fa fa-shopping-cart"></i><span class="cartcount" id="cartcount"></span></a>
                    <div class="showcart" id="mynav">
                      <!-- <p>Showing cart details</p> -->
                      <div class="cartallproduct" id="cartallproduct"></div>

                      <div class="cheackout">
                        <a href="bill-generate" class="btn btn-primary rounded"><i class="fa fa-file" aria-hidden="true"></i> Create Bill</a>
                      </div>                                                          
                    </div>
                </li>

            </ul>
            <!-- /Header Right Menu -->
        </div>

<script>
    const opennav = () =>{
    showcartproduct();
        var x = document.getElementById("mynav");
        if (x.style.width === "300px") {
            x.style.width = "0px";
        } else {
            x.style.width = "300px";
        }
    }


</script>
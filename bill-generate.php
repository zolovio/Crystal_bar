<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Crystal Bar and Restaurant-Profile</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS --> 
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    
</head>
<style>
    #invoice-POS {
    padding: 2mm;
    margin: 0 auto;
    width: 44mm;
    background: #FFF; border:1px solid rgb(233, 233, 233)
  }
  #invoice-POS ::selection {
    background: #f31544;
    color: #FFF;
  }
  #invoice-POS ::moz-selection {
    background: #f31544;
    color: #FFF;
  }
  #invoice-POS h1 {
    font-size: 1.5em;
    color: #222;
  }
  #invoice-POS h2 {
    font-size: 0.9em;
  }
  #invoice-POS h3 {
    font-size: 1.2em;
    font-weight: 300;
    line-height: 2em;
  }
  #invoice-POS p {
    font-size: 0.7em;
    color: #666;
    line-height: 1.2em;
  }
  #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot {
    /* Targets all id with 'col-' */
    border-bottom: 1px solid #EEE;
  }
  #invoice-POS #top {
    min-height: 100px;
  }
  #invoice-POS #mid {
    min-height: 80px;
  }
  #invoice-POS #bot {
    min-height: 50px;
  }
  #invoice-POS #top .logo {
    height: 60px;
    width: 60px;
    background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
    background-size: 60px 60px;
  }
  #invoice-POS .clientlogo {
    float: left;
    height: 60px;
    width: 60px;
    background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
    background-size: 60px 60px;
    border-radius: 50px;
  }
  #invoice-POS .info {
    display: block;
    margin-left: 0;
  }
  #invoice-POS .title {
    float: right;
  }
  #invoice-POS .title p {
    text-align: right;
  }
  #invoice-POS table {
    width: 100%;
    border-collapse: collapse;
  }
  #invoice-POS .tabletitle {
    font-size: 0.5em;
    background: #EEE;
  }
  #invoice-POS .service {
    border-bottom: 1px solid #EEE;
  }
  #invoice-POS .item {
    width: 24mm;
  }
  #invoice-POS .itemtext {
    font-size: 0.5em;
  }
  #invoice-POS #legalcopy {
    margin-top: 5mm;
  }
  </style>
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">
            <!-- Logo -->
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
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
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="badge badge-pill bg-danger float-right">1</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Cart</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                              
                                <li class="notification-message">
                                 
                                        <div class="media">
                                            <div class="table-responsive border">
                                                <table class="table table-striped custom-table mb-0">
                                                   
                                                    <tbody>
                                                      
                                                        <tr>
                                                            <td class="text-left">samosa</td>
                                                            <td>2</td>
                                                            <td><span class="text-success">₹ </span> 34.00</td>
                                                            <td class="d-flex align-items-center">
                                                                <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-1" ></i><i class="fa fa-trash ml-3 border text-danger p-2" aria-hidden="true"></i></td>
                                                         
                                                        </tr>
                                                      
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                  
                                </li>
                                <li class="notification-message">
                                 
                                    <div class="media">
                                        <div class="table-responsive border">
                                            <table class="table table-striped custom-table mb-0">
                                               
                                                <tbody>
                                                  
                                                    <tr>
                                                        <td class="text-left">samosa</td>
                                                        <td>2</td>
                                                        <td><span class="text-success">₹ </span> 34.00</td>
                                                        <td class="d-flex align-items-center">
                                                            <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-1" ></i><i class="fa fa-trash ml-3 border text-danger p-2" aria-hidden="true"></i></td>
                                                     
                                                    </tr>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                              
                            </li>
                            <li class="notification-message">
                                 
                                <div class="media">
                                    <div class="table-responsive border">
                                        <table class="table table-striped custom-table mb-0">
                                           
                                            <tbody>
                                              
                                                <tr>
                                                    <td class="text-left">samosa</td>
                                                    <td>2</td>
                                                    <td><span class="text-success">₹ </span> 34.00</td>
                                                    <td class="d-flex align-items-center">
                                                        <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-1" ></i><i class="fa fa-trash ml-3 border text-danger p-2" aria-hidden="true"></i></td>
                                                 
                                                </tr>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          
                        </li>
                        <li class="notification-message">
                                 
                            <div class="media">
                                <div class="table-responsive border">
                                    <table class="table table-striped custom-table mb-0">
                                       
                                        <tbody>
                                          
                                            <tr>
                                                <td class="text-left">samosa</td>
                                                <td>2</td>
                                                <td><span class="text-success">₹ </span> 34.00</td>
                                                <td class="d-flex align-items-center">
                                                    <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-1" ></i><i class="fa fa-trash ml-3 border text-danger p-2" aria-hidden="true"></i></td>
                                             
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      
                    </li>
                    <li class="notification-message">
                                 
                        <div class="media">
                            <div class="table-responsive border">
                                <table class="table table-striped custom-table mb-0">
                                   
                                    <tbody>
                                      
                                        <tr>
                                            <td class="text-left">samosa</td>
                                            <td>2</td>
                                            <td><span class="text-success">₹ </span> 34.00</td>
                                            <td class="d-flex align-items-center">
                                                <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-1" ></i><i class="fa fa-trash ml-3 border text-danger p-2" aria-hidden="true"></i></td>
                                         
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                  
                </li>
                <li class="notification-message">
                                 
                    <div class="media">
                        <div class="table-responsive border">
                            <table class="table table-striped custom-table mb-0">
                               
                                <tbody>
                                  
                                    <tr>
                                        <td class="text-left">samosa</td>
                                        <td>2</td>
                                        <td><span class="text-success">₹ </span> 34.00</td>
                                        <td class="d-flex align-items-center">
                                            <i class="fas fa-plus ms-2"></i> <span class="mx-2 border p-2"> 1 </span><i class="fa fa-minus ml-1" ></i><i class="fa fa-trash ml-3 border text-danger p-2" aria-hidden="true"></i></td>
                                     
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
              
            </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer " style="height: 50px;">
                            <a href="bill-generate.html" class="btn btn-primary mt-1 text-white">Create Bill</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="ad-text">Crystal Bar and Restaurant</span>
                        <span class="user-img">
                            <img src="assets/img/profile/user-06.jpg" alt="">
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <!-- <a class="dropdown-item" href="edit-profile.html">Edit Profile</a> -->
                        <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Right Menu -->
        </div>
        <!-- /Header -->

         <!-- Sidebar -->
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>
                        <li class="active">
                            <a href="index.html"><i class="fas fa-chart-pie"></i><span class="side-txt">Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-calculator" aria-hidden="true"></i><span class="side-txt">Billing</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="creat-bill.html">Creat Bill</a></li>
                                <li><a href="view-sattlment.html">View Settlement</a></li>
                                <li><a href="view-bill.html">View Bill</a></li>
                               
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span class="side-txt">Inventory Management</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="manage-inventry.html">Manage Inventory</a></li>
                                <li><a href="add-product.html">Add Product</a></li>
                            
                               
                            </ul>
                        </li>
                 
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper dashboard-wrap">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Creat Bill</h3>
                        </div>
                        <!-- <div class="col-auto">
                            <a href="edit-profile.html" class="btn btn-primary">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="profile-view">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control"  required>
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="number" class="form-control" >
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control">
                                     
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" >
                                        
                                      </div>
                                  
                                    
                                   
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                                <div class="profile-basic d-none">
                                    <div class="row align-items-center">
                                       
                                        <div class="col-md-12">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Name:</span>
                                                    <span class="text"><a href="">Farzan</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="">9876543210</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="">johndoe@example.com</a></span>
                                                </li>
                                              
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</span>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-view">
                               
                                <div class="profile-basic ">
                                    <div class="row my-auto">
                                       
                                        <div class="col-md-12">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Name:</span>
                                                    <span class="text"><a href="">Farzan</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="">9876543210</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="">johndoe@example.com</a></span>
                                                </li>
                                              
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</span>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 border-top">
                        <div class="col-md-12 my-3">
                            <div>
                                <div class="mx-auto"><i class="fa fa-download" aria-hidden="true"></i> <small>Download</small></div>
                                <div><i class="fa fa-print" aria-hidden="true"></i> <small>Print</small></div>
                            </div>
                            <div id="invoice-POS">
    
                                <center id="top">
                                  <div class="logo"></div>
                                  <div class="info"> 
                                    <h2>Restaurant Logo</h2>
                                  </div>
                                </center>
                                
                                <div id="mid">
                                  <div class="info">
                                    <h2>Contact Info</h2>
                                    <p> 
                                        Address : street city, state 0000</br>
                                        Email   : JohnDoe@gmail.com</br>
                                        Phone   : 555-555-5555</br>
                                    </p>
                                  </div>
                                </div><!--End Invoice Mid-->
                                
                                <div id="bot">
                                              <div id="table">
                                                    <table>
                                                        <tr class="tabletitle">
                                                            <td class="item"><h2>Item</h2></td>
                                                            <td class="Hours"><h2>Qty</h2></td>
                                                            <td class="Rate"><h2>Sub Total</h2></td>
                                                        </tr>
                            
                                                        <tr class="service">
                                                            <td class="tableitem"><p class="itemtext">Communication</p></td>
                                                            <td class="tableitem"><p class="itemtext">5</p></td>
                                                            <td class="tableitem"><p class="itemtext">$375.00</p></td>
                                                        </tr>
                            
                                                        <tr class="service">
                                                            <td class="tableitem"><p class="itemtext">Asset Gathering</p></td>
                                                            <td class="tableitem"><p class="itemtext">3</p></td>
                                                            <td class="tableitem"><p class="itemtext">$225.00</p></td>
                                                        </tr>
                            
                                                        <tr class="service">
                                                            <td class="tableitem"><p class="itemtext">Design Development</p></td>
                                                            <td class="tableitem"><p class="itemtext">5</p></td>
                                                            <td class="tableitem"><p class="itemtext">$375.00</p></td>
                                                        </tr>
                            
                                                        <tr class="service">
                                                            <td class="tableitem"><p class="itemtext">Animation</p></td>
                                                            <td class="tableitem"><p class="itemtext">20</p></td>
                                                            <td class="tableitem"><p class="itemtext">$1500.00</p></td>
                                                        </tr>
                            
                                                        <tr class="service">
                                                            <td class="tableitem"><p class="itemtext">Animation Revisions</p></td>
                                                            <td class="tableitem"><p class="itemtext">10</p></td>
                                                            <td class="tableitem"><p class="itemtext">$750.00</p></td>
                                                        </tr>
                            
                            
                                                        <tr class="tabletitle">
                                                            <td></td>
                                                            <td class="Rate"><h2>tax</h2></td>
                                                            <td class="payment"><h2>$419.25</h2></td>
                                                        </tr>
                            
                                                        <tr class="tabletitle">
                                                            <td></td>
                                                            <td class="Rate"><h2>Total</h2></td>
                                                            <td class="payment"><h2>$3,644.25</h2></td>
                                                        </tr>
                            
                                                    </table>
                                                </div><!--End Table-->
                            
                                                <div id="legalcopy">
                                                    <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
                                                    </p>
                        
                                                    <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
                                                    </p>
                                                </div>
                            
                                            </div><!--End InvoiceBot-->
                              </div><!--End Invoice-->
                        </div>
                    </div>
                </div>
               
                 
            </div>
          
        </div>
        <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->
    
    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>
</body>

</html>
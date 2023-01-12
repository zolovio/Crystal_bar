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
        <div class="page-wrapper dashboard-wrap">

            <div class="content container-fluid">

                <!-- Sales Dashboard -->
                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-12">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Sales Activity</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row sales-dashboard">
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card dash-widget">
                                    <img src="assets/img/icons/open-box.png" alt="">
                                   
                                    <h3>60 <span>Qty</span></h3>
                                    <h4>Today's Sales</h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card dash-widget box-2">
                                    <img src="assets/img/icons/open-box.png" alt="">
                                 
                                    <h3>1 <span>Pkag</span></h3>
                                    <h4>Weekly Sales</h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card dash-widget box-3">
                                    <img src="assets/img/icons/open-box.png" alt="">
                                  
                                    <h3>3 <span>Pkag</span></h3>
                                    <h4>Monthly Sales</h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card dash-widget box-4">
                                    <img src="assets/img/icons/open-box.png" alt="">
                                   
                                    <h3>4 <span>Pkag</span></h3>
                                    <h4>Total Product's</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Sales Dashboard -->
<!-- Profit Chart -->
<div class="row pro-chart">
    <div class="col-xl-6 col-sm-6 d-flex">
        <div class="card chart-wrap sales-chart flex-fill">
            <div class="chart-header">
                <p>Sales Overview</p>
                <h2 class="float-left">$12,519.00</h2>
                <h3 class="float-right"><i class="fas fa-arrow-right"></i> 22%</h3>
            </div>
            <div class="chart-body">
                <div id="sales-view"></div>
            </div>
        </div>
    </div>
   
    <div class="col-xl-6 col-sm-6 d-flex">
        <div class="card card-table card-table-top flex-fill">
            <div class="card-header">
                <h4 class="card-title m-b-0 float-left">Latest Settlement</h4>
                <a href="" class="nav-link dropdown-toggle float-right p-0 d-none" data-toggle="dropdown" aria-expanded="false">This Month </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void(0)">Active</a>
                    <a class="dropdown-item" href="javascript:void(0)">Inactive</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive sales-table">	
                    <table class="table custom-table table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Settlement Date</th>
                                <th>Settlement Time</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1</td>
                                <td>12-12-2023</td>
                                <td>12:24 P.M</td>
                                <td><i class="fa fa-print" aria-hidden="true"></i>
                                    <i class="fa fa-download ml-2" aria-hidden="true"></i>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>#2</td>
                                <td>12-12-2023</td>
                                <td>12:24 P.M</td>
                                <td><i class="fa fa-print" aria-hidden="true"></i>
                                    <i class="fa fa-download ml-2" aria-hidden="true"></i>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>#3</td>
                                <td>12-12-2023</td>
                                <td>12:24 P.M</td>
                                <td><i class="fa fa-print" aria-hidden="true"></i>
                                    <i class="fa fa-download ml-2" aria-hidden="true"></i>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>#4</td>
                                <td>12-12-2023</td>
                                <td>12:24 P.M</td>
                                <td><i class="fa fa-print" aria-hidden="true"></i>
                                    <i class="fa fa-download ml-2" aria-hidden="true"></i>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>#5</td>
                                <td>12-12-2023</td>
                                <td>12:24 P.M</td>
                                <td><i class="fa fa-print" aria-hidden="true"></i>
                                    <i class="fa fa-download ml-2" aria-hidden="true"></i>
                                </td>
                               
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- /Profit Chart -->
           

                

                

                <!-- Purchase Order -->
                <div class="row product-section">
                  
                    <div class="col-xl-12 col-sm-6 d-flex">
                        <div class="card card-table card-table-top flex-fill">
                            <div class="card-header ">
                                <h4 class="card-title m-b-0 float-left">Latest Bills</h4>
                                <a href="" class="nav-link dropdown-toggle float-right p-0 d-none" data-toggle="dropdown" aria-expanded="false">This Month </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Active</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Inactive</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive sales-table">	
                                    <table class="table custom-table table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>S No</th>
                                                <th>Customer Name</th>
                                                <th>Bill Amount</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1</td>
                                                <td>Farzan Khan</td>
                                                <td><span class="text-success">₹ </span> 2700.00</td>
                                               
                                                <td><i class="fa fa-print" aria-hidden="true"></i>
                                                    <i class="fa fa-download ml-2" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#2</td>
                                                <td>Farzan Khan</td>
                                                <td><span class="text-success">₹ </span> 2700.00</td>
                                               
                                                <td><i class="fa fa-print" aria-hidden="true"></i>
                                                    <i class="fa fa-download ml-2" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#3</td>
                                                <td>Farzan Khan</td>
                                                <td><span class="text-success">₹ </span> 2700.00</td>
                                               
                                                <td><i class="fa fa-print" aria-hidden="true"></i>
                                                    <i class="fa fa-download ml-2" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#4</td>
                                                <td>Farzan Khan</td>
                                                <td><span class="text-success">₹ </span> 2700.00</td>
                                               
                                                <td><i class="fa fa-print" aria-hidden="true"></i>
                                                    <i class="fa fa-download ml-2" aria-hidden="true"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Purchase Order -->
                
            </div>
            <!-- Page Wrapper -->
        </div>
        <!-- /Main Wrapper -->
    </div>

    <?php require_once('footer.php'); ?>
</body>
</html>
<?php } ?>
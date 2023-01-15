<?php
session_start();
if(!isset($_SESSION["crbadminid"])){
header("location:login");
}else{ 

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

                                    <h3><?php echo $totalb; ?> <span>Qty</span></h3>
                                    <h4>Today's Sales</h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card dash-widget box-2">
                                    <img src="assets/img/icons/delivery.png" alt="">

                                    <h3><?php echo $ws; ?> <span>Pkag</span></h3>
                                    <h4>Weekly Sales</h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card dash-widget box-3">
                                    <img src="assets/img/icons/peop-del.png" alt="">

                                    <h3><?php echo $ms; ?> <span>Pkag</span></h3>
                                    <h4>Monthly Sales</h4>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card dash-widget box-4">
                                    <img src="assets/img/icons/rescipt.png" alt="">

                                    <h3><?php echo $totalproduct; ?> <span>Pkag</span></h3>
                                    <h4>Total Product's</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Sales Dashboard -->







                <!-- Purchase Order -->
                <div class="row product-section">

                    <div class="col-xl-12 col-sm-6 d-flex">
                        <div class="card card-table card-table-top flex-fill">
                            <div class="card-header ">
                                <h4 class="card-title m-b-0 float-left"> Bills</h4>
                                <a href="" class="nav-link dropdown-toggle float-right p-0 d-none"
                                    data-toggle="dropdown" aria-expanded="false">This Month </a>
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
                                            <?php
                                                $query5 = "SELECT * FROM bills order by 1 desc";
                                                $run5 = mysqli_query($con, $query5);
                                                while($row5 = mysqli_fetch_array($run5)){
                                            ?>
                                            <tr>
                                                <td>#<?php echo $row5['id']; ?></td>
                                                <td><?php echo $row5['name']; ?></td>
                                                <td><span class="text-success">₹ </span> <?php echo $row5['total']; ?></td>
                                                <td><a href="mybills?id=<?php echo $row5['bill_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <?php } ?>
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
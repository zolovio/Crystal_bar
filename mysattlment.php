<?php
session_start();
if(!isset($_SESSION["crbadminid"])){
header("location:login");
}else{ ?>
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
    .ctgry::before {
        content: '*';
        font-size: 34px;
        position: relative;
        top: 0.7rem;
    }

    .total-qty {
        text-transform: uppercase;
        border-top: dotted 2px black;

        margin-top: 1rem;
    }

    .total-value {
        text-transform: uppercase;
        border-bottom: dotted 2px black;
        padding-bottom: 1.5rem;
        margin-top: 1rem;

    }
</style>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
            <?php require_once('header.php');  ?>
        <!-- /Header SELECT *from bills WHERE DATE(time)='2023-01-13';-->

         <!-- Sidebar -->
            <?php require_once('sidebar.php'); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper dashboard-wrap">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Settlement</h3>
                        </div>
                        <!-- <div class="col-auto">
                            <a href="edit-profile.html" class="btn btn-primary">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="card-box">
                   
                    <div class="row my-5 border-top">
                        <div class="col-md-12 my-3">
                            <?php
                                require_once("connect.php");
                                $query6 = "SELECT * FROM user WHERE email='admin@gmail.com'";
                                $run6 = mysqli_query($con, $query6);
                                $row6 = mysqli_fetch_array($run6);
                                $dateno = $_GET['date'];

                                $cdate = date('Y-m-').$dateno;
                                $query = "SELECT * FROM `bills` WHERE date(time) = '$cdate'";
                                $run = mysqli_query($con,$query);
                                if(mysqli_num_rows($run) > 0){
                                while($row = mysqli_fetch_array($run)){
                                $billid[] = $row['bill_id'];
                                }
                                $billid = implode("','",$billid);
                            ?>
                            <div>
                                <div onclick="createPDF()" class="mx-auto"><i class="fa fa-download" aria-hidden="true"></i> <small>Download</small></div>
                                <div onclick="printbill()" class="print"><i class="fa fa-print" aria-hidden="true"></i> <small>Print</small></div>
                            </div>

                            <div class="row justify-content-center text-dark" id="invoicepdf">
                                <div class="col border " style="max-width: 380px;">
                                    <div class="info text-uppercase text-center">
                                        <p class="mb-0"><?php echo $row6['address']; ?></p>
                                        <p> mo <?php echo $row6['phone']; ?> <?php echo $row6['gst']; ?></p>
                                    </div>
                                    <div class="info-2 text-uppercase text-center">
                                        <p class="mb-0 ">plu sale report </p>
                                        <p><?php echo date('Y-m-').$dateno; ?> 12:00:00 rep <span> no <?php echo date('Ymd'); ?></span> </p>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table m-b-0">
                                            <thead class="">
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>SL.QTY</th>
                                                    <th>SL.VALUE</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-uppercase">
                                                <?php
 

                                                    $totalprice = 0;
                                                    $totaligst = 0;
                                                    $totalcgst = 0;
                                                    $totalqnty = 0;
                                                    $cat_qnty = 0;
                                                    $cat_total = 0;
                                                    $query2 = "SELECT DISTINCT(cat_id) FROM billproduct WHERE bill_id IN ('$billid')";
                                                    $run2 = mysqli_query($con,$query2);
                                                    while($row2 = mysqli_fetch_array($run2)){
                                                        $cat_id = $row2['cat_id'];

                                                      $query3 = "SELECT * FROM category WHERE id = '$cat_id'";
                                                      $run3 = mysqli_query($con, $query3);
                                                      $row3 = mysqli_fetch_array($run3);
                                                      $cname = $row3['name'];
                                                ?>
                                                <tr><td><h3 class="ctgry catname"><?php echo $cname; ?></h3></td></tr>
                                                  <?php
                                                    $query4 = "SELECT * FROM billproduct WHERE cat_id = '$cat_id' and bill_id IN ('$billid')";
                                                    $run4 = mysqli_query($con, $query4);
                                                    $sl = 0001;
                                                    while($row4 = mysqli_fetch_array($run4)){
                                                      $pid = $row4['product_id'];
                                                      $qnty = $row4['quantity'];

                                                      $query5 = "SELECT * FROM product WHERE id = '$pid'";
                                                      $run5 = mysqli_query($con, $query5);
                                                      $row5 = mysqli_fetch_array($run5);
                                                      $name = $row5['name'];
                                                      $price = $row5['price'];
                                                      $gst = $row5['gst'];

                                                      $aprice = $price*$qnty;
                                                      $totalprice+=$aprice;

                                                      if($gst == 1){
                                                        $igst = $aprice*0.03;
                                                        $cgst = $aprice*0.03;
                                                      }else{
                                                        $igst = 0;
                                                        $cgst = 0;
                                                      }
                                                      $totaligst+=$igst;
                                                      $totalcgst+=$cgst;
                                                      $totalqnty+=$qnty;

                                                      $cat_total += $aprice;
                                                      $cat_qnty += $qnty;

                                                      $netamount = round($totalprice+$totaligst+$totalcgst);
                                                ?>
                                                <tr class="">
                                                    <td><?php echo $sl; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $qnty; ?>.00</td>
                                                    <td><?php echo $aprice; ?>.00</td>
                                                </tr>

                                                <?php $sl++; } ?>
                                                <tr>
                                                    <td colspan="2">Total Qty :<?php echo $cat_qnty; $cat_qnty = 0;?></td>
                                                    <td colspan="2">total value:<?php echo $cat_total;  $cat_total = 0;?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="total-qty">
                                        <h4 class="pt-2">net qty : <?php echo $totalqnty; ?></h4>
                                    </div>
                                    <div class="total-value">
                                        <h4 class="mb-0">total value: <span>RS</span> <?php echo $totalprice; ?>.00 </h4>
                                        <h4 class="mb-0">igst - 3%</h4>
                                        <h4 class="mb-0">cgst - 3%</h4>
                                        <h4 class="mb-0">net value :<span>RS</span> <?php echo $netamount; ?>.00</h4>
                                    </div>
                                    <div class="text-center my-2 mt-0">
                                        Thank you
                                    </div>
                                    <style>

                                    </style>
                                </div>
                            </div>
                            <?php }else{ ?>
                                <p>No Record Found (Try after 12:00 AM)</p>
                            <?php } ?>
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
      function printbill(){
        $.print("#invoicepdf");
      }

      var date = "<?php echo date('Y-m-').$dateno; ?>";

      function createPDF() {
      var element = document.getElementById("invoicepdf");
      html2pdf(element, {
        margin: 0.5,
        padding: 0,
        filename: "settlment"+date+".pdf",
        image: { type: "jpeg", quality: 1 },
        html2canvas: { scale: 2, logging: true },
        jsPDF: { unit: "in", format: "A2", orientation: "P" },
        class: createPDF,
      });
    }
    </script>
</body>
</html>
<?php } ?>
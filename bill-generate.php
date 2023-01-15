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
                                        <input type="text" id="name" class="form-control">
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="number" id="number" class="form-control" >
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" id="email" class="form-control">
                                     
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" id="address" class="form-control" >
                                        
                                      </div>
                                  
                                    <button type="submit" id="billBtn" class="btn btn-primary">Submit</button>
                                  </form>
 
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
                                                    <span class="text"><a href="" id="fullname">Full name</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="" id="contactno">Contact Number</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="" id="emailaddress">Email address</a></span>
                                                </li>
                                              
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text" id="fulladdress">Full address</span>
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
                                <div onclick="createPDF()" class="mx-auto"><i class="fa fa-download" aria-hidden="true"></i> <small>Download</small></div>
                                <div onclick="printbill()"><i class="fa fa-print" aria-hidden="true"></i> <small>Print</small></div>
                            </div>
                            <?php
                                require_once("connect.php");
                                $query6 = "SELECT * FROM user WHERE email='admin@gmail.com'";
                                $run6 = mysqli_query($con, $query6);
                                $row6 = mysqli_fetch_array($run6);
                            ?>
                            <div class="row justify-content-center text-dark" id="invoicepdf">
                                <div class="col-md-3 border " style="max-width: 380px;">
                                    <div class="info text-uppercase text-center">
                                        <p class="mb-0"><?php echo $row6['address']; ?></p>
                                        <p> mo <?php echo $row6['phone']; ?> <?php echo $row6['gst']; ?></p>
                                    </div>
                                    <div class="info-2 text-uppercase text-center">
                                        <p class="mb-0 "><span id="fullname1">Full Name</span> <span><i class="fas fa-mobile-alt"></i> <span id="contctno1">Contact Number</span></span></p>
                                        <p>24-12-2022 13:07:48 rep <span> no 0231</span> </p>
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
                                                  $query = "SELECT DISTINCT(cat_id) FROM cart";
                                                  $run = mysqli_query($con, $query);
                                                    $totalprice = 0;
                                                    $totaligst = 0;
                                                    $totalcgst = 0;
                                                  while ($row = mysqli_fetch_array($run)) {
                                                    $cat_id = $row['cat_id'];

                                                      $query4 = "SELECT * FROM category WHERE id = '$cat_id'";
                                                      $run4 = mysqli_query($con, $query4);
                                                      $row4 = mysqli_fetch_array($run4);
                                                      $cname = $row4['name'];
                                                  ?>
                                                  <tr><td><h3 class="ctgry catname"> <?php echo $cname; ?></h3></td></tr>
                                                  <?php
                                                    $query2 = "SELECT * FROM cart WHERE cat_id = '$cat_id'";
                                                    $run2 = mysqli_query($con, $query2);
                                                    $sl = 0001;
                                                    while ($row2 = mysqli_fetch_array($run2)) {
                                                      $pid = $row2['product_id'];
                                                      $qnty = $row2['quantity'];

                                                      $query3 = "SELECT * FROM product WHERE id = '$pid'";
                                                      $run3 = mysqli_query($con, $query3);
                                                      $row3 = mysqli_fetch_array($run3);
                                                      $name = $row3['name'];
                                                      $price = $row3['price'];
                                                      $gst = $row3['gst'];

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

                                                      $netamount = round($totalprice+$totaligst+$totalcgst);
                                                    
                                                ?>
                                                <tr class="">
                                                    <td><?php echo $sl; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $qnty; ?>.00</td>
                                                    <td><?php echo $aprice; ?>.00</td>
                                                </tr>
                                                <?php $sl++; } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                    </div>

                                   <div class="total-qty"></div>
                                    <div class="total-value">
                                        <h4 class="mb-0">Total value: <span>RS</span> <?php echo $totalprice; ?>.00 </h4>
                                        <h4 class="mb-0">Igst - 3% </h4>
                                        <h4 class="mb-0">Cgst - 3% </h4>
                                        <h4 class="mt-3">Net value :<span>RS</span> <span id="netprice"><?php echo $netamount; ?></span>.00</h4>
                                    </div>
                                    <div class="text-center my-2 mt-0">
                                        <small>
                                            Hi <span class="text-uppercase">Name of recipient</span>, I just wanted to drop you a quick note to let you know that we have received your recent payment in respect of invoice [invoice reference number]. Thank you very much. We really appreciate it.</p>
                                    </div>
                                    <style>

                                    </style>
                                </div>
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

      $("#name").keyup(function(){
        $("#fullname").html($('#name').val());
        $('#fullname1').html($('#name').val());
      });

      $("#number").keyup(function(){
        $("#contactno").html($('#number').val());
        $('#contctno1').html($('#number').val());
      });

      $("#email").keyup(function(){
        $("#emailaddress").html($('#email').val());
      });

      $("#address").keyup(function(){
        $("#fulladdress").html($('#address').val());
      });

      $('#billBtn').on('click',function(e){
        e.preventDefault();
        var name = $('#name').val();
        var number = $('#number').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var netprice = $('#netprice').html();

        $.ajax({
            url : "api/billgenerate",
            type : "POST",
            data: {name: name, number: number, email: email, address: address, netprice: netprice},
            cache: false,
            dataType: 'JSON',
            beforeSend: function () {
                $("#loader1").show();
            },
            success : function(data){
                if(data.status == 0){
                   alert('Something error, try after sometime');
                }
                if(data.status == 1){
                    location.href = 'mybills?id='+data.userdata;
                }
            },
            complete: function () {
                $("#loader1").hide();
            }
        });
      })
    </script>

    <script>
      function printbill(){
        $.print("#invoicepdf");
      }

      var date = "<?php echo date('Y-m-d'); ?>";
      function createPDF() {
      var element = document.getElementById("invoicepdf");
      html2pdf(element, {
        margin: 0.5,
        padding: 0,
        filename: "bill"+date+".pdf",
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
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
  @media print
{
  .button
  {
    display: none;
  }
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
            <?php require_once('header.php');  ?>
        <!-- /Header SELECT *from bills WHERE DATE(time)='2023-01-13';-->

         <!-- Sidebar -->
            <?php require_once('sidebar.php'); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper dashboard-wrap">
            <div class="content container-fluid">

                <div class="card-box">

                    <div class="row my-5 border-top">
                        <div class="col-md-12 my-3">
                            <div>
                                <div onclick="createPDF()" class="mx-auto"><i class="fa fa-download" aria-hidden="true"></i> <small>Download</small></div>
                                <div onclick="printbill()" class="print"><i class="fa fa-print" aria-hidden="true"></i> <small>Print</small></div>
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
    
    <?php require_once('footer.php'); ?>
    <script src="assets/js/html2pdf.bundle.min.js"></script>
    <script>
      function printbill(){
        window.print();
      }

      function createPDF() {
      var element = document.getElementById("invoice-POS");
      html2pdf(element, {
        margin: 0.5,
        padding: 0,
        filename: "quation.pdf",
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
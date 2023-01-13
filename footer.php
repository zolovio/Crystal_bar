    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    
    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/apexcharts.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

            <script>
            function showcartproduct(){
                $.ajax({
                    url : "api/showcartproduct",
                    type : "POST",
                    success : function(data){
                        $("#cartallproduct").html(data);
                    }
                });
            }
            showcartproduct();


        loadTable();
        function loadTable(){
          $.ajax({
            url : "api/countcart",
            type : "POST",
            success : function(data){
              $("#cartcount").html(data);
              if (data==-1) {
                $("#cartcount").html('0');
              }else{
                $("#cartcount").show();
              }
            }
          });
        }
        </script>
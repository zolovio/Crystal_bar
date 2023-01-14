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
                        if(data){
                            $("#cartallproduct").html(data);
                            $('#createbill').css('display','block');
                        }
                        
                    }
                });
            }
            


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


        function deleteitem(id,quantity){
            $.ajax({
                url : "api/deletecart",
                type : "POST",
                data: {id: id, quantity: quantity},
                cache: false,
                beforeSend: function () {
                    $("#loader1").show();
                },
                success : function(data){
                    showcartproduct();
                    loadTable();
                },
                complete: function () {
                    $("#loader1").hide();
                }
            });
        }

        </script>

<script type="text/javascript">
var path = window.location.pathname;
var page = path.split("/").pop();
if(page == 'index'){
    $('#index').addClass('active');
}
if(page == 'creat-bill'){
    $('#creat-bill').addClass('active');
}
if(page == 'view-bill'){
    $('#creat-bill').addClass('active');
}
if(page == 'view-sattlment'){
    $('#creat-bill').addClass('active');
}
if(page == 'manage-inventry'){
    $('#manage-inventry').addClass('active');
}
if(page == 'add-product'){
    $('#manage-inventry').addClass('active');
}


if(page == 'settings'){
    $('#settings').addClass('active');
}
console.log( page );
</script>
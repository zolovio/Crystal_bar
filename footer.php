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

    <!-- Download PDF JS -->
    <script src="assets/js/jQuery.print.min.js"></script>

    <!-- Print JS -->
    <script src="assets/js/html2pdf.bundle.min.js"></script>

            <script>

            




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
if(page == 'waiter'){
    $('#waiter').addClass('active');
}
$('#search').on('click',function(){
    location.href = 'search';
});
console.log( page );
</script>
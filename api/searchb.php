<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Showing result from products</h3>
        </div>
        <div class="col-auto">
            <p onclick="searchbills()" class="nav-link float-right px-2 rounded border bg-primary text-white">Bills</p>
        </div>
    </div>
</div>
<?php
    require_once("../connect.php");
    if(isset($_POST['query']) && !empty($_POST['query'])){
        $query = $_POST['query'];
    $query ="select * from bills where name LIKE '%{$query}%' and status=1 order by 1 desc";
    
    $run = mysqli_query($con,$query);
    if(mysqli_num_rows($run) > 0){
?>

        <div class="row mb-4">
            <div class="col-md-12 sales-table">
                <div class="table-responsive border">
                    <table class="table table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Customer Name</th>
                                <th>Bill Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            while($row = mysqli_fetch_array($run)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $total = $row['total'];
                            ?>
                            <tr>
                                <td>#<?php echo $i; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $total; ?></td>
                                <td><a href="mybills?id=<?php echo $row['bill_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php } } ?>

<script>

</script>
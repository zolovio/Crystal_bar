<?php
    require_once("../connect.php");

    $query = "SELECT * FROM waiter WHERE status = 1";
    
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
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            while($row = mysqli_fetch_array($run)){
                            $id = $row['id'];
                            $name = $row['name'];
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $name; ?></td>
     
                                <td>
                                    <div>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal<?php echo $id; ?>">
                                            Edit
                                        </button>


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?php echo $id; ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Fill Details
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="text-left">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Name</label>
                                                                <input type="text" class="form-control" id="name<?php echo $id; ?>" placeholder="name..." value="<?php echo $name; ?>" />
                                                                <input type="hidden" name="id" id="id<?php echo $id; ?>" value="<?php echo $id; ?>">
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" onclick="editProduct(<?php echo $id; ?>)" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal end-->
                                    </div>
                                </td>
                            </tr>
                            <?php $i++;} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<?php } ?>
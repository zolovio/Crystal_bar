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
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Manage Inventory</h3>
                        </div>
                        
                        <div class="col-auto">
                            <a href=""
                                class="nav-link dropdown-toggle float-right px-2 rounded border bg-primary text-white"
                                data-toggle="dropdown" aria-expanded="false">Filter
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)"><input type="checkbox"
                                        class="mx-2" /> Category #1</a>
                                <a class="dropdown-item" href="javascript:void(0)"><input type="checkbox"
                                        class="mx-2" /> Category #2</a>
                                <a class="dropdown-item" href="javascript:void(0)"><input type="checkbox"
                                        class="mx-2" /> Category #3</a>
                                <a class="dropdown-item" href="javascript:void(0)"><input type="checkbox"
                                        class="mx-2" /> Category #4</a>
                                <a class="dropdown-item" href="javascript:void(0)"><input type="checkbox"
                                        class="mx-2" /> Category #5</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="add-product.html"
                                class="nav-link float-right px-2 rounded border bg-primary text-white">Add Product
                            </a>
                        </div>
                    </div>
                </div>

                <!-- catogery one Table -->
                <div class="row mb-4">
                    <div class="col-md-12 text-center my-1">
                        <h3>Category #1</h3>
                    </div>
                    <div class="col-md-12 sales-table">
                        <div class="table-responsive border">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-left">Price</th>
                                        <th>Stocks</th>

                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td>Chakna</td>
                                        <td class="text-left">
                                            <span class="text-success">₹ </span> 67.00
                                        </td>
                                        <td>
                                            <div>
                                                <p>
                                                    <a class="btn btn-light" data-toggle="collapse"
                                                        href="#collapseExample" role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">
                                                        26
                                                    </a>
                                                </p>
                                                <div class="collapse mx-auto w-25" id="collapseExample">
                                                    <div class="card card-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                    id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp" />
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">
                                                                Submit
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Starter</td>
                                        <td>
                                            <div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    Edit
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
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
                                                                        <label
                                                                            for="exampleFormControlInput1">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="name..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Price</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="₹..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Stocks</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Stocks..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlSelect1">CATEGORY</label>
                                                                        <select class="form-control"
                                                                            id="exampleFormControlSelect1">
                                                                            <option>CATEGORY #1</option>
                                                                            <option>CATEGORY #2</option>
                                                                            <option>CATEGORY #3</option>
                                                                            <option>CATEGORY #4</option>
                                                                            <option>CATEGORY #5</option>
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /catogery one Table end -->
                <!-- catogery two Table -->
                <div class="row mb-4">
                    <div class="col-md-12 text-center my-1">
                        <h3>Category #2</h3>
                    </div>
                    <div class="col-md-12 sales-table">
                        <div class="table-responsive border">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-left">Price</th>
                                        <th>Stocks</th>

                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <!-- <td>
                                            <span class="task-action-btn task-check">
                                                <span class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label"></label>
                                                </span>
                                            </span>
                                        </td> -->
                                        <td>Chakna</td>
                                        <td class="text-left">
                                            <span class="text-success">₹ </span> 67.00
                                        </td>
                                        <td>
                                            <div>
                                                <p>
                                                    <a class="btn btn-light" data-toggle="collapse"
                                                        href="#collapseExample2" role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">
                                                        26
                                                    </a>
                                                </p>
                                                <div class="collapse mx-auto w-25" id="collapseExample2">
                                                    <div class="card card-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                    id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp" />
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">
                                                                Submit
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Starter</td>
                                        <td>
                                            <div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    Edit
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
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
                                                                        <label
                                                                            for="exampleFormControlInput1">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="name..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Price</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="₹..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Stocks</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Stocks..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlSelect1">CATEGORY</label>
                                                                        <select class="form-control"
                                                                            id="exampleFormControlSelect1">
                                                                            <option>CATEGORY #1</option>
                                                                            <option>CATEGORY #2</option>
                                                                            <option>CATEGORY #3</option>
                                                                            <option>CATEGORY #4</option>
                                                                            <option>CATEGORY #5</option>
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /catogery two Table end -->
                <!-- catogery one Table -->
                <div class="row mb-4">
                    <div class="col-md-12 text-center my-1">
                        <h3>Category #3</h3>
                    </div>
                    <div class="col-md-12 sales-table">
                        <div class="table-responsive border">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-left">Price</th>
                                        <th>Stocks</th>

                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td>Chakna</td>
                                        <td class="text-left">
                                            <span class="text-success">₹ </span> 67.00
                                        </td>
                                        <td>
                                            <div>
                                                <p>
                                                    <a class="btn btn-light" data-toggle="collapse"
                                                        href="#collapseExample3" role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">
                                                        26
                                                    </a>
                                                </p>
                                                <div class="collapse mx-auto w-25" id="collapseExample3">
                                                    <div class="card card-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                    id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp" />
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">
                                                                Submit
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Starter</td>
                                        <td>
                                            <div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    Edit
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
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
                                                                        <label
                                                                            for="exampleFormControlInput1">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="name..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Price</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="₹..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Stocks</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Stocks..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlSelect1">CATEGORY</label>
                                                                        <select class="form-control"
                                                                            id="exampleFormControlSelect1">
                                                                            <option>CATEGORY #1</option>
                                                                            <option>CATEGORY #2</option>
                                                                            <option>CATEGORY #3</option>
                                                                            <option>CATEGORY #4</option>
                                                                            <option>CATEGORY #5</option>
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /catogery three Table end -->
                <!-- catogery one Table -->
                <div class="row mb-4">
                    <div class="col-md-12 text-center my-1">
                        <h3>Category #4</h3>
                    </div>
                    <div class="col-md-12 sales-table">
                        <div class="table-responsive border">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-left">Price</th>
                                        <th>Stocks</th>

                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td>Chakna</td>
                                        <td class="text-left">
                                            <span class="text-success">₹ </span> 67.00
                                        </td>
                                        <td>
                                            <div>
                                                <p>
                                                    <a class="btn btn-light" data-toggle="collapse"
                                                        href="#collapseExample4" role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">
                                                        26
                                                    </a>
                                                </p>
                                                <div class="collapse mx-auto w-25" id="collapseExample4">
                                                    <div class="card card-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                    id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp" />
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">
                                                                Submit
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Starter</td>
                                        <td>
                                            <div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    Edit
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
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
                                                                        <label
                                                                            for="exampleFormControlInput1">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="name..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Price</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="₹..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Stocks</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Stocks..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlSelect1">CATEGORY</label>
                                                                        <select class="form-control"
                                                                            id="exampleFormControlSelect1">
                                                                            <option>CATEGORY #1</option>
                                                                            <option>CATEGORY #2</option>
                                                                            <option>CATEGORY #3</option>
                                                                            <option>CATEGORY #4</option>
                                                                            <option>CATEGORY #5</option>
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /catogery three Table end -->
                <!-- catogery four Table -->
                <div class="row mb-4">
                    <div class="col-md-12 text-center my-1">
                        <h3>Category #5</h3>
                    </div>
                    <div class="col-md-12 sales-table">
                        <div class="table-responsive border">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-left">Price</th>
                                        <th>Stocks</th>

                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>Chakna</td>
                                        <td class="text-left">
                                            <span class="text-success">₹ </span> 67.00
                                        </td>
                                        <td>
                                            <div>
                                                <p>
                                                    <a class="btn btn-light" data-toggle="collapse"
                                                        href="#collapseExample5" role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">
                                                        26
                                                    </a>
                                                </p>
                                                <div class="collapse mx-auto w-25" id="collapseExample5">
                                                    <div class="card card-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                    id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp" />
                                                            </div>

                                                            <button type="submit" class="btn btn-primary">
                                                                Submit
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Starter</td>
                                        <td>
                                            <div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    Edit
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
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
                                                                        <label
                                                                            for="exampleFormControlInput1">Name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="name..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Price</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="₹..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlInput1">Stocks</label>
                                                                        <input type="number" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Stocks..." />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="exampleFormControlSelect1">CATEGORY</label>
                                                                        <select class="form-control"
                                                                            id="exampleFormControlSelect1">
                                                                            <option>CATEGORY #1</option>
                                                                            <option>CATEGORY #2</option>
                                                                            <option>CATEGORY #3</option>
                                                                            <option>CATEGORY #4</option>
                                                                            <option>CATEGORY #5</option>
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="button" class="btn btn-primary">
                                                                    Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /catogery four Table end -->
            </div>
            <!-- Page Wrapper -->
            <div class="row justify-content-center">
                <div>
                    <ul class="pagination pagination-lg">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('footer.php'); ?>

</body>
</html>
<?php } ?>
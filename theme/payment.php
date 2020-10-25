<?php include 'inc/header.php';?>

        <main class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <h1>payment status</h1>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <table id="payment-status" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Status</th>
                                    <th>Invoice No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GLOTT ELETRONIC STORE S.R.L.</td>
                                    <td><span class="badge badge-info">Pending</span></td>
                                    <td><a href="#">Invoice 01</a></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#invoiceUploadModal" class="material-icons">publish</a>
                                        <a href="#" data-toggle="modal" data-target="#paymentModal" class="material-icons">credit_card</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GLOTT ELETRONIC STORE S.R.L.</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><a href="#">Invoice 02</a></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#invoiceUploadModal" class="material-icons">publish</a>
                                        <a href="#" data-toggle="modal" data-target="#paymentModal" class="material-icons">credit_card</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GLOTT ELETRONIC STORE S.R.L.</td>
                                    <td><span class="badge badge-danger">Expired</span></td>
                                    <td><a href="#">Invoice 03</a></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#invoiceUploadModal" class="material-icons">publish</a>
                                        <a href="#" data-toggle="modal" data-target="#paymentModal" class="material-icons">credit_card</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GLOTT ELETRONIC STORE S.R.L.</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><a href="#">Invoice 03</a></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#invoiceUploadModal" class="material-icons">publish</a>
                                        <a href="#" data-toggle="modal" data-target="#paymentModal" class="material-icons">credit_card</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GLOTT ELETRONIC STORE S.R.L.</td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><a href="#">Invoice 04</a></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#invoiceUploadModal" class="material-icons">publish</a>
                                        <a href="#" data-toggle="modal" data-target="#paymentModal" class="material-icons">credit_card</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <div class="invoice-create">
                            <h6>Create New Invoice</h6>
                            <form>
                                <input type="text" class="form-control" placeholder="Invoice no"><br>
                                <select class="search-company" style="width: 100%">
                                    <option></option>
                                    <option>GLOTT ELETRONIC STORE S.R.L.</option>
                                    <option>GLOTT ELETRONIC STORE S.R.L.</option>
                                    <option>GLOTT ELETRONIC STORE S.R.L.</option>
                                </select><br>
                                <button type="submit" class="btn common-btn mt-4">save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      <!-- page-content" -->

<?php include 'inc/modal.php';?>      
<?php include 'inc/footer.php';?>

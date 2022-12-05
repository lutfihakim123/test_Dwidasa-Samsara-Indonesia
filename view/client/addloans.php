<?php 
include '../header.php';
if (!isset($_SESSION['fullname'])) {
    echo "<SCRIPT> 
    alert('You dont have access to this menu please login first!')
    window.location.replace('http://localhost/test/view/auth/login.php');
    </SCRIPT>";
}
include '../navbar.php';
include '../../model/connection.php';
include '../../model/clientmodel.php';
include '../../controller/clientcontroller.php';
include 'clientview.php';
$client = new ClientView();
?>
<div class="card col-md-5">
    <form action="clientproces.php?aksi=addloans" method="post">
    <div class="card-body">
        <div class="row">
            <div class="col-md-10">
                <h5 class="mt-2"> <i class="fas fa-hand-holding-usd"></i> Add New Loans</h5>
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn btn-primary float-end" value="Add Loans">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="mb-3 row">
                    <label for="inputidAccount" class="col-sm-2 col-form-label">Client</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="idAccount" required aria-label="Default select example">
                            <option selected value="">Chosee Client ... </option>
                            <?php $client->showClient(); ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputAmount" class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-10">
                    <input type="number" name="amount"  class="form-control" id="inputAmount">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputLoanDate" class="col-sm-2 col-form-label">Loan Date</label>
                    <div class="col-sm-10">
                        <input type="date" name="loan_date" required class="form-control" id="inputLoanDate">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<?php 
include '../footer.php';
?>
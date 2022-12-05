<?php 
include 'view/header.php';
if (!isset($_SESSION['fullname'])) {
    echo "<SCRIPT> 
    alert('You dont have access to this menu please login first!')
    window.location.replace('http://localhost/test/view/auth/login.php');
    </SCRIPT>";
}
include 'view/navbar.php';
include 'model/connection.php';
include 'model/clientmodel.php';
include 'controller/clientcontroller.php';
include 'view/client/clientview.php';

$client = new ClientView();
?>
<div class="row">
    <div class="col-md-8">
        <h5 class="mt-2"> <i class="fas fa-user-tie"></i> Client Page</h5>
    </div>
    <div class="col-md-4">
        <a href="http://localhost/test/view/client/addloans.php" class="btn btn-warning float-end"><i class="fas fa-hand-holding-usd"></i> Add Loans</a>
        <span class="float-end">&nbsp;&nbsp;</span>
        <a href="http://localhost/test/view/client/addclient.php" class="btn btn-warning float-end"><i class="fas fa-user-plus"></i> Add Client</a>
    </div>
</div>

<div class="col-md-12 mt-3">
    <div class="table-responsive">
    <table id="table_id" style="font-size: 14px;" class="display table table-bordered table-responsive">
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Name</th>
                <th>Balance</th>
                <th>Total Loan</th>
                <th>Bank</th>
                <th>Open Account</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody> 
            <?php $client->show(); ?>
        </tbody>
    </table>
    </div>
</div>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

<?php 
include 'view/footer.php';
?>


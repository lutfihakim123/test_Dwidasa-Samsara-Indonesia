<?php 
include 'view/header.php';
include 'view/navbar.php';
include 'model/connection.php';
include 'model/workermodel.php';
include 'controller/workercontroller.php';
include 'view/worker/workerview.php';

$worker = new WorkerView();
?>
<div class="row">
    <div class="col-md-10">
        <h5 class="mt-2"> <i class="fas fa-users"></i> Worker Page</h5>
    </div>
    <div class="col-md-2">
        <a href="http://localhost/test/view/worker/addworker.php" class="btn btn-warning float-end"><i class="fas fa-plus"></i> Add Worker</a>
    </div>
</div>
<div class="col-md-12 mt-3">
    <div class="table-responsive">
    <table id="table_id" style="font-size: 14px;" class="display table table-bordered table-responsive">
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Position</th>
                <th>Bank</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody> 
            <?php $worker->show(); ?>
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
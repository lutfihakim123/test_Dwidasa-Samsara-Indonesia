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
include '../../model/workermodel.php';
include '../../controller/workercontroller.php';
include 'workerview.php';
$worker = new WorkerView();
?>
<div class="card col-md-5">
    <form action="workerproces.php?aksi=add" method="post">
    <div class="card-body">
        <div class="row">
            <div class="col-md-10">
                <h5 class="mt-2"> <i class="fas fa-user-plus"></i> Add New Worker</h5>
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn btn-primary float-end" value="Add Worker">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="mb-3 row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" name="name"  class="form-control" id="inputName">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputSurname" class="col-sm-2 col-form-label">Surname</label>
                    <div class="col-sm-10">
                    <input type="surname" name="surname" required class="form-control" id="inputSurname">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPosition" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                    <select class="form-select" name="position" required aria-label="Default select example">
                        <option selected value="">Chosee Position ... </option>
                        <option value="admin">Admin</option>
                        <option value="receptionist">Receptionist</option>
                        <option value="security">Security</option>
                    </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputBranch" class="col-sm-2 col-form-label">Branch</label>
                    <div class="col-sm-10">
                    <select class="form-select" name="branch" required aria-label="Default select example">
                        <option selected value="">Chosee Branch ... </option>
                        <?php $worker->showBranch(); ?>
                    </select>
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
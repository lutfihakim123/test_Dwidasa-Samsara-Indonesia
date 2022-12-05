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
    <form action="clientproces.php?aksi=add" method="post">
    <div class="card-body">
        <div class="row">
            <div class="col-md-10">
                <h5 class="mt-2"> <i class="fas fa-user-plus"></i> Add New Client</h5>
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn btn-primary float-end" value="Add Client">
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
                    <label for="inputBranch" class="col-sm-2 col-form-label">Branch</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="branch" required aria-label="Default select example">
                            <option selected value="">Chosee Branch ... </option>
                            <?php $client->showBranch(); ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputOpenDate" class="col-sm-2 col-form-label">Open Date</label>
                    <div class="col-sm-10">
                        <input type="date" name="open_date" required class="form-control" id="inputOpenDate">
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
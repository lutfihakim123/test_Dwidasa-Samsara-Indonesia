<?php 
include '../header.php';
?>
<form action="http://localhost/test/view/auth/authproces.php?aksi=register" method="post">
<div class="card col-md-4 mt-4 ms-3">
    <div class="card-header">
        <div class="card-title">
            <h5> <i class="fas fa-user-plus"></i> Register Page</h5>
        </div>
    </div>
    <div class="card-body">
        <div class='mb-3 row'>
            <label for="fullname" class='col-sm-4 col-form-label'>Full Name</label>
            <div class='col-sm-8'>
                <input type="text" name="fullname" class='form-control' id="fullname">
            </div>
        </div>
        <div class='mb-3 row'>
            <label for="username" class='col-sm-4 col-form-label'>Username</label>
            <div class='col-sm-8'>
                <input type="text" name="username" class='form-control' id="username">
            </div>
        </div>
        <div class='mb-3 row'>
            <label for="password" class='col-sm-4 col-form-label'>Password</label>
            <div class='col-sm-8'>
                <input type="password" name="password" class='form-control' id="password">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
            <div class="col-sm-10">
                <p class="mt-3">You already have account ? <a href="http://localhost/test/view/auth/login.php" style="text-decoration: none;">Login Here!!!</a></p>
            </div>
            </div>
            <div class="col-sm-2">
                <input type="submit" value="Register" class="btn mt-1 btn-primary float-end">
            </div>
        </div>
    </div>
</div>
</form>
<?php 
include '../footer.php';
?>
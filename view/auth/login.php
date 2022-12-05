<?php 
include '../header.php';
?>
<form action="http://localhost/test/view/auth/authproces.php?aksi=login" method="post">
<div class="card col-md-4 mt-4 ms-3">
    <div class="card-header">
        <div class="card-title">
            <h5> <i class="fas fa-sign-in-alt"></i> Login Page</h5>
        </div>
    </div>
    <div class="card-body">
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
                <p class="mt-3">You dont have account ? <a href="http://localhost/test/view/auth/register.php" style="text-decoration: none;">Register Here!!!</a></p>
            </div>
            <div class="col-sm-2">
                <input type="submit" value="Login" class="btn mt-1 btn-primary float-end">
            </div>
        </div>
    </div>
</div>
</form>
<?php 
include '../footer.php';
?>
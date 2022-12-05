<?php 
include '../../model/connection.php';
include '../../model/authmodel.php';
include '../../controller/authcontroller.php';
$client = new AuthController();
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == "register") {
        $client->Register($_POST['fullname'], $_POST['username'], $_POST['password']);
    } else if ($_GET['aksi'] == "login") {
        $client->Login($_POST['username'], $_POST['password']);
    } else if ($_GET['aksi'] == "logout") {
        session_destroy();
        echo "<SCRIPT> 
        alert('Logout succeeded')
        window.location.replace('http://localhost/test/');
        </SCRIPT>";
    }
}
?>
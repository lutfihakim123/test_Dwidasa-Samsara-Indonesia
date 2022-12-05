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
<?php $client->showById($_GET['idClient']); ?>
<?php 
include '../footer.php';
?>
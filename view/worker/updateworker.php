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
<?php $worker->showById($_GET['idWorker']); ?>
<?php 
include '../footer.php';
?>
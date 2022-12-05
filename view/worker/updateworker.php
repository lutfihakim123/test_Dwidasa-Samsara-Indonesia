<?php 
include '../header.php';
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
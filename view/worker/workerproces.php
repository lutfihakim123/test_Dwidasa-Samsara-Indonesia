<?php 
include '../../model/connection.php';
include '../../model/workermodel.php';
include '../../controller/workercontroller.php';
include 'workerview.php';
$worker = new WorkerView();

if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == "add") {
       $worker->addWorker($_POST['name'], $_POST['surname'], $_POST['position'], $_POST['branch']);
    } else if ($_GET['aksi'] == "delete") {
       $worker->deleteWorker($_GET['idWorker']);
    } else if ($_GET['aksi'] == "update") {
      $worker->updateWorker($_POST['id'],$_POST['name'], $_POST['surname'], $_POST['position'], $_POST['branch']);
    } 
}
?>
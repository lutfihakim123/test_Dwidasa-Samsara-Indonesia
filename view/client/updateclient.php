<?php 
include '../header.php';
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
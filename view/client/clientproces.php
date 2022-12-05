<?php 
include '../../model/connection.php';
include '../../model/clientmodel.php';
include '../../controller/clientcontroller.php';
include 'clientview.php';
$client = new ClientView();

if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == "add") {
       $client->addClient($_POST['name'], $_POST['surname'], $_POST['branch'], $_POST['open_date']);
    } else if ($_GET['aksi'] == "delete") {
       $client->deleteClient($_GET['idClient']);
    } else if ($_GET['aksi'] == "update") {
      $client->updateClient($_POST['id'],$_POST['name'], $_POST['surname'], $_POST['branch'], $_POST['open_date']);
    } else if ($_GET['aksi'] == "addloans") {
      $client->addLoans($_POST['idAccount'], $_POST['amount'], $_POST['loan_date']);
    }
}
?>
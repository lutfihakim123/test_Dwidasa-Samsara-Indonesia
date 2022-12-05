<?php 

class ClientController extends ClientModel{

    public function getClient()
    {
        return $this->findAll();
    }

    public function getClientById($id)
    {
        return $this->findById($id);
    }

    public function getBranch()
    {
        return $this->findBranch();
    }

    public function addClient($name, $surname, $branch, $open_date){
        return $this->insertClient($name, $surname, $branch, $open_date);
    }

    public function addLoans($idAccount, $amount, $loan_date)
    {
        return $this->insertLoans($idAccount, $amount, $loan_date);
    }

    public function deleteClient($id)
    {
        return $this->dropClient($id);
    }

    public function updateClient($id, $name, $surname, $branch, $open_date)
    {
        return $this->editClient($id, $name, $surname, $branch, $open_date);
    }
}
?>
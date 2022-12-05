<?php 

class ClientModel extends Connection {

    public function findAll()
    {
        $sql = "SELECT client.idClient, account.idAccount, client.Name, account.Balance, account.Open_date, SUM(loans.Amount) as 'Tloan', branch.Address, bank.name from client left JOIN account ON client.idClient=account.Client_idClient left JOIN loans ON account.idAccount=loans.Account_idAccount left JOIN branch ON client.Branch_idBranch=branch.idBranch INNER JOIN bank ON branch.Bank_idBank=bank.idBank GROUP BY account.idAccount";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $client[] = $data; 
            }
            return $client;
        }
    }

    public function findById($id)
    {
        $sql = "SELECT client.idClient, client.Name, client.Surname, client.Open_date from client where idClient=$id";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $client[] = $data; 
            }
            return $client;
        }
    }

    public function findBranch()
    {
        $sql = "SELECT branch.idBranch,  branch.Address, bank.name from branch INNER JOIN bank ON branch.Bank_idBank = bank.idBank";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $branch[] = $data; 
            }
            return $branch;
        }
    }

    public function insertClient($name, $surname, $branch, $open_date){
        $sql = "INSERT INTO client values ('', '$name', '$surname', $branch, '$open_date')";
        $this->connect()->query($sql);
        $sqlgetclient = "SELECT idClient from client where Name='$name' and Surname='$surname' and Branch_idBranch='$branch'";
        $result = $this->connect()->query($sqlgetclient);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $id = $data['idClient'];
            }
            $sqlinsert = "INSERT INTO account values ('', 100000, $id, '$open_date')";
            echo $sqlinsert;
            $this->connect()->query($sqlinsert);
        }
        echo "<SCRIPT> 
        alert('Insert new client succeeded')
        window.location.replace('http://localhost/test/client.php');
        </SCRIPT>";
    }


    public function insertLoans($idAccount, $amount, $loan_date)
    {
        $sql = "INSERT INTO loans values ('', $amount, $idAccount, $loan_date)";
        $this->connect()->query($sql);
        echo "<SCRIPT> 
        alert('Insert new loans succeeded')
        window.location.replace('http://localhost/test/client.php');
        </SCRIPT>";
    }


    public function editClient($id, $name, $surname, $branch, $open_date)
    {
        $sql = "UPDATE client set Name='$name', Surname='$surname', Branch_idBranch=$branch, open_date='$open_date' where idClient=$id";
        $this->connect()->query($sql);
        echo "<SCRIPT> 
        alert('Update client succeeded')
        window.location.replace('http://localhost/test/client.php');
        </SCRIPT>";
    }


    public function dropClient($id)
    {
        $sql = "DELETE FROM client where idClient=$id";
        $this->connect()->query($sql);
        echo "<SCRIPT> 
        alert('Delete client succeeded')
        window.location.replace('http://localhost/test/client.php');
        </SCRIPT>";
    }

}
?>
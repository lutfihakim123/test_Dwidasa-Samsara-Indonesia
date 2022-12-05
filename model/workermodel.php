<?php 

class WorkerModel extends Connection{

    protected function findAll()
    {
        $sql = "SELECT worker.idWorker, worker.Name, worker.Surname, worker.Position, branch.Address, bank.name from worker INNER JOIN branch ON worker.Branch_idBranch = branch.idBranch INNER JOIN bank ON branch.Bank_idBank = bank.idBank";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $worker[] = $data; 
            }
            return $worker;
        }
    }

    public function findById($id)
    {
        $sql = "SELECT worker.idWorker, worker.Name, worker.Surname, worker.Position, branch.Address, bank.name from worker INNER JOIN branch ON worker.Branch_idBranch = branch.idBranch INNER JOIN bank ON branch.Bank_idBank = bank.idBank where idWorker=$id";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $worker[] = $data; 
            }
            return $worker;
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

    public function insertWorker($name, $surname, $position, $branch)
    {
        $sql = "INSERT INTO worker values ('', '$name', '$surname',  $branch, '$position')";
        $this->connect()->query($sql);
        echo "<SCRIPT> 
        alert('Insert new worker succeeded')
        window.location.replace('http://localhost/test/worker.php');
        </SCRIPT>";
    }

    public function editWorker($id, $name, $surname, $position, $branch)
    {
        $sql = "UPDATE worker SET Name='$name', Surname='$surname', Branch_idBranch='$branch', Position='$position' where idWorker=$id";
        $this->connect()->query($sql);
        echo "<SCRIPT> 
        alert('Update worker succeeded')
        window.location.replace('http://localhost/test/worker.php');
        </SCRIPT>";
    }

    public function dropWorker($idWorker)
    {
        $sql = "DELETE from worker WHERE idWorker=$idWorker";
        $this->connect()->query($sql);
        echo "<SCRIPT> 
        alert('Delete worker succeeded')
        window.location.replace('http://localhost/test/worker.php');
        </SCRIPT>";
    }
}
?>
<?php 

class WorkerController extends WorkerModel {

    public function getWorker()
    {
        return $this->findAll();
    }

    public function getBranch()
    {
        return $this->findBranch();
    }

    public function addWorker($name, $surname, $position, $branch)
    {
        return $this->insertWorker($name, $surname, $position, $branch);
    }
    public function deleteWorker($idWorker)
    {
        return $this->dropWorker($idWorker);
    }

    public function getWorkerById($id)
    {
        return $this->findById($id);
    }
    public function updateWorker($id, $name, $surname, $position, $branch)
    {
        return $this->editWorker($id, $name, $surname, $position, $branch);
    }
}
?>
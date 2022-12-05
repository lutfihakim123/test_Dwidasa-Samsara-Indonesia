<?php 

class WorkerView extends WorkerController{
    
    public function show(){
    $worker = $this->getWorker();
    $no = 1;
    foreach ($worker as $w ) {
    ?>
        <tr align="center">
                <td><?= $no; ?></td>
                <td><?= $w['Name']; ?></td>
                <td><?= $w['Surname']; ?></td>
                <td><?= $w['Position']; ?></td>
                <td><?= $w['name'] . ' - ' . $w['Address'] ?></td>
                <td><a href="http://localhost/test/view/worker/updateworker.php?idWorker=<?= $w['idWorker'];  ?>" style="text-decoration: none;" class="badge bg-success"><i class="fas fa-edit"></i> Update</a> <a onclick="return confirm('You Sure?')" href="http://localhost/test/view/worker/workerproces.php?aksi=delete&idWorker=<?= $w['idWorker'];  ?>" style="text-decoration: none;" class="badge bg-danger"><i class="fas fa-trash"></i> Delete</a> </td>
            </tr>
    <?php
    $no++;
    }
    }
    
    public function showById($id)
    {
        $worker = $this->getWorkerById($id);
        foreach ($worker as $w ) {
        ?>
        <div class="card col-md-5">
        <div class="card-body">
        <form action="workerproces.php?aksi=update" method="post">
        <input type="hidden" name="id" value="<?= $w['idWorker']; ?>">
        <div class="row">
            <div class="col-md-10">
                <h5 class="mt-2"> <i class="fas fa-edit"></i> Update Worker</h5>
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn btn-success float-end" value="Update Worker">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="mb-3 row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" name="name" value="<?= $w['Name'];  ?>"  class="form-control" id="inputName">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputSurname" class="col-sm-2 col-form-label">Surname</label>
                    <div class="col-sm-10">
                    <input type="surname" value="<?= $w['Surname'];  ?>"  name="surname" required class="form-control" id="inputSurname">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPosition" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                    <select class="form-select" name="position" required aria-label="Default select example">
                        <option selected value="">Chosee Position ... </option>
                        <option value="admin">Admin</option>
                        <option value="receptionist">Receptionist</option>
                        <option value="security">Security</option>
                    </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputBranch" class="col-sm-2 col-form-label">Branch</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="branch" required aria-label="Default select example">
                            <option selected value="">Chosee Branch ... </option>
                            <?php $this->showBranch(); ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        </form>
        </div>
        </div>

        <?php
        }
    }
    

    public function showBranch(){
        $branch = $this->getBranch();
        foreach ($branch as $b ) {
    ?>
        <option value="<?= $b['idBranch'] ?>"><?= $b['name'] . ' - ' . $b['Address'] ?></option>
    <?php 
    }
    }

}
?>
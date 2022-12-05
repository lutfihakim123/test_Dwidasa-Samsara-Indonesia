<?php 

class ClientView extends ClientController{

    function getRupiah($nominal){
        $result_rupiah = "Rp. " . number_format($nominal, 0,'.','.');
        return $result_rupiah;
    }

    public function show(){
    $client = $this->getClient();
    $no = 1;
    foreach ($client as $c ) {
    if ($c['Tloan'] == null) {
        $c['Tloan'] = 0;
    }
    ?>
        <tr align="center">
                <td><?= $no; ?></td>
                <td><?= $c['Name']; ?></td>
                <td><?php echo $this->getRupiah($c['Balance']); ?></td>
                <td><?php echo $this->getRupiah($c['Tloan']); ?></td>
                <td><?= $c['name'] . ' - ' . $c['Address'] ?></td>
                <td><?= $c['Open_date'] ?></td>
                <td><a href="http://localhost/test/view/client/updateclient.php?idClient=<?= $c['idClient'];  ?>" style="text-decoration: none;" class="badge bg-success"><i class="fas fa-edit"></i> Update</a> <a onclick="return confirm('You Sure?')" href="http://localhost/test/view/client/clientproces.php?aksi=delete&idClient=<?= $c['idClient'];  ?>" style="text-decoration: none;" class="badge bg-danger"><i class="fas fa-trash"></i> Delete</a> </td>
            </tr>
    <?php
    $no++;
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


    public function showClient()
    {
        $client = $this->getClient();
        foreach ($client as $c ) {
        ?>
             <option value="<?= $c['idAccount'] ?>"><?= $c['Name']; ?></option>
        <?php
        }
    }

    
    public function showById($id){
    $client = $this->getClientById($id);
    foreach ($client as $c ) {
    ?>
    <div class="card col-md-5">
    <form action="clientproces.php?aksi=update" method="post">
    <input type="hidden" name="id" value="<?= $c['idClient']; ?>">
    <div class="card-body">
        <div class="row">
            <div class="col-md-10">
                <h5 class="mt-2"> <i class="fas fa-edit"></i> Update Client</h5>
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn btn-success float-end" value="Update Client">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <div class="mb-3 row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" name="name" value="<?= $c['Name']; ?>"  class="form-control" id="inputName">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputSurname" class="col-sm-2 col-form-label">Surname</label>
                    <div class="col-sm-10">
                    <input type="surname" name="surname" value="<?= $c['Surname'];?>" required class="form-control" id="inputSurname">
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
                <div class="mb-3 row">
                    <label for="inputOpenDate" class="col-sm-2 col-form-label">Open Date</label>
                    <div class="col-sm-10">
                        <input type="date" value="<?= $c['Open_date']; ?>" name="open_date" required class="form-control" id="inputOpenDate">
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
    }
    }
}
?>
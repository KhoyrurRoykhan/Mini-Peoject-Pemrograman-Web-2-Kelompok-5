<div class="modal-body">
        <form class="form-update" action="<?= BASEURL; ?>/adminpetugas/ubah" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_petugas" class="form-label">Id Petugas</label>
            <input type="number" class="form-control" id="id_petugas" name="id_petugas" value="<?=$data['petugas']['id_petugas']?>">
        </div>
        <div class="mb-3">
            <label for="nama_petugas" class="form-label">Nama Petugas</label>
            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="<?=$data['petugas']['nama_petugas']?>">
        </div>
        
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$data['petugas']['alamat']?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        
        
        </div>
      </div>
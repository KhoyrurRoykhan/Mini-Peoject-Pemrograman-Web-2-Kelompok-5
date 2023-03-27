<div class="modal-body">
        <form class="form-update" action="<?= BASEURL; ?>/admindokter/ubah" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_dokter" class="form-label">Id Dokter</label>
            <input type="number" class="form-control" id="id_dokter" name="id_dokter" value="<?=$data['dokter']['id_dokter']?>">
        </div>
        <div class="mb-3">
            <label for="nama_dokter" class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?=$data['dokter']['nama_dokter']?>">
        </div>
        <div class="mb-3">
            <label for="id_poli" class="form-label">Id Poli</label>
            <input type="number" class="form-control" id="id_poli" name="id_poli" value="<?=$data['dokter']['id_poli']?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$data['dokter']['alamat']?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        
        </div>
      </div>
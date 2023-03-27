
<form class="form-update" action="<?= BASEURL; ?>/adminpoli/ubah" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_poli" class="form-label">Id Poli</label>
            <input type="number" class="form-control" id="id_poli" name="id_poli" value="<?=$data['poli']['id_poli']?>">
        </div>
        <div class="mb-3">
            <label for="nama_poli" class="form-label">Nama Poli</label>
            <input type="text" class="form-control" id="nama_poli" name="nama_poli" value="<?=$data['poli']['nama_poli']?>">
        </div>
        
        <div class="mb-3">
            <label for="id_dokter" class="form-label">Id Dokter</label>
            <input type="number" class="form-control" id="id_dokter" name="id_dokter" value="<?=$data['poli']['id_dokter']?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        
        
        </div>
      </div>
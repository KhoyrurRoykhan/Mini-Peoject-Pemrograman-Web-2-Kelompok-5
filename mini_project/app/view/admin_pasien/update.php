<div class="modal-body">
        <form class="form-update" action="<?= BASEURL; ?>/adminpasien/ubah" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_pasien" class="form-label">Id Pasien</label>
            <input type="number" class="form-control" id="id_pasien" name="id_pasien" value="<?=$data['pasien']['id_pasien'];?>">
        </div>
        <div class="mb-3">
            <label for="nama_pasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?=$data['pasien']['nama_pasien'];?>">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?=$data['pasien']['jenis_kelamin'];?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$data['pasien']['alamat'];?>">
        </div>
        <div class="mb-3">
            <label for="id_poli" class="form-label">Id Poli</label>
            <input type="number" class="form-control" id="id_poli" name="id_poli">
        </div>
        <div class="mb-3">
            <label for="id_petugas" class="form-label">Id Petugas</label>
            <input type="number" class="form-control" id="id_petugas" name="id_petugas" value="<?=$data['pasien']['id_petugas'];?>">
        </div>
        <div class="mb-3">
            <label for="id_dokter" class="form-label">Id Dokter</label>
            <input type="number" class="form-control" id="id_dokter" name="id_dokter" value="<?=$data['pasien']['id_dokter'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        
        
        </div>
      </div>
      
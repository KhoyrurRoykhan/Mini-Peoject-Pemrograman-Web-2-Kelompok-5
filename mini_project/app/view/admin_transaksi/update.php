<div class="modal-body">
        <form action="<?= BASEURL; ?>/admintransaksi/ubah" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_transaksi" class="form-label">Id Transaksi</label>
            <input type="number" class="form-control" id="id_transaksi" name="id_transaksi" value="<?=$data['transaksi']['id_transaksi']?>">
        </div>  
        <div class="mb-3">
            <label for="id_pasien" class="form-label">Id Pasien</label>
            <input type="number" class="form-control" id="id_pasien" name="id_pasien" value="<?=$data['transaksi']['id_pasien']?>">
        </div>  
        <div class="mb-3">
            <label for="id_dokter" class="form-label">Id Dokter</label>
            <input type="number" class="form-control" id="id_dokter" name="id_dokter" value="<?=$data['transaksi']['id_dokter']?>">
        </div>  
        <div class="mb-3">
            <label for="id_obat" class="form-label">Id Obat</label>
            <input type="number" class="form-control" id="id_obat" name="id_obat" value="<?=$data['transaksi']['id_obat']?>">
        </div>  
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        
        
        </div>
      </div>
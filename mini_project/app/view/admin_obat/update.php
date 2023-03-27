
<div class="modal-body">
        <form class="form-update" action="<?= BASEURL; ?>/adminobat/ubah" method="post">
        <div class="form-group">
            <input type="hidden" id="id_obat" name="id_obat" value="<?=$data['obat']['id_obat']?>">
        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?=$data['obat']['nama_obat'];?>">
        </div>
        <div class="mb-3">
            <label for="jenis_obat" class="form-label">Jenis Obat</label>
            <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" value="<?=$data['obat']['jenis_obat'];?>">
        </div>
        <div class="mb-3">
            <label for="sediaan" class="form-label">Sediaan</label>
            <input type="text" class="form-control" id="sediaan" name="sediaan" value="<?=$data['obat']['sediaan'];?>">
        </div>
        <div class="mb-3">
            <label for="dosis_anak" class="form-label">Dosis Anak</label>
            <input type="text" class="form-control" id="dosis_anak" name="dosis_anak" value="<?=$data['obat']['dosis_anak'];?>">
        </div>
        <div class="mb-3">
            <label for="dosis_dewasa" class="form-label">Dosis Dewasa</label>
            <input type="text" class="form-control" id="dosis_dewasa" name="dosis_dewasa" value="<?=$data['obat']['dosis_dewasa'];?>">
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
        
        
        </div>
      </div>


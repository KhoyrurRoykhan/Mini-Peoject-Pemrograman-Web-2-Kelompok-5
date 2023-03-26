    
            <div class="box2E">
                    <div class="data2E">
                        <h1>MENU BERKAS</h1>
                        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#FormModal">
                        Tambah Data </button>
                        <div class="table1A">
                            <table class="table2A">
                                    <tr?>
                                        <td class="tabel3A">ID</td>
                                        <td class="tabel3A">ID PASIEN</td>
                                        <td class="tabel3A">AKSI</td>
                                    </tr>
                                <?php foreach ($data['transaksi'] as $transaksi) : ?>
                            
                                    <tr?>
                                        <td class="tabel4A"><?= $transaksi['id_transaksi']?></td>
                                        <td class="tabel4A"><?= $transaksi['id_pasien']?></td>
                                        <td class="tabel4A"><button class="btn1"><a href="<?= BASEURL?>/admintransaksi/detail/<?=$transaksi['id_transaksi']?>">
                                        Detail</a></button>
                                        <button class = "btn2"><a href="<?= BASEURL?>/admintransaksi/update/<?=$transaksi['id_transaksi']?>">Ubah</a></button>
                                        <button class = "btn3"><a href="<?= BASEURL?>/admintransaksi/delete/<?=$transaksi['id_transaksi']?>" onclick="return confirm('Yakin?');">Hapus</a></button></td>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </table>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

                       <!-- Modal Tambah-->

                       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/jquery.js"></script>
<script src="<?= BASEURL; ?>/js/scriptupdate.js"></script>
<div class="modal fade" id="FormModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="judulModal">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/admintransaksi/input" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_transaksi" class="form-label">Id Transaksi</label>
            <input type="number" class="form-control" id="id_transaksi" name="id_transaksi">
        </div>  
        <div class="mb-3">
            <label for="id_pasien" class="form-label">Id Pasien</label>
            <input type="number" class="form-control" id="id_pasien" name="id_pasien">
        </div>  
        <div class="mb-3">
            <label for="id_dokter" class="form-label">Id Dokter</label>
            <input type="number" class="form-control" id="id_dokter" name="id_dokter">
        </div>  
        <div class="mb-3">
            <label for="id_obat" class="form-label">Id Obat</label>
            <input type="number" class="form-control" id="id_obat" name="id_obat">
        </div>  

        
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
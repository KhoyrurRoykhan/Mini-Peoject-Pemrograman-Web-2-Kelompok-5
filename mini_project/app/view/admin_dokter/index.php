
                <div class="box2C">
                    <div class="data2C">
                        <h1>MENU DOKTER</h1>
                        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#FormModal">
                        Tambah Data </button>
                            <div class="table1A">
                            <table class="table2A">
                                        <tr?>
                                            <td class="tabel3A">ID DOKTER</td>
                                            <td class="tabel3A">NAMA DOKTER</td>
                                            <td class="tabel3A">AKSI</td>
                                        </tr>
                                <?php foreach ($data['dokter'] as $dokter) : ?>
                                    
                                        <tr?>
                                            <td class="tabel4A"><?= $dokter['id_dokter']?></td>
                                            <td class="tabel4A"><?= $dokter['nama_dokter']?></td>
                                            <td class="tabel4A"><button class="btn1"><a href="<?= BASEURL?>/admindokter/detail/<?=$dokter['id_dokter']?>">
                                                Detail</a></button>
                                                <button class = "btn2"><a href="<?= BASEURL?>/admindokter/update/<?=$dokter['id_dokter']?>">Ubah</a></button>
                                                <button class = "btn3"><a href="<?= BASEURL?>/admindokter/delete/<?=$dokter['id_dokter']?>" onclick="return confirm('Yakin?');">Hapus</a></button></td>
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
        <form action="<?= BASEURL; ?>/admindokter/input" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_dokter" class="form-label">Id Dokter</label>
            <input type="number" class="form-control" id="id_dokter" name="id_dokter">
        </div>
        <div class="mb-3">
            <label for="nama_dokter" class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" id="nama_dokter" name="nama_dokter">
        </div>
        <div class="mb-3">
            <label for="id_poli" class="form-label">Id Poli</label>
            <input type="number" class="form-control" id="id_poli" name="id_poli">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
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


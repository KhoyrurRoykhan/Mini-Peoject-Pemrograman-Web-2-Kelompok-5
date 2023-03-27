
                <div class="box2D">
                    <div class="data2D">
                        <h1>MENU PASIEN</h1>
                        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#FormModal">
                        Tambah Data </button>
                               <div class="table1A">
                                <table class="table2A">
                                            <tr?>
                                                <td class="tabel3A">ID PASIEN</td>
                                                <td class="tabel3A">NAMA PASIEN</td>
                                                <td class="tabel3A">AKSI</td>
                                            </tr>
                                    <?php foreach ($data['pasien'] as $pasien) : ?>
                                            <tr?>
                                                <td class="tabel4A"><?= $pasien['id_pasien']?></td>
                                                <td class="tabel4A"><?= $pasien['nama_pasien']?></td>
                                                <td class="tabel4A"><button class="btn1"><a href="<?= BASEURL?>/adminpasien/detail/<?=$pasien['id_pasien']?>">
                                                Detail</a></button>
                                                <button class = "btn2"><a href="<?= BASEURL?>/adminpasien/update/<?=$pasien['id_pasien']?>">Ubah</a></button>
                                                <button class = "btn3"><a href="<?= BASEURL?>/adminpasien/delete/<?=$pasien['id_pasien']?>" onclick="return confirm('Yakin?');">Hapus</a></button></td>
                                            </tr>
                                        
                                    <?php endforeach; ?>
                                    </table>
                            </div>
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
        <form action="<?= BASEURL; ?>/adminpasien/input" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_pasien" class="form-label">Id Pasien</label>
            <input type="number" class="form-control" id="id_pasien" name="id_pasien">
        </div>
        <div class="mb-3">
            <label for="nama_pasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <label for="id_poli" class="form-label">Id Poli</label>
            <input type="number" class="form-control" id="id_poli" name="id_poli">
        </div>
        <div class="mb-3">
            <label for="id_petugas" class="form-label">Id Petugas</label>
            <input type="number" class="form-control" id="id_petugas" name="id_petugas">
        </div>
        <div class="mb-3">
            <label for="id_dokter" class="form-label">Id Dokter</label>
            <input type="number" class="form-control" id="id_dokter" name="id_dokter">
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


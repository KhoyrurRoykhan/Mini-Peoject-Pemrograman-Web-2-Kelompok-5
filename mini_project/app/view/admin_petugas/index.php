                <div class="box2E">
                    <div class="data2E">
                        <h1>MENU PETUGAS</h1>
                        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#FormModal">
                        Tambah Data </button>
                            <table class="table2A">
                                    <tr?>
                                        <td class="tabel3A">ID PETUGAS</td>
                                        <td class="tabel3A">NAMA PETUGAS</td>
                                        <td class="tabel3A">AKSI</td>
                                    </tr>
                                <?php foreach ($data['petugas'] as $petugas) : ?>
                            
                                    <tr?>
                                        <td class="tabel4A"><?= $petugas['id_petugas']?></td>
                                        <td class="tabel4A"><?= $petugas['nama_petugas']?></td>
                                        <td class="tabel4A"><button class="btn1"><a href="<?= BASEURL?>/adminpetugas/detail/<?=$petugas['id_petugas']?>">
                                        Detail</a></button>
                                        <button class = "btn2"><a href="<?= BASEURL?>/adminpetugas/update/<?=$petugas['id_petugas']?>">Ubah</a></button>
                                        <button class = "btn3"><a href="<?= BASEURL?>/adminpetugas/delete/<?=$petugas['id_petugas']?>" onclick="return confirm('Yakin?');">Hapus</a></button></td>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </table>
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
        <form action="<?= BASEURL; ?>/adminpetugas/input" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_petugas" class="form-label">Id Petugas</label>
            <input type="number" class="form-control" id="id_petugas" name="id_petugas">
        </div>
        <div class="mb-3">
            <label for="nama_petugas" class="form-label">Nama Petugas</label>
            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
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
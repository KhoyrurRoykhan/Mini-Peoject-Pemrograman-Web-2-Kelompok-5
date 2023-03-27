                <div class="box2D">
                    <div class="data2D">
                        <h1>MENU OBAT</h1>
                        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#FormModal">
                        Tambah Data </button>
                               <div class="table1A">
                                <table class="table2A">
                                            <tr?>
                                                <td class="tabel3A">ID OBAT</td>
                                                <td class="tabel3A">NAMA OBAT</td>
                                                <td class="tabel3A">AKSI</td>
                                            </tr>
                                    <?php foreach ($data['obat'] as $obat) : ?>
                                        
                                            <tr?>
                                                <td class="tabel4A"><?= $obat['id_obat']?></td>
                                                <td class="tabel4A"><?= $obat['nama_obat']?></td>
                                                <td class="tabel4A"><button class="btn1"><a href="<?= BASEURL?>/adminobat/detail/<?=$obat['id_obat'];?>">
                                                Detail</a></button>
                                                <button class = "btn2 tampilModalUbah" ><a href="<?= BASEURL?>/adminobat/update/<?=$obat['id_obat'];?>">Ubah</a></button>
                                                <button class = "btn3"><a href="<?= BASEURL?>/adminobat/delete/<?=$obat['id_obat']?>" onclick="return confirm('Yakin?');">Hapus</a></button></td>
                                            </td>
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
        <h1 class="modal-title" id="judulModal">Tambah Data Obat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/adminobat/input" method="post">
        <div class="form-group">
        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" name="nama_obat">
        </div>
        <div class="mb-3">
            <label for="jenis_obat" class="form-label">Jenis Obat</label>
            <input type="text" class="form-control" id="jenis_obat" name="jenis_obat">
        </div>
        <div class="mb-3">
            <label for="sediaan" class="form-label">Sediaan</label>
            <input type="text" class="form-control" id="sediaan" name="sediaan">
        </div>
        <div class="mb-3">
            <label for="dosis_anak" class="form-label">Dosis Anak</label>
            <input type="text" class="form-control" id="dosis_anak" name="dosis_anak">
        </div>
        <div class="mb-3">
            <label for="dosis_dewasa" class="form-label">Dosis Dewasa</label>
            <input type="text" class="form-control" id="dosis_dewasa" name="dosis_dewasa">
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


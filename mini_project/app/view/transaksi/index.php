    
            <div class="box2E">
                    <div class="data2E">
                        <h1>MENU BERKAS</h1>
                        <div class="table1A">
                            <table class="table2A">
                                    <tr?>
                                        <td class="tabel3A">ID</td>
                                        <td class="tabel3A">NAMA</td>
                                        <td class="tabel3A">AKSI</td>
                                    </tr>
                                <?php foreach ($data['transaksi'] as $transaksi) : ?>
                            
                                    <tr?>
                                        <td class="tabel4A"><?= $transaksi['id_transaksi']?></td>
                                        <td class="tabel4A"><?= $transaksi['id_pasien']?></td>
                                        <td class="tabel4A"><button class="btn1"><a href="<?= BASEURL?>/transaksi/detail/<?=$transaksi['id_transaksi']?>">
                                        Detail</a></button></td>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </table>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
                <div class="box2D">
                    <div class="data2D">
                        <h1>MENU OBAT</h1>
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
                                                <td class="tabel4A"><button class="btn1"><a href="<?= BASEURL?>/obat/detail/<?=$obat['id_obat']?>">
                                                Detail</a></button>
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
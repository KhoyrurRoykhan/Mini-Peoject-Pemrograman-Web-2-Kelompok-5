<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu_dokter</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>

<body class="background4">

    <div class="navbar4">
        <div class="href_login1D">
            <a style="text-decoration:none" href="menu_admin.php"><h1>⬅</h1></a>
        </div>
        <div class="href_login2D">
            <a style="text-decoration:none" href="menu_pasien.php"><h1>➨</h1></a>
        </div>
    </div>

    <div class="margin1D">
        <div class="margin2D">
                <div class="box1C">
                    <div class="data1C">
                        <h1>DATA</h1>
                        <a style="text-decoration:none"  class="href_back2" href="menu_dokter.php"><h2>➤ DOKTER</h2></a>
                        <a style="text-decoration:none"  class="href_back2" href="<?=BASEURL?>/pasien/index"><h2>➤ PASIEN</h2></a>
                        <a style="text-decoration:none"  class="href_back2" href="<?=BASEURL?>/poli/index"><h2>➤ POLI</h2></a>
                        <a style="text-decoration:none"  class="href_back2" href="<?=BASEURL?>/home/index"><h2>➤ HOME</h2></a>
                    </div>
                </div>
                <div class="box2C">
                    <div class="data2C">
                        <h1>MENU DOKTER</h1>
                        <p>
                        <table>
                                    <tr?>
                                        <td>ID Dokter</td>
                                        <td>NAMA DOKTER</td>
                                        <td>AKSI</td>
                                    </tr>
                            <?php foreach ($data['dokter'] as $dokter) : ?>
                                
                                    <tr?>
                                        <td><?= $dokter['id_dokter']?></td>
                                        <td><?= $dokter['nama_dokter']?></td>
                                        <td><a href="<?= BASEURL?>/dokter/detail/<?=$dokter['id_dokter']?>">detail</a></td>
                                    </tr>
                                
                            <?php endforeach; ?>
                            </table>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>                                 
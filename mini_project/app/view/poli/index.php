<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu_poli</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>

<body class="background6">

    <div class="navbar6">
        <div class="href_login1F">
            <a style="text-decoration:none" href="menu_pasien.php"><h1>⬅</h1></a>
        </div>
        <div class="href_login2F">
            <a style="text-decoration:none" href="menu_poli.php"><h1></h1></a>
        </div>
    </div>

    <div class="margin1F">
        <div class="margin2F">
                <div class="box1E">
                    <div class="data1E">
                        <h1>DATA</h1>
                        <a style="text-decoration:none"  class="href_back2" href="<?= BASEURL; ?>/dokter/index"><h2>➤ DOKTER</h2></a>
                        <a style="text-decoration:none"  class="href_back2" href="<?= BASEURL; ?>/pasien/index"><h2>➤ PASIEN</h2></a>
                        <a style="text-decoration:none"  class="href_back2" href="menu_poli.php"><h2>➤ POLI</h2></a>
                        <a style="text-decoration:none"  class="href_back2" href="<?= BASEURL; ?>/home/index"><h2>➤ HOME</h2></a>
                    </div>
                </div>
                <div class="box2E">
                    <div class="data2E">
                        <h1>MENU POLI</h1>
                        <p>
                        <table>
                                    <tr?>
                                        <td>ID POLI</td>
                                        <td>NAMA POLI</td>
                                        <td>AKSI</td>
                                    </tr>
                            <?php foreach ($data['poli'] as $poli) : ?>
                                
                                    <tr?>
                                        <td><?= $poli['id_poli']?></td>
                                        <td><?= $poli['nama_poli']?></td>
                                        <td><a href="<?= BASEURL?>/poli/detail/<?=$poli['id_poli']?>">detail</a></td>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu_pasien</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>

<body class="background5">

    <div class="navbar5">   
        <div class="href_login1E">
            <a style="text-decoration:none" href="menu_dokter.php"><h1>⬅</h1></a>
        </div>
        <div class="href_login2E">
            <a style="text-decoration:none" href="menu_poli.php"><h1>➨</h1></a>
        </div>
    </div>
    <div class="margin1E">
        <div class="margin2E">
                <div class="box1D">
                    <div class="data1D">
                        <h1>DATA</h1>
                        <a style="text-decoration:none"  class="href_back2" href="<?=BASEURL?>/dokter/index"><h2>➤ DOKTER</h2></a>
                        <a style="text-decoration:none"  class="href_back2" href="<?=BASEURL?>/pasien/index"><h2>➤ PASIEN</h2></a>
                        <a style="text-decoration:none"  class="href_back2" href="<?=BASEURL?>/poli/index"><h2>➤ POLI</h2></a>
                        <a style="text-decoration:none"  class="href_back2" href="<?=BASEURL?>/home/index"><h2>➤ HOME</h2></a>
                    </div>
                </div>
                <div class="box2D">
                    <div class="data2D">
                        <h1>MENU PASIEN</h1>
                        <p>
                          <h2> <?= $data['pasien']['nama_pasien']?> </h2>
                          <div>
                            <p>Nama Pasien : <?=$data['pasien']['nama_pasien']?></p>
                            <p>ID Pasien : <?=$data['pasien']['id_pasien']?></p>
                            <p>Jenis Kelamin : <?=$data['pasien']['jenis_kelamin']?></p>
                            <p>Alamat : <?=$data['pasien']['alamat']?></p>
                            <p>Poli : <?=$data['pasien']['nama_poli']?></p>
                            <p>Petugas : <?=$data['pasien']['nama_petugas']?></p>
                            <p>Dokter : <?=$data['pasien']['nama_dokter']?></p>

                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
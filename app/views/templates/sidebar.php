<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url; ?>/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-base">
        <div class="sidebar">
            <!-- sidebar-header -->
            <div class="sidebar-header">
                <a href="<?= base_url; ?>/home">
                    <h2>Brand name</h2>
                </a>
            </div>

            <!-- Sidebar-search-list -->
            <div class="search-list">
                <div class="search-bar">
                    <img src="<?= base_url ?>/image/search-icon.svg" />
                    <input type="text" style="font-size:1.2rem;" placeholder="Cari nama santri" />
                </div>
            </div>

            <!-- tambahsantritombol -->
            <div class="tambahSantri">
                <a href="<?= base_url ?>/santri/tambah" class="tombol-tambahSantri" style="font-size: 1.2rem;">Tambah
                    Santri Baru</a>
            </div>

            <!-- Chat -->
            <div class="listSantri">

                <?php foreach ($data['santri'] as $row) : ?>
                <!-- Budi -->
                <a href="<?= base_url; ?>/santri/detailsantri/<?= $row['id_santri'] ?>">
                    <div class="profilSantri">
                        <div class="profilSantri-left">
                            <img src="<?= base_url ?>/image/alice.jpg" alt="">
                        </div>

                        <div class="profilSantri-right">
                            <div class="profilSantri-right-top">
                                <span class="nama-lengkap"><?= $row['nama']; ?></span>
                                <span class="blok"><?= $row['blok']; ?></span>
                            </div>

                            <div class="profilSantri-right-bottom">
                                <div class="profilSantri-right-bottom-left">
                                    <span class="angkatan">Angkatan <?= $row['angkatan']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>

                <div class="batasAkhir">
                    <h4>---- End of part ----</h4>
                </div>
            </div>
            </ul>
        </div>
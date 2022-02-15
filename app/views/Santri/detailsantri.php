<!-- main -->
<div class="main">
    <div class="topbar">
        <div class="welcome">
            <span class="selamatdatang">Selamat Datang</span>
        </div>

        <div class="toggle">
            <?php foreach ($data['admin'] as $row) : ?>
            <div class="user">
                <div class="admin-kiri">
                    <div class="admin-kiri-atas">
                        <span class="nama"><?= $row['nama']; ?></span>
                    </div>

                    <div class="admin-kiri-bawah" style="display: flex;
    justify-content: space-between;
    gap:10px;">
                        <span class="jabatan"><?= $row['jabatan']; ?></span>
                        <div class="box-logout"
                            style="border:1px solid blue; padding:2px; justify-content:center; align-items:center; width:fit-content">
                            <a href="<?= base_url; ?>/logout" style="text-decoration: none; font-size:1.2rem;"><span
                                    class="logout">Keluar</span></a>
                        </div>
                    </div>
                </div>

                <div class="admin-kanan" style="padding-top: 12px;">
                    <img src="<?= base_url ?>/image/alice.jpg" alt="">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<!-- main -->
<div class="main">
    <div class="topbar">
        <div class="welcome">
            <span class="selamatdatang">Selamat Datang</span>
        </div>
        <div class="toggle">

            <div class="user">
                <div class="admin-kiri">
                    <div class="admin-kiri-atas">
                        <span class="nama">Agus Heri Hermanwo</span>
                    </div>

                    <div class="admin-kiri-bawah">
                        <span class="jabatan">Admin</span>
                    </div>
                </div>

                <div class="admin-kanan">
                    <img src="<?= base_url ?>/image/alice.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="Pelanggaran-tambahSantri" style="
    padding: 2rem;
    display: grid;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    overflow-y:auto;">
        <!-- Main content -->
        <section class="content">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                <!-- Main content -->
                <section class="content" style="width: 500px; 
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 10%);">
                    <div class="card card-primary">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url; ?>/santri/simpanSantri" method="POST"
                            enctype="multipart/form-data">

                            <div class="card-header">
                                <h3><?= $data['title'] ?></h3>
                            </div>

                            <div class="card-body" style="
                            display: grid;
                            gap: 2rem;
                            grid-template-columns: 1fr 1fr;">

                                <div class="body-right">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" placeholder="Masukkan Pelanggaran..."
                                            name="id_santri" value="<?= $data['santri']['id_santri'] ?>"
                                            style="font-size: 1.2rem;">
                                    </div>

                                    <div class="form-group">
                                        <label>Pelanggaran</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Pelanggaran..."
                                            name="pelanggaran" style="font-size: 1.2rem;">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Tanggal..."
                                            name="tanggal" style="font-size: 1.2rem;">
                                    </div>

                                    <div class="form-group">
                                        <label>Hukuman</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Hukuman..."
                                            name="hukuman" style="font-size: 1.2rem;">
                                    </div>

                                    <div class="form-group">
                                        <label>Poin</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Poin..."
                                            name="poin" style="font-size: 1.2rem;">
                                    </div>
                                </div>

                                <div class="body-left">
                                    <div class="form-group">
                                        <label>Orang tua/wali</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Orang tua/wali..."
                                            name="ortu" style="font-size: 1.2rem;">
                                    </div>

                                    <div class="form-group">
                                        <label>No telp orang tua/wali</label>
                                        <input type="text" class="form-control"
                                            placeholder="Masukkan No telp orang tua/wali..." name="telp_ortu"
                                            style="font-size: 1.2rem;">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" placeholder="Masukkan Alamat..."
                                            name="alamat"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Foto..."
                                            name="foto" style="font-size: 1.2rem;">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"
                                    style="font-size: 1.2rem; ">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

        </section>



    </div>
</div>
</div>

</body>

</html>
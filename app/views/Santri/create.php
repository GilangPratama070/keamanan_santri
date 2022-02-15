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
                                    <label>Nama lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama lengkap..."
                                        name="nama" style="font-size: 1.2rem;">
                                </div>

                                <div class="form-group">
                                    <label>Blok</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Blok..." name="blok"
                                        style="font-size: 1.2rem;">
                                </div>

                                <div class="form-group">
                                    <label>Angkatan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Angkatan..."
                                        name="angkatan" style="font-size: 1.2rem;">
                                </div>

                                <div class="form-group">
                                    <label>sekolah</label>
                                    <input type="text" class="form-control" placeholder="Masukkan sekolah..."
                                        name="sekolah" style="font-size: 1.2rem;">
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
                                    <input type="text" class="form-control" placeholder="Masukkan Foto..." name="foto"
                                        style="font-size: 1.2rem;">
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" style="font-size: 1.2rem; ">Submit</button>
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
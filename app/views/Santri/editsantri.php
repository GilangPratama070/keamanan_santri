<div class="Pelanggaran" style="display: grid; grid-template-columns: 3fr,1fr; gap: 10px;">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
        <!-- Default box -->
        <div class="card" style="box-shadow: 3px 3px 3px rgba(0, 0, 0, 10%);">
            <div class="card-header">
                <h3 class="card-title" style="font-weight: bold; color: #009688;">Form Edit</h3>

            </div>
            <div class="card-body">

                <!-- form start -->


                <form role="form" action="<?= base_url; ?>/santri/updateSantri/<?= $data['santri']['id_santri']; ?>"
                    method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_santri" value="<?= $data['santri']['id_santri']; ?>">


                    <div class="card-body" style="
                            display: grid;
                            gap: 2rem;
                            grid-template-columns: 1fr 1fr;">
                        <div class="body-right">

                            <div class="form-group">
                                <label>Nama lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama lengkap..."
                                    name="nama" style="font-size: 1.2rem;" value="<?= $data['santri']['nama']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Blok</label>
                                <input type="text" class="form-control" placeholder="Masukkan Blok..." name="blok"
                                    style="font-size: 1.2rem;" value="<?= $data['santri']['blok']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Angkatan</label>
                                <input type="text" class="form-control" placeholder="Masukkan Angkatan..."
                                    name="angkatan" style="font-size: 1.2rem;"
                                    value="<?= $data['santri']['angkatan']; ?>">
                            </div>

                            <div class="form-group">
                                <label>sekolah</label>
                                <input type="text" class="form-control" placeholder="Masukkan sekolah..." name="sekolah"
                                    style="font-size: 1.2rem;" value="<?= $data['santri']['sekolah']; ?>">
                            </div>
                        </div>

                        <div class="body-left">
                            <div class="form-group">
                                <label>Orang tua/wali</label>
                                <input type="text" class="form-control" placeholder="Masukkan Orang tua/wali..."
                                    name="ortu" style="font-size: 1.2rem;" value="<?= $data['santri']['ortu']; ?>">
                            </div>

                            <div class="form-group">
                                <label>No telp orang tua/wali</label>
                                <input type="text" class="form-control" placeholder="Masukkan No telp orang tua/wali..."
                                    name="telp_ortu" style="font-size: 1.2rem;"
                                    value="<?= $data['santri']['telp_ortu']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" placeholder="Masukkan Alamat..."
                                    name="alamat"><?= $data['santri']['alamat']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input type="text" class="form-control" placeholder="Masukkan Foto..." name="foto"
                                    style="font-size: 1.2rem;" value="<?= $data['santri']['foto']; ?>">
                            </div>
                        </div>

                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer" style="justify-content: center;
                                                    display: grid;">

                        <button type="submit" class="btn btn-primary"
                            style="font-size: 1.2rem; width:400px;">Submit</button>
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
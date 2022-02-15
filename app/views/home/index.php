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
                    <img src="image/alice.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

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
                    <h3 class="card-title" style="font-weight: bold; color: #009688;">Data Pelanggaran</h3> <a href="#"
                        class="btn float-right btn-xs btn btn-primary" style="font-size: 1.2rem;">Tambah Pelanggaran</a>
                </div>
                <div class="card-body">

                    <form action="#" method="post">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <div class="input-group" style="font-size: 1.5rem;">
                                    <input type="text" class="form-control" placeholder="" name="key"
                                        style="font-size: 1.2rem;">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit"
                                            style="font-size: 1.2rem;">Cari Data</button>
                                        <a class="btn btn-outline-danger" href="#" style="font-size: 1.2rem;">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered" style="font-size: 1.5rem ;">

                        <tbody>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pelanggaran</th>
                                    <th>Tanggal</th>
                                    <th>Bukti</th>
                                    <th>Hukuman</th>
                                    <th>Poin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                                <td>50</td>
                                <td>
                                    <a href="#" class="badge badgeinfo" style="font-size: 1.2rem;">Edit</a>
                                    <a href="#" class="badge badge-danger" onclick="return confirm('Hapus data?');"
                                        style="font-size: 1.2rem;">Hapus</a>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>

        <div class="scrollDetail"
            style="box-shadow: 3px 3px 3px rgba(0, 0, 0, 10%); border: 1px solid rgba(0, 0, 0, .125);">
            <div class="detailHeader">
                <h3 style="font-weight: bold;">Detail Santri</h3>
            </div>

            <div class="profilSantri-main">

                <div class="profilSantriPelanggaran">

                    <div class="fotoDetailSantri">
                        <img src="image/alice.jpg" alt="">
                    </div>

                    <div class="profilSantri-right-main">
                        <div class="profilSantri-right-top-main">
                            <span class="nama-lengkap" style="font-weight: bold; font-size: 1.7rem;">Alice</span>
                            <span class="blok">B2</span>
                        </div>

                        <div class="profilSantri-right-bottom-main">
                            <div class="profilSantri-right-bottom-left-main">
                                <div class="list-detail-santri">
                                    <span class="detail-profil-santri">Angkatan</span>
                                    <span class="value">2020</span>
                                </div>

                                <div class="list-detail-santri">
                                    <span class="detail-profil-santri">Sekolah</span>
                                    <span class="value">SMA TAKHASSUS</span>
                                </div>

                                <div class="list-detail-santri">
                                    <span class="detail-profil-santri">Orang Tua/Wali</span>
                                    <span class="value">Hadi Suwito</span>
                                </div>

                                <div class="list-detail-santri">
                                    <span class="detail-profil-santri">No. Telp Orang Tua/Wali</span>
                                    <span class="value">082713872908</span>
                                </div>


                                <div class="list-detail-santri">
                                    <span class="detail-profil-santri">Alamat</span>
                                    <span class="value">Kedung Ombo, Pati, Jawa Tengah Indonesia</span>
                                </div>

                            </div>

                            <div class="status-and-tpoint">
                                <div class="totalPoint">
                                    <span style="font-size: 1.5rem;">Total Point</span>
                                    <span class="angkaPoint">50</span>
                                </div>

                                <div class="status">
                                    <span style="font-size: 1.5rem;">Status</span>
                                    <span class="statusKode">A</span>
                                </div>
                            </div>

                            <div class="aksi">
                                <a href="#" class="badge badgeinfo" style="font-size: 1.5rem;">Edit</a>
                                <a href="#" class="badge badge-danger" onclick="return confirm('Hapus data?');"
                                    style="font-size: 1.5rem;">Hapus</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>

</html>
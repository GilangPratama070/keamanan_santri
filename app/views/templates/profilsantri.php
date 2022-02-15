<div class="scrollDetail" style="box-shadow: 3px 3px 3px rgba(0, 0, 0, 10%); border: 1px solid rgba(0, 0, 0, .125);">
    <div class="detailHeader">
        <h3 style="font-weight: bold;">Biodata Santri</h3>
    </div>

    <div class="profilSantri-main">

        <div class="profilSantriPelanggaran">

            <div class="fotoDetailSantri">
                <img src="<?= base_url ?>/image/alice.jpg" alt="">
            </div>

            <div class="profilSantri-right-main">
                <div class="profilSantri-right-top-main">
                    <span class="nama-lengkap"
                        style="font-weight: bold; font-size: 1.7rem;"><?= $data['santri']['nama']; ?></span>
                    <span class="blok"><?= $data['santri']['blok']; ?></span>
                </div>

                <div class="profilSantri-right-bottom-main">
                    <div class="profilSantri-right-bottom-left-main">
                        <div class="list-detail-santri">
                            <span class="detail-profil-santri">Angkatan</span>
                            <span class="value"><?= $data['santri']['angkatan']; ?></span>
                        </div>

                        <div class="list-detail-santri">
                            <span class="detail-profil-santri">Sekolah</span>
                            <span class="value"><?= $data['santri']['sekolah']; ?></span>
                        </div>

                        <div class="list-detail-santri">
                            <span class="detail-profil-santri">Orang Tua/Wali</span>
                            <span class="value"><?= $data['santri']['ortu']; ?></span>
                        </div>

                        <div class="list-detail-santri">
                            <span class="detail-profil-santri">No. Telp Orang Tua/Wali</span>
                            <span class="value"><?= $data['santri']['telp_ortu']; ?></span>
                        </div>


                        <div class="list-detail-santri">
                            <span class="detail-profil-santri">Alamat</span>
                            <span class="value"><?= $data['santri']['alamat']; ?></span>
                        </div>

                    </div>

                    <!-- <div class="status-and-tpoint">
                        <div class="totalPoint">
                            <span style="font-size: 1.5rem;">Total Point</span>

                            <span class="angkaPoint">
                                50
                            </span>
                        </div>

                        <div class="status">
                            <span style="font-size: 1.5rem;">Status</span>
                            <span class="statusKode">A</span>
                        </div>
                    </div> -->


                </div>
            </div>
        </div>
    </div>
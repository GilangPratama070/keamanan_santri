<div class="card-body">
    <?php Flasher::Message(); ?>
    <form action="#" method="post">
        <div class="row mb-3">
            <div class="col-lg-6">
                <div class="input-group" style="font-size: 1.5rem;">
                    <input type="text" class="form-control" placeholder="" name="key" style="font-size: 1.2rem;">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" style="font-size: 1.2rem;">Cari
                            Data</button>
                        <a class="btn btn-outline-danger" href="#" style="font-size: 1.2rem;">Reset</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="scrollTable">
        <table class="table table-bordered" style="font-size: 1.5rem ;">

            <tbody>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pelanggaran</th>
                        <th>Tanggal</th>
                        <th>Hukuman</th>
                        <th>Poin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($data['pelanggaran'] as $row) : ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['pelanggaran']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['hukuman']; ?></td>
                    <td><?= $row['poin']; ?></td>
                    <td>
                        <a href="<?= base_url; ?>/santri/editpelanggaran/<?= $row['id_pelanggaran'] ?>"
                            class="badge badgeinfo" style="font-size: 1.2rem;">Edit</a>
                        <a href="<?= base_url; ?>/santri/hapuspelanggaran/<?= $row['id_pelanggaran'] ?>"
                            class="badge badge-danger" onclick="return confirm('Hapus data?');"
                            style="font-size: 1.2rem;">Hapus</a>
                    </td>
                </tr>
                <?php $no++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="listBottom" style="display:flex; justify-content:space-between; padding-top:2rem;">

        <?php
        $total[] = 0;
        $status = "";
        foreach ($data['pelanggaran'] as $row) {
            //var_dump($row['poin']);
            if ($row['pelanggaran'] != NULL) {
                $total[] = $row['poin'];
            } else {
                $total[] = 0;
            }
        } ?>

        <div class="poin">
            <h4 style="font-weight: bold;"><?= "Total Poin : " . array_sum($total); ?></h4>
        </div>

        <?php
        $totalp = array_sum($total);
        if ($totalp > 100) {
            $status = "Status : Pemanggilan Orang Tua/Wali";
        } else if ($totalp > 75) {
            $status = "Status : SP2";
        } elseif ($totalp > 50) {
            $status = "Status : SP1";
        } else {
            $status = "Status : A";
        }
        ?>

        <div class="status">
            <h4 style="font-weight: bold;"><?= $status; ?></h4>
        </div>


    </div>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</section>
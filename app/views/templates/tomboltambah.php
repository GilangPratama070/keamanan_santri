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
                <h3 class="card-title" style="font-weight: bold; color: #009688;">Data Pelanggaran</h3>
                <?php foreach ($data['id'] as $row) : ?>

                <a href="<?= base_url; ?>/santri/tambahPelanggaran/<?= $row ?>"
                    class="btn float-right btn-xs btn btn-primary" style="font-size: 1.2rem;">Tambah
                    Pelanggaran</a>

                <?php endforeach; ?>
            </div>
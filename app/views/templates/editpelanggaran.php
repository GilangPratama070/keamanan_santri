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
                <h3 class="card-title" style="font-weight: bold; color: #009688;">Form Edit Pelanggaran</h3>

            </div>
            <div class="card-body">

                <!-- form start -->


                <?php foreach ($data['pelanggaran'] as $row) : ?>
                <form role="form" action="<?= base_url; ?>/santri/updatePelanggaran" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id_pelanggaran" value="<?= $row['id_pelanggaran'] ?>">

                    <div class="card-body" style="
                            display: grid;
                            gap: 2rem;
                            justify-content: center;
                            align-items: center;">

                        <div class="body-right" style="width: 400px;">
                            <div class="form-group">

                                <label style="font-size: 1.2rem;">Pelanggaran </label>
                                <input type="text" class="form-control" placeholder="Masukkan pelanggaran..."
                                    name="pelanggaran" style="font-size: 1.2rem;" value="<?= $row['pelanggaran']; ?>">
                            </div>

                            <div class="form-group">
                                <?php
                                    $exampleDate = $row['tanggal']; //sql timestamp
                                    $exampleDate = strtotime($exampleDate);
                                    $newDate = date('Y-m-d\TH:i', $exampleDate);
                                    ?>
                                <label style="font-size: 1.2rem;">Tanggal</label>
                                <input type="datetime-local" id="tanggal" class="form-control" name="tanggal"
                                    value="<?= $newDate ?>">
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.2rem;">Hukuman</label>
                                <input type="text" class="form-control" placeholder="Masukkan Hukuman..." name="hukuman"
                                    style="font-size: 1.2rem;" value="<?= $row['hukuman']; ?>">
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.2rem;">Poin</label>
                                <input type="text" class="form-control" placeholder="Masukkan Poin..." name="poin"
                                    style="font-size: 1.2rem;" value="<?= $row['poin']; ?>">
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer" style="justify-content: center;
                                                    display: grid;">

                        <button type="submit" class="btn btn-primary"
                            style="font-size: 1.2rem; width:400px;">Submit</button>
                    </div>
                    <?php endforeach ?>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
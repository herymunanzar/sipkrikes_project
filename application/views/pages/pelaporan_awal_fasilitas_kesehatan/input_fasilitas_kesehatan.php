<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">INPUT FASILITAS KESEHATAN</h4>
                    <form action="<?= base_url('pelaporan_awal_fasilitas_kesehatan/input_fasilitas_kesehatan/'.$data->id) ?>" method="POST">
                        <?= form_hidden('id_pelaporan_awal', $data->id) ?>
                        <div class="form-body">
                            <div class="row mb-3">
                                <div class="col-lg-5">Nama Fasilitas Kesehatan</div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_input('nama_fasilitas_kesehatan', $input->nama_fasilitas_kesehatan, ['class' => 'form-control', 'placeholder' => 'Masukkan nama fasilitas kesehatan']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('nama_fasilitas_kesehatan') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-lg-5">Kondisi Fasilitas Kesehatan</div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <fieldset class="d-flex flex-column gap-2" require>
                                                    <label><input type="radio" value="rusak" name="kondisi" checked> Rusak</label>
                                                    <label><input type="radio" value="tidak rusak" name="kondisi"> Tidak Rusak</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('kondisi') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-lg-5">Fungsi Pelayanan Fasilitas Kesehatan</div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <fieldset class="d-flex flex-column gap-2" require>
                                                    <label><input type="radio" value="berfungsi" name="fungsi_pelayanan" > Berfungsi</label>
                                                    <label><input type="radio" value="tidak berfungsi" name="fungsi_pelayanan" checked> Tidak Berfungsi</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('fungsi_pelayanan') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= base_url('pelaporans') ?>" class="btn btn-dark">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
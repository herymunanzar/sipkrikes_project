<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">INPUT KORBAN MENINGGAL</h4>
                    <form action="<?= base_url('pelaporan_awal_korban_meninggal/input_korban_meninggal/'.$data->id) ?>" method="POST">
                        <?= form_hidden('id_pelaporan_awal', $data->id) ?>
                        <div class="form-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-lg-4">Nama</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('nama', $input->nama, ['class' => 'form-control', 'placeholder' => 'Masukkan nama korban']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('nama') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jenis Kelamin</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin-option">
                                                        <option value="" selected>=== Pilih Jenis Kelamin ===</option>
                                                        <option value="Laki - laki">Laki - laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jenis_kelamin') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Usia</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('usia', $input->usia, ['class' => 'form-control', 'placeholder' => 'Masukkan usia korban']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('usia') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4"> Kewarganegaraan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('kewarganegaraan', $input->kewarganegaraan, ['class' => 'form-control', 'placeholder' => 'Masukkan nomer pasport']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('kewarganegaraan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4"> Alamat</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('alamat_korban', $input->alamat_korban, ['class' => 'form-control', 'placeholder' => 'Masukkan alamat korban']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('alamat_korban') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4"> Tempat Meninggal</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('tempat_meninggal', $input->tempat_meninggal, ['class' => 'form-control', 'placeholder' => 'Masukkan tempat meninggal']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('tempat_meninggal') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4"> Penyebab Kematian </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('penyebab_kematian', $input->penyebab_kematian, ['class' => 'form-control', 'placeholder' => 'Masukkan penyebab kematian']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('penyebab_kematian') ?>
                                            </div>
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
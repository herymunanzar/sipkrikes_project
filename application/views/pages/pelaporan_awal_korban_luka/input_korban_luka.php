<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">INPUT KORBAN LUKA</h4>
                    <form action="<?= base_url('pelaporan_awal_korban_luka/input_korban_luka/'.$data->id) ?>" method="POST">
                        <?= form_hidden('id_pelaporan_awal', $data->id) ?>
                        <div class="form-body">
                            <div class="row mb-3">
                                <label class="col-lg-5">Nama Fasilitas Pelayanan</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_input('nama_fasilitas_pelayanan', $input->nama_fasilitas_pelayanan, ['class' => 'form-control', 'placeholder' => 'Masukkan fasilitas pelayanan']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('nama_fasilitas_pelayanan') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-lg-5">Kabupaten / Kota</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select class="form-control" name="id_kabkot" id="kabkot-option">
                                                    <option value="" selected>=== Pilih Kabupaten / Kota ===</option>
                                                    <?php foreach($kabkot as $kabkot) : ?>
                                                        <option value="<?= $kabkot->id ?>" <?= set_value('id_kabkot') == $kabkot->id ? 'selected' : '' ?>>
                                                            <?= $kabkot->nama_kabkot ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('id_kabkot') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-lg-5">Jumlah Rawat Inap Laki - laki</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_input('jumlah_rawat_inap_laki', $input->jumlah_rawat_inap_laki, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah korban rawat inap laki - laki']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('jumlah_rawat_inap_laki') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-lg-5">Jumlah Rawat Inap Perempuan</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_input('jumlah_rawat_inap_perempuan', $input->jumlah_rawat_inap_perempuan, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah korban rawat inap perempuan']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('jumlah_rawat_inap_perempuan') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-lg-5">Jumlah Rawat Jalan Laki - Laki</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_input('jumlah_rawat_jalan_laki', $input->jumlah_rawat_jalan_laki, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah korban rawat jalan laki - laki']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('jumlah_rawat_jalan_laki') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-lg-5">Jumlah Rawat Jalan Perempuan</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_input('jumlah_rawat_jalan_perempuan', $input->jumlah_rawat_jalan_perempuan, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah korban rawat jalan perempuan']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('jumlah_rawat_jalan_perempuan') ?>
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
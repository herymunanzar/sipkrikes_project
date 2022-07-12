<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">INPUT PENGUNGSI</h4>
                    <form action="<?= base_url('pelaporan_awal_pengungsi/input_pengungsi/'.$data->id) ?>" method="POST">
                        <?= form_hidden('id_pelaporan_awal', $data->id) ?>
                        <div class="form-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-lg-4">Kabupaten / Kota</label>
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
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Kecamatan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <select class="form-control" name="nama_kec" id="kec-option">
                                                        <option value="" selected>=== Pilih Kecamatan ===</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('nama_kec') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Lokasi Pengungsian</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('lokasi_pengungsian', $input->lokasi_pengungsian, ['class' => 'form-control', 'placeholder' => 'Masukkan lokasi pengungsian']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('lokasi_pengungsian') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Gangguan Jiwa Anak</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('gangguan_jiwa_anak', $input->gangguan_jiwa_anak, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah gangguan jiwa anak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('gangguan_jiwa_anak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Gangguan Jiwa Dewasa</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('gangguan_jiwa_dewasa', $input->gangguan_jiwa_dewasa, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah gangguan jiwa dewasa']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('gangguan_jiwa_dewasa') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Pengungsi Laki - laki</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_pengungsi_laki', $input->jumlah_pengungsi_laki, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah pengungsi laki-laki']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_pengungsi_laki') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Pengungsi Perempuan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_pengungsi_perempuan', $input->jumlah_pengungsi_perempuan, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah pengungsi perempuan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_pengungsi_perempuan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Pengungsi KK</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_pengungsi_kk', $input->jumlah_pengungsi_kk, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah pengungsi KK']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_pengungsi_kk') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Penduduk Rentan Bayi</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_penduduk_rentan_bayi', $input->jumlah_penduduk_rentan_bayi, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk rentan bayi']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_penduduk_rentan_bayi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Penduduk Rentan Balita</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_penduduk_rentan_balita', $input->jumlah_penduduk_rentan_balita, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk rentan balita']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_penduduk_rentan_balita') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Penduduk Rentan Bumil</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_penduduk_rentan_bumil', $input->jumlah_penduduk_rentan_bumil, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk rentan bumil']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_penduduk_rentan_bumil') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Penduduk Rentan Buteki</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_penduduk_rentan_buteki', $input->jumlah_penduduk_rentan_buteki, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk rentan buteki']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_penduduk_rentan_buteki') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Penduduk Rentan Cacat Laki - Laki</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_penduduk_rentan_cacat_laki', $input->jumlah_penduduk_rentan_cacat_laki, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk rentan cacat laki - laki']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_penduduk_rentan_cacat_laki') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Penduduk Rentan Cacat Perempuan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_penduduk_rentan_cacat_perempuan', $input->jumlah_penduduk_rentan_cacat_perempuan, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk rentan cacat perempuan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_penduduk_rentan_cacat_perempuan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Penduduk Rentan Lansia Laki - laki</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_penduduk_rentan_lansia_laki', $input->jumlah_penduduk_rentan_lansia_laki, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk rentan lansia laki - laki']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_penduduk_rentan_lansia_laki') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">Jumlah Penduduk Rentan Lansia Perempuan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_penduduk_rentan_lansia_perempuan', $input->jumlah_penduduk_rentan_lansia_perempuan, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk rentan lansia perempuan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_penduduk_rentan_lansia_perempuan') ?>
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
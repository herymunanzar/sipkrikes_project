<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">FORMULIR EDIT PELAPORAN AWAL KEJADIAN BENCANA atau RHA-FORM B1</h4>
                    <form action="<?= base_url("pelaporans/edit/$input->id") ?>" method="POST">
                        <?= form_hidden('id', $input->id) ?>
                        <?= form_hidden('user', $this->session->userdata('nama')) ?>
                        <div class="form-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-lg-3">A. Jenis Bencana</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <select class="form-control" name="jenis" id="jenis-option">
                                                        <?php foreach(getJenisBencana() as $jenis_bencana) : ?>
                                                            <option value="<?= $jenis_bencana->nama_bencana ?>" <?= $input->jenis == $jenis_bencana->nama_bencana ? 'selected' : '' ?>>
                                                                <?= $jenis_bencana->nama_bencana ?>
                                                            </option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jenis') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-3">B. Deskripsi Bencana</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('deskripsi', $input->deskripsi, ['class' => 'form-control', 'placeholder' => 'Masukkan Deskripsi Bencana']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('deskripsi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-3">C. Lokasi Bencana</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 1. Provinsi</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="prov" id="prov-option">
                                                    <option value="" selected>=== Pilih Provinsi ===</option>
                                                    <?php foreach(getProvinsi() as $provinsi) : ?>
                                                        <option value="<?= $provinsi->id_prov ?>" <?= $input->prov == $provinsi->id_prov ? 'selected' : '' ?>>
                                                            <?= $provinsi->nama_prov ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('prov') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 2. Kabupaten/Kota</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="kab" id="kabkot-option">
                                                    <option value="" selected>=== Pilih Kabupaten/Kota ===</option>
                                                    <?php foreach(getKabkota($input->prov) as $kabkota) : ?>
                                                        <option value="<?= $kabkota->id_kabkot ?>" <?= $input->kab == $kabkota->id_kabkot ? 'selected' : '' ?>>
                                                            <?= $kabkota->nama_kabkot ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('kab') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 3. Kecamatan</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('kec', $input->kec, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Kecamatan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('kec') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 4. Desa/Kelurahan</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('desa', $input->desa, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Desa / Kelurahan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('desa') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 5. Dusun</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('dusun', $input->dusun, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Dusun']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dusun') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 6. Letak Geografis</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="letak" id="letak-option">
                                                    <option value="" selected>=== Pilih Letak Geografis ===</option>
                                                    <?php foreach(getLetakGeografis() as $letak) : ?>
                                                        <option value="<?= $letak->nama_letak ?>" <?= $input->letak == $letak->nama_letak ? 'selected' : '' ?>>
                                                            <?= $letak->nama_letak ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('letak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; Lain - lain</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('lainnya', $input->lainnya, ['class' => 'form-control', 'placeholder' => 'informasi lainnya']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('lainnya') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-3">D. Waktu Kejadian Bencana</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 1. Tanggal</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input type="date" value="<?= $input->tanggal ?>" class="form-control" name="tanggal" placeholder="Pilih Tanggal Kejadian" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('tanggal') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 2. Waktu</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input type="time" value="<?= $input->waktu ?>" class="form-control" name="waktu" placeholder="Masukkan Waktu Kejadian" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('waktu') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-3">E. Jumlah Korban</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 1. Meninggal</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('meninggal', $input->meninggal, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Korban Meninggal']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('meninggal') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 2. Hilang</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('hilang', $input->hilang, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Korban Hilang']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('hilang') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 3. Luka Berat</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('luka_berat', $input->luka_berat, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Korban Luka Berat']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('luka_berat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 4. Luka Ringan</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('luka_ringan', $input->luka_ringan, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Korban Luka Ringan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('luka_ringan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 5. Pengungsi</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jiwa</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('pengungsi', $input->pengungsi, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Pengungsi /Jiwa']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('pengungsi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; KK</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('pengungsi_kk', $input->pengungsi_kk, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Pengungsi /KK']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('pengungsi_kk') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lokasi Pengungsian</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('lokasi_ungsi', $input->lokasi_ungsi, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Lokasi Pengungsian']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('lokasi_ungsi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-3">F. Fasilitas Umum</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 1. Akses Ke Lokasi</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mudah dengan</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('akses_mudah', $input->akses_mudah, ['class' => 'form-control', 'placeholder' => 'Masukkan Akses Termudah']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('akses_mudah') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sulit Karena</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('akses_sukar', $input->akses_sukar, ['class' => 'form-control', 'placeholder' => 'Masukkan Alasan Akses Sukar']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('akses_sukar') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 2. Jalur Komunikasi </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jalur', $input->jalur, ['class' => 'form-control', 'placeholder' => 'Masukkan Informasi Jalur Komunikasi Yang Dapat Digunakan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jalur') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 3. Jaringan Listrik </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="listrik" id="listrik-option">
                                                    <option value="" selected>=== Pilih Status Jaringan Listrik ===</option>
                                                    <?php foreach(getStatusListrik() as $listrik) : ?>
                                                        <option value="<?= $listrik->status_listrik ?>" <?= $input->listrik == $listrik->status_listrik ? 'selected' : '' ?>>
                                                            <?= $listrik->status_listrik ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('listrik') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">G. Saranan Kesehatan yang Rusak</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 1. Jumlah dan Jenis Fasilitas Kesehatan</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a. Rumah Sakit</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('rs_bangun_rusak', $input->rs_bangun_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Rumah Sakit Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_bangun_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('rs_bangun_tidak', $input->rs_bangun_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Rumah Sakit Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_bangun_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('rs_layan_rusak', $input->rs_layan_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Peralatan Pelayanan Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_layan_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('rs_layan_tidak', $input->rs_layan_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Peralatan Pelayanan Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_layan_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b. Puskesmas</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('puskesmas_bangun_rusak', $input->puskesmas_bangun_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Puskesmas Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('puskesmas_bangun_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('puskesmas_bangun_tidak', $input->puskesmas_bangun_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Puskesmas Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('puskesmas_bangun_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('puskesmas_layan_rusak', $input->puskesmas_layan_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Peralatan Pelayanan Puskesmas Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('puskesmas_layan_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('puskesmas_layan_tidak', $input->puskesmas_layan_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Peralatan Pelayanan Puskesmas Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('puskesmas_layan_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c. Pustu</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('pustu_bangun_rusak', $input->pustu_bangun_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Pustu Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('pustu_bangun_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('pustu_bangun_tidak', $input->pustu_bangun_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Pustu Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('pustu_bangun_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('pustu_layan_rusak', $input->pustu_layan_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Pelayanan Pustu Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('pustu_layan_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('pustu_layan_tidak', $input->pustu_layan_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Pelayanan Pustu Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('pustu_layan_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; d. Gudang Farmasi</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('farmasi_bangun_rusak', $input->farmasi_bangun_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Farmasi Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('farmasi_bangun_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('farmasi_bangun_tidak', $input->farmasi_bangun_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Farmasi Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('farmasi_bangun_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('farmasi_layan_rusak', $input->farmasi_layan_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Pelayanan Farmasi Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('farmasi_layan_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('farmasi_layan_tidak', $input->farmasi_layan_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Pelayanan Farmasi Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('farmasi_layan_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; e. Polindes</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('polindes_bangun_rusak', $input->polindes_bangun_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Polindes Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('polindes_bangun_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('polindes_bangun_tidak', $input->polindes_bangun_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Bangunan Polindes Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('polindes_bangun_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('polindes_layan_rusak', $input->polindes_layan_rusak, ['class' => 'form-control', 'placeholder' => 'Masukkan Pelayanan Polindes Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('polindes_layan_rusak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pelayanan Tidak Rusak </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('polindes_layan_tidak', $input->polindes_layan_tidak, ['class' => 'form-control', 'placeholder' => 'Masukkan Pelayanan Polindes Tidak Rusak']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('polindes_layan_tidak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-3"> &nbsp;&nbsp;&nbsp; 2. Sumber Air Bersih </label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="air" id="air-option">
                                                    <option value="">=== Pilih Status Sumber Air Bersih ===</option>
                                                    <?php foreach(getStatusAirBersih() as $status_air) : ?>
                                                        <option value="<?= $status_air->status_sumber_air ?>" <?= $input->air == $status_air->status_sumber_air ? 'selected' : '' ?>>
                                                            <?= $status_air->status_sumber_air ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('air') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-3">H. Upaya Penanggulangan</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('upaya', $input->upaya, ['class' => 'form-control', 'placeholder' => 'Masukkan Upaya Penanggulangan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('upaya') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-3">I. Bantuan yang Diperlukan</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('bantuan', $input->bantuan, ['class' => 'form-control', 'placeholder' => 'Masukkan Bantuan Yang Diperlukan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('bantuan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="<?= base_url('pelaporans') ?>" class="btn btn-dark">Cancel</a>
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
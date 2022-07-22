<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">FORMULIR PELAPORAN AWAL KEJADIAN KRISIS KESEHATAN DINKES KAB./KOTA/PROVINSI</h4>
                    <form action="<?= base_url('pelaporan') ?>" method="POST">
                        <div class="form-body">

                            <div class="row mb-3">
                                <div class="col-lg-5 mb-3 font-weight-medium">A. Nama Dinas Kesehatan</div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_input('nama_dinas', $input->nama_dinas, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Dinas Kesehatan']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('nama_dinas') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-5 mb-3 font-weight-medium">B. Deskripsi Bencana</div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select class="form-control" name="jenis_bencana" id="jenis-option">
                                                    <?php foreach(getJenisBencana() as $jenis_bencana) : ?>
                                                        <option value="<?= $jenis_bencana->nama_bencana ?>" <?= set_value('nama_bencana') == $jenis_bencana->nama_bencana ? 'selected' : '' ?>>
                                                            <?= $jenis_bencana->nama_bencana ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('jenis_bencana') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-5 mb-3 font-weight-medium">C. Waktu Kejadian Bencana</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">1. Tanggal</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input type="date" class="form-control" name="tanggal" placeholder="Pilih Tanggal Kejadian" required>
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
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">2. Waktu</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input type="time" class="form-control" name="waktu" placeholder="Masukkan Waktu Kejadian" required>
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
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-5 mb-3 font-weight-medium">D. Deskripsi Bencana</div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_textarea('deskripsi_bencana', $input->deskripsi_bencana, ['class' => 'form-control', 'placeholder' => 'Masukkan Deskripsi Bencana']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('deskripsi_bencana') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-5 mb-3 font-weight-medium">E. Lokasi Bencana</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">1. Provinsi</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="id_prov" id="prov-option">
                                                    <option value="" selected>=== Pilih Provinsi ===</option>
                                                    <?php foreach(getProvinsi() as $provinsi) : ?>
                                                        <option value="<?= $provinsi->id ?>" <?= set_value('prov') == $provinsi->id ? 'selected' : '' ?>>
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
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">2. Kabupaten/Kota</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="id_kabkot" id="kabkot-option">
                                                    <option value="" selected>=== Pilih Kabupaten/Kota ===</option>
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
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">3. Kecamatan</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
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
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">4. Desa/Kelurahan</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('desa_dusun', $input->desa_dusun, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Desa / Dusun']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('desa_dusun') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">5. Jumlah Penduduk Terancam</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_penduduk_terancam', $input->jumlah_penduduk_terancam, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Penduduk Terancam']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_penduduk_terancam') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">6. Topografi</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="topografi" id="letak-option">
                                                    <option value="" selected>=== Pilih Letak Geografis ===</option>
                                                    <?php foreach(getLetakGeografis() as $letak) : ?>
                                                        <option value="<?= $letak->nama_letak ?>" <?= set_value('topografi') == $letak->nama_letak ? 'selected' : '' ?>>
                                                            <?= $letak->nama_letak ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('topografi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-5 mb-3 font-weight-medium">F. Jumlah Korban</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">1. Korban Meninggal</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_korban_meninggal', $input->jumlah_korban_meninggal, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Korban Meninggal']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_korban_meninggal') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">2. Korban Hilang</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_korban_hilang', $input->jumlah_korban_hilang, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Korban Hilang']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_korban_hilang') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">3. Korban Luka Berat / Rawat Inap</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_luka_berat_rawat_inap', $input->jumlah_luka_berat_rawat_inap, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Korban Luka Berat / Rawat Inap']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_luka_berat_rawat_inap') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">4. Korban Luka Ringan / Rawat Jalan</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_luka_ringan_rawat_jalan', $input->jumlah_luka_ringan_rawat_jalan, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Korban Luka Ringan / Rawat Jalan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_luka_ringan_rawat_jalan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">5. Pengungsi</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_pengungsi_penduduk_rentan', $input->jumlah_pengungsi_penduduk_rentan, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Pengungsi']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_pengungsi_penduduk_rentan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-5 mb-3 font-weight-medium">G. Fasilitas Umum</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">1. Akses ke lokasi kejadian krisis</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <fieldset class="d-flex flex-fill gap-3">
                                                    <label><input type="radio" value="mudah dijangkau" name="fasilitas_umum_akses"> Mudah Dijangkau </label>
                                                    <label><input type="radio" value="sukar dijangkau" name="fasilitas_umum_akses" checked> Sukar Dijangkau </label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('fasilitas_umum_akses') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">2. Jalur komunikasi yang masih dapat digunakan </div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('fasilitas_umum_jalur_komunikasi', $input->fasilitas_umum_jalur_komunikasi, ['class' => 'form-control', 'placeholder' => 'Masukkan Informasi Jalur Komunikasi Yang Dapat Digunakan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('fasilitas_umum_jalur_komunikasi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">3. Jaringan Listrik </div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="fasilitas_umum_jaringan_listrik" id="listrik-option">
                                                    <option value="" selected>=== Pilih Status Jaringan Listrik ===</option>
                                                    <?php foreach(getStatusListrik() as $listrik) : ?>
                                                        <option value="<?= $listrik->status_listrik ?>" <?= set_value('fasilitas_umum_jaringan_listrik') == $listrik->status_listrik ? 'selected' : '' ?>>
                                                            <?= $listrik->status_listrik ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('fasilitas_umum_jaringan_listrik') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">4 Sumber air bersih yang digunakan </div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <fieldset class="d-flex flex-fill gap-3">
                                                    <label><input type="radio" value="tercemar" name="fasilitas_umum_air_bersih"> Tercemar </label>
                                                    <label><input type="radio" value="tidak tercemar" name="fasilitas_umum_air_bersih" checked> Tidak Tercemar </label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('fasilitas_umum_air_bersih') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-5 mb-3 font-weight-medium">H. Kondisi Fasilitas Kesehatan</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">1. Kondisi Fasilitas Kesehatan</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <fieldset class="d-flex flex-fill gap-3">
                                                    <label><input type="radio" value="rusak" name="kondisi_faskes_kondisi"> Rusak </label>
                                                    <label><input type="radio" value="tidak rusak" name="kondisi_faskes_kondisi" checked> Tidak Rusak </label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('kondisi_faskes_kondisi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">2. Kondisi Fungsi Pelayanan Fasilitas Kesehatan</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <fieldset class="d-flex flex-fill gap-3">
                                                    <label><input type="radio" value="berfungsi" name="kondisi_faskes_fungsi_pelayanan"> Berfungsi </label>
                                                    <label><input type="radio" value="tidak berfungsi" name="kondisi_faskes_fungsi_pelayanan" checked> Tidak Berfungsi </label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('kondisi_faskes_fungsi_pelayanan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-5 mb-3 font-weight-medium">I. Upaya Penanggulangan yang telah dilakukan</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">1. Upaya Sub Klaster Pelayanan Kesehatan</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('upaya_penanggulangan_pelayanan_kesehatan', $input->upaya_penanggulangan_pelayanan_kesehatan, ['class' => 'form-control', 'placeholder' => 'Masukkan Upaya Penanggulangan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('upaya_penanggulangan_pelayanan_kesehatan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">2. Upaya Sub Klaster Pengendalian Penyakit, Penyehatan Lingkungan dan Air Bersih</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('upaya_penanggulangan_pengendalian', $input->upaya_penanggulangan_pengendalian, ['class' => 'form-control', 'placeholder' => 'Masukkan Upaya Penanggulangan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('upaya_penanggulangan_pengendalian') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">3. Upaya Sub Klaster Pelayanan Gizi</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('upaya_penanggulangan_pelayanan_gizi', $input->upaya_penanggulangan_pelayanan_gizi, ['class' => 'form-control', 'placeholder' => 'Masukkan Upaya Penanggulangan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('upaya_penanggulangan_pelayanan_gizi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">4. Upaya Sub Klaster Pelayanan Kesehatan</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('upaya_penanggulangan_pelayanan_kesehatan_jiwa', $input->upaya_penanggulangan_pelayanan_kesehatan_jiwa, ['class' => 'form-control', 'placeholder' => 'Masukkan Upaya Penanggulangan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('upaya_penanggulangan_pelayanan_kesehatan_jiwa') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">5. Upaya Sub Klaster Kesehatan Reproduksi</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('upaya_penanggulangan_reproduksi_dan_kia', $input->upaya_penanggulangan_reproduksi_dan_kia, ['class' => 'form-control', 'placeholder' => 'Masukkan Upaya Penanggulangan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('upaya_penanggulangan_reproduksi_dan_kia') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">6. Upaya Sub Klaster DVI</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('upaya_penanggulangan_dvi', $input->upaya_penanggulangan_dvi, ['class' => 'form-control', 'placeholder' => 'Masukkan Upaya Penanggulangan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('upaya_penanggulangan_dvi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 ml-3 ml-lg-0 pl-3 pl-lg-5">7. Upaya Tim Logistik Kesehatan</div>
                                    <div class="col-lg-7 ml-3 ml-lg-0 mb-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('upaya_penanggulangan_logistik_kesehatan', $input->upaya_penanggulangan_logistik_kesehatan, ['class' => 'form-control', 'placeholder' => 'Masukkan Upaya Penanggulangan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('upaya_penanggulangan_logistik_kesehatan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-5 font-weight-medium">J. Hambatan Pelayanan Kesehatan</div>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('hambatan', $input->hambatan, ['class' => 'form-control', 'placeholder' => 'Masukkan Hambatan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('hambatan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-5 font-weight-medium">K. Bantuan yang Diperlukan Segera</div>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('bantuan_yang_diperlukan', $input->bantuan_yang_diperlukan, ['class' => 'form-control', 'placeholder' => 'Masukkan Bantuan yang diperlukan Segera']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('bantuan_yang_diperlukan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3"> 
                                <div class="row">
                                    <div class="col-lg-5 font-weight-medium">L. Rencana Tidak Lanjut</div>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('rencana_tindak_lanjut', $input->rencana_tindak_lanjut, ['class' => 'form-control', 'placeholder' => 'Masukkan Tindak Lanjut']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rencana_tindak_lanjut') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= base_url('pelaporan/reset') ?>" class="btn btn-dark">Reset</a>
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
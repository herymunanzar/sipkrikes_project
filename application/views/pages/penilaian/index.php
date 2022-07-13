<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">FORMULIR PELAPORAN PENILAIAN CEPAT KESEHATAN KEJADIAN KRISIS KESEHATAN</h4>
                    <form action="<?= base_url('penilaian') ?>" method="POST">
                        <div class="form-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-lg-4">A. Nama Dinas Kesehatan</label>
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
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">B. Jenis Bencana</label>
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
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">C. Waktu Kejadian Bencana</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 1. Tanggal</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 2. Waktu</label>
                                    <div class="col-lg-7">
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
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">D. Deskripsi Bencana</label>
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
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">E. Lokasi Bencana</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 1. Provinsi</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 2. Kabupaten/Kota</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 3. Kecamatan</label>
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
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 4. Desa/Kelurahan</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 5. Jumlah Penduduk Terancam</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 6. Topografi</label>
                                    <div class="col-lg-7">
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
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">F. Jumlah Korban</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 1. Korban Meninggal</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 2. Korban Hilang</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 3. Korban Luka Berat / Rawat Inap</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 4. Korban Luka Ringan / Rawat Jalan</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 5. Jumlah Gangguan Jiwa / Psikososial</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jumlah_gangguan_jiwa', $input->jumlah_gangguan_jiwa, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Gangguan Jiwa']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jumlah_gangguan_jiwa') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 6. Jenis Penyakit Yang Berpotensi KLB</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('jenis_penyakit_klb', $input->jenis_penyakit_klb, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Gangguan Jiwa']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('jenis_penyakit_klb') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 7. Jumlah Pengungsi dan Penduduk Rentan</label>
                                    <div class="col-lg-7">
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
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">G. Fasilitas Umum</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 1. Akses ke lokasi kejadian krisis</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mudah dengan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="mudah dijangkau" name="fasilitas_umum_akses"> Mudah Dijangkau </input>
                                                        <input type="radio" value="sukar dijangkau" name="fasilitas_umum_akses" checked> Sukar Dijangkau </input>
                                                    </fieldset>
                                                </div>
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 2. Jalur komunikasi yang dapat digunakan </label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 3. Jaringan Listrik </label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 4 Sumber air bersih yang digunakan </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="fasilitas_umum_air_bersih"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="fasilitas_umum_air_bersih" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('fasilitas_umum_air_bersih') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">H. Kondisi Sanitasi dan Kesehatan Lingkungan di Lokasi Penampungan Pengungsi</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 1 Jenis Tempat Penampungan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="bangunan permanen" name="kondisi_sanitasi_jenis_tempat"> Bangunan Permanen </input>
                                                        <input type="radio" value="bangunan darurat" name="kondisi_sanitasi_jenis_tempat" checked> Bangunan Darurat </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('kondisi_sanitasi_jenis_tempat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 2 Kapasitas Penampungan Pengungsi</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="memadai" name="kondisi_sanitasi_kapasitas_pengungsi"> Memadai </input>
                                                        <input type="radio" value="tidak memadai" name="kondisi_sanitasi_kapasitas_pengungsi" checked> Tidak Memadai </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('kondisi_sanitasi_kapasitas_pengungsi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">I. Ketersediaan Sumber Daya</label>
                                </div>
                                <!-- DINAS KESEHATAN -->
                                <div class="row">
                                    <label class="col-lg-4">Dinas Kesehatan - Pembekalan Kesehatan</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 1. Obat dan Habis Pakai</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_perbekalan_kesehatan_obat"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_perbekalan_kesehatan_obat" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_obat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 2. Alat Kesehatan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_perbekalan_kesehatan_alat"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_perbekalan_kesehatan_alat" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_alat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 3. Bahan Sanitasi - Kaporit  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_perbekalan_kesehatan_sanitasi_kaporit"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_perbekalan_kesehatan_sanitasi_kaporit" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_sanitasi_kaporit') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 4. Bahan Sanitasi - PAC  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_perbekalan_kesehatan_sanitasi_pac"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_perbekalan_kesehatan_sanitasi_pac" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_sanitasi_pac') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 5. Bahan Sanitasi - Aquatab  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_perbekalan_kesehatan_sanitasi_aquatab"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_perbekalan_kesehatan_sanitasi_aquatab" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_sanitasi_aquatab') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 6. Bahan Sanitasi - Kantong Sampah  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_perbekalan_kesehatan_sanitasi_kantong_sampah"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_perbekalan_kesehatan_sanitasi_kantong_sampah" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_sanitasi_kantong_sampah') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 7. Bahan Sanitasi - Repellent Lalat  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_perbekalan_kesehatan_sanitasi_repellent_lalat"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_perbekalan_kesehatan_sanitasi_repellent_lalat" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_sanitasi_repellent_lalat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 8. Bahan Sanitasi - Hygiene kit  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_perbekalan_kesehatan_sanitasi_hygiene_kit"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_perbekalan_kesehatan_sanitasi_hygiene_kit" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_sanitasi_hygiene_kit') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 9. Persalinan kit  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="ada" name="dinkes_perbekalan_kesehatan_persalinan_kit"> Ada </input>
                                                        <input type="radio" value="tidak ada" name="dinkes_perbekalan_kesehatan_persalinan_kit" checked> Tidak Ada </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_persalinan_kit') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 10. Jumlah SDM  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_perbekalan_kesehatan_sdm_jumlah"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_perbekalan_kesehatan_sdm_jumlah" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_sdm_jumlah') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 11. Kompotensi SDM  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="memenuhi" name="dinkes_perbekalan_kesehatan_sdm_kompetensi"> Memenuhi </input>
                                                        <input type="radio" value="tidak memenuhi" name="dinkes_perbekalan_kesehatan_sdm_kompetensi" checked> Tidak Memenuhi </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_perbekalan_kesehatan_sdm_kompetensi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">Dinas Kesehatan - Sarana Pendukung Pelayanan Kesehatan</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 1. Transportasi operasional pelayanan kesehatan  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_sarana_pendukung_transportasi"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_sarana_pendukung_transportasi" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_sarana_pendukung_transportasi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 2. Alat komunikasi </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="dinkes_sarana_pendukung_alat_komunikasi"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="dinkes_sarana_pendukung_alat_komunikasi" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_sarana_pendukung_alat_komunikasi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 3. Sarana listrik </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="berfungsi" name="dinkes_sarana_pendukung_sarana_listrik"> Berfungsi </input>
                                                        <input type="radio" value="tidak berfungsi" name="dinkes_sarana_pendukung_sarana_listrik" checked> Tidak Berfungsi </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('dinkes_sarana_pendukung_sarana_listrik') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <!-- RUMAH SAKIT / PKM -->
                                <div class="row">
                                    <label class="col-lg-4">Rumah Sakit / PKM - Perbekalan Kesehatan</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 1. Obat dan Habis Pakai</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_perbekalan_kesehatan_obat"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_perbekalan_kesehatan_obat" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_obat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 2. Alat Kesehatan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_perbekalan_kesehatan_alat"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_perbekalan_kesehatan_alat" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_alat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 3. Bahan Sanitasi - Kaporit  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_perbekalan_kesehatan_sanitasi_kaporit"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_perbekalan_kesehatan_sanitasi_kaporit" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_sanitasi_kaporit') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 4. Bahan Sanitasi - PAC  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_perbekalan_kesehatan_sanitasi_pac"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_perbekalan_kesehatan_sanitasi_pac" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_sanitasi_pac') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 5. Bahan Sanitasi - Aquatab  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_perbekalan_kesehatan_sanitasi_aquatab"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_perbekalan_kesehatan_sanitasi_aquatab" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_sanitasi_aquatab') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 6. Bahan Sanitasi - Kantong Sampah  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_perbekalan_kesehatan_sanitasi_kantong_sampah"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_perbekalan_kesehatan_sanitasi_kantong_sampah" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_sanitasi_kantong_sampah') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 7. Bahan Sanitasi - Repellent Lalat  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_perbekalan_kesehatan_sanitasi_repellent_lalat"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_perbekalan_kesehatan_sanitasi_repellent_lalat" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_sanitasi_repellent_lalat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 8. Persalinan kit  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="ada" name="rs_perbekalan_kesehatan_persalinan_kit"> Ada </input>
                                                        <input type="radio" value="tidak ada" name="rs_perbekalan_kesehatan_persalinan_kit" checked> Tidak Ada </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_persalinan_kit') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 9. Air  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_perbekalan_kesehatan_air"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_perbekalan_kesehatan_air" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_air') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 10. Tempat Tidur  </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_perbekalan_kesehatan_tempat_tidur"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_perbekalan_kesehatan_tempat_tidur" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_perbekalan_kesehatan_tempat_tidur') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">Rumah Sakit - Kebutuhan Tenaga Kesehatan </label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 1. Jenis tempat penampungan </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="bangunan permanen" name="rs_tenaga_kesehatan_jenis_penampungan"> Bangunan Permanen </input>
                                                        <input type="radio" value="bangunan darurat" name="rs_tenaga_kesehatan_jenis_penampungan" checked> Bangunan Darurat </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_tenaga_kesehatan_jenis_penampungan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 2. Kapasitas penampungan pengungsi </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="memadai" name="rs_tenaga_kesehatan_kapasitas_penampungan"> Memadai </input>
                                                        <input type="radio" value="tidak memadai" name="rs_tenaga_kesehatan_kapasitas_penampungan" checked> Tidak Memadai </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_tenaga_kesehatan_kapasitas_penampungan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 3. Kapasitas penyediaan Air Bersih </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="memadai" name="rs_tenaga_kesehatan_kapasitas_air"> Memadai </input>
                                                        <input type="radio" value="tidak memadai" name="rs_tenaga_kesehatan_kapasitas_air" checked> Tidak Memadai </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_tenaga_kesehatan_kapasitas_air') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 4. Sarana jamban Darurat </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="memadai" name="rs_tenaga_kesehatan_jamban"> Memadai </input>
                                                        <input type="radio" value="tidak memadai" name="rs_tenaga_kesehatan_jamban" checked> Tidak Memadai </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_tenaga_kesehatan_jamban') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 5. Tempat pembuangan sampah </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="memadai" name="rs_tenaga_kesehatan_pembuangan_sampah"> Memadai </input>
                                                        <input type="radio" value="tidak memadai" name="rs_tenaga_kesehatan_pembuangan_sampah" checked> Tidak Memadai </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_tenaga_kesehatan_pembuangan_sampah') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 6. Sarana SPAL </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="memadai" name="rs_tenaga_kesehatan_sarana_spal"> Memadai </input>
                                                        <input type="radio" value="tidak memadai" name="rs_tenaga_kesehatan_sarana_spal" checked> Tidak Memadai </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_tenaga_kesehatan_sarana_spal') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 7. Penerangan </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="memadai" name="rs_tenaga_kesehatan_penerangan"> Memadai </input>
                                                        <input type="radio" value="tidak memadai" name="rs_tenaga_kesehatan_penerangan" checked> Tidak Memadai </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_tenaga_kesehatan_penerangan') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">Rumah Sakit - Sarana Pendukung Pelayanan Kesehatan </label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 1. Transportasi operasional pelayanan kesehatan </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_sarana_pendukung_transportasi"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_sarana_pendukung_transportasi" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_sarana_pendukung_transportasi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 2. Alat Komunikasi </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_sarana_pendukung_alat_komunikasi"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_sarana_pendukung_alat_komunikasi" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_sarana_pendukung_alat_komunikasi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 3. Sarana listrik untuk pelayanan kesehatan </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <fieldset id="group1">
                                                        <input type="radio" value="cukup" name="rs_sarana_pendukung_sarana_listrik"> Cukup </input>
                                                        <input type="radio" value="tidak cukup" name="rs_sarana_pendukung_sarana_listrik" checked> Tidak Cukup </input>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rs_sarana_pendukung_sarana_listrik') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">M. Upaya Penanggulangan yang telah dilakukan</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 1 Upaya Sub Klaster Pelayanan Kesehatan</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 2 Upaya Sub Klaster Pengendalian Penyakit, Penyehatan Lingkungan dan Air Bersih</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 3 Upaya Sub Klaster Pelayanan Gizi</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 4 Upaya Sub Klaster Pelayanan Kesehatan</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 5 Upaya Sub Klaster Kesehatan Reproduksi</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 6 Upaya Sub Klaster DVI</label>
                                    <div class="col-lg-7">
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
                                    <label class="col-lg-4">&nbsp;&nbsp;&nbsp; 7 Upaya Tim Logistik Kesehatan</label>
                                    <div class="col-lg-7">
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
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">J. Bantuan yang Diperlukan</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('bantuan_yang_diperlukan', $input->bantuan_yang_diperlukan, ['class' => 'form-control', 'placeholder' => 'Masukkan Hambatan']) ?>
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
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">K. Rekomendasi</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('rekomendasi', $input->rekomendasi, ['class' => 'form-control', 'placeholder' => 'Masukkan Bantuan yang diperlukan Segera']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('rekomendasi') ?>
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
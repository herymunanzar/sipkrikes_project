<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">EDIT KUESIONER KAJIAN RISIKO KRISIS KESEHATAN KABUPATEN / KOTA</h4>
                    <form action="<?= base_url("kuesioner_kajian_resikos/edit/$input->id") ?>" method="POST">
                        <div class="form-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-lg-4"> Pilih Provinsi</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="id_prov" id="prov-option">
                                                    <option value="" selected>=== Pilih Provinsi ===</option>
                                                    <?php foreach(getProvinsi() as $provinsi) : ?>
                                                        <option value="<?= $provinsi->id ?>" <?= $input->id_prov == $provinsi->id ? 'selected' : '' ?>>
                                                            <?= $provinsi->nama_prov ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('id_prov') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> Pilih Kabupaten / Kota</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <select class="form-control" name="id_kabkot" id="kabkot-option">
                                                    <option value="" selected>=== Pilih Kabupaten / Kota ===</option>
                                                    <?php foreach(getKabkota($input->id_prov) as $kabkot) : ?>
                                                        <option value="<?= $kabkot->id ?>" <?= $input->id_kabkot == $kabkot->id ? 'selected' : '' ?>>
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
                                <div class="row">
                                    <label class="col-lg-4">I. Umum</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 1. Dinas Kesehatan</label>
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
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 2. Alamat </label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('alamat', $input->alamat, ['class' => 'form-control', 'placeholder' => 'Masukkan Alamat Lengkap Dinas Kesehatan']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('alamat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 3. Telepon</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('telepon', $input->telepon, ['class' => 'form-control', 'placeholder' => 'Masukkan Telepon']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('telepon') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 4. Fax</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('fax', $input->fax, ['class' => 'form-control', 'placeholder' => 'Masukkan Fax']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('fax') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 5. Website</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('website', $input->website, ['class' => 'form-control', 'placeholder' => 'Masukkan alamat website']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('website') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 6. Email</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('email', $input->email, ['class' => 'form-control', 'placeholder' => 'Masukkan email']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('email') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 7. Responden</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama Responder 1</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('responder_nama_satu', $input->responder_nama_satu, ['class' => 'form-control', 'placeholder' => 'Masukkan nama responder']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('responder_nama_satu') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jabatan Responder 1</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('responder_jabatan_satu', $input->responder_jabatan_satu, ['class' => 'form-control', 'placeholder' => 'Masukkan jabatan responder']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('responder_jabatan_satu') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Hp Responder 1</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('responder_no_hp_satu', $input->responder_no_hp_satu, ['class' => 'form-control', 'placeholder' => 'Masukkan No Hp responder']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('responder_no_hp_satu') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama Responder 2</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('responder_nama_dua', $input->responder_nama_dua, ['class' => 'form-control', 'placeholder' => 'Masukkan nama responder']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('responder_nama_dua') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jabatan Responder 2</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('responder_jabatan_dua', $input->responder_jabatan_dua, ['class' => 'form-control', 'placeholder' => 'Masukkan jabatan responder']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('responder_jabatan_dua') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Hp Responder 2</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('responder_no_hp_dua', $input->responder_no_hp_dua, ['class' => 'form-control', 'placeholder' => 'Masukkan No Hp responder']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('responder_no_hp_dua') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">II. Karakteristik Wilayah</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 1. Luas Wilayah</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <?= form_input('karakteristik_luas', $input->karakteristik_luas, ['class' => 'form-control', 'placeholder' => 'Masukkan luas wilayah']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('karakteristik_luas') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 2. Letak Geografis dan Batas Wilayah</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <?= form_input('karakteristik_letak', $input->karakteristik_letak, ['class' => 'form-control', 'placeholder' => 'Masukkan letak geografis']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('karakteristik_letak') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 3. Kecamatan di Wilayah</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <?= form_input('karakteristik_jumlah_kec', $input->karakteristik_jumlah_kec, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah kecamatan ']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('karakteristik_jumlah_kec') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 4. Topografi</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <?= form_input('karakteristik_topografi', $input->karakteristik_topografi, ['class' => 'form-control', 'placeholder' => 'Masukkan topografi ']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('karakteristik_topografi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 5. Jumlah Penduduk</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <?= form_input('karakteristik_jumlah_penduduk', $input->karakteristik_jumlah_penduduk, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('karakteristik_jumlah_penduduk') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 6. Alat Komunikasi</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <?= form_input('karakteristik_alat_komunikasi', $input->karakteristik_alat_komunikasi, ['class' => 'form-control', 'placeholder' => 'Masukkan alat komunikasi']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('karakteristik_alat_komunikasi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"> &nbsp;&nbsp;&nbsp; 7. Akses Transportasi</label>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                <?= form_input('karakteristik_akses_transportasi', $input->karakteristik_akses_transportasi, ['class' => 'form-control', 'placeholder' => 'Masukkan akses transportasi']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('karakteristik_akses_transportasi') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">III. Ancaman Bencana (Hazard)</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-10"> &nbsp;&nbsp;&nbsp; 1. Jenis ancaman bencana di Provinsi (baik alam, non alam maupun sosial) :</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('ancam_jenis_ancaman', $input->ancam_jenis_ancaman, ['class' => 'form-control', 'style' => 'resize:none;height:100px']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('ancam_jenis_ancaman') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-10"> &nbsp;&nbsp;&nbsp; 2. Riwayat kejadian Krisis Kesehatan 5 tahun terakhir</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_textarea('ancam_riwayat', $input->ancam_riwayat, ['class' => 'form-control', 'style' => 'resize:none;height:100px']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('ancam_riwayat') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-4">IV. Kerentanan</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-6"> &nbsp;&nbsp;&nbsp; 1. Indeks Pembangunan Manusia (IPM) </label>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('kerentanan_ipm', $input->kerentanan_ipm, ['class' => 'form-control', 'placeholder' => '']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('kerentanan_ipm') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-6"> &nbsp;&nbsp;&nbsp; 2. Indeks Pembangunan Kesehatan Masyarakat  (IPKM)  </label>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <?= form_input('kerentanan_ipkm', $input->kerentanan_ipkm, ['class' => 'form-control', 'placeholder' => '']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-md-12">
                                                <?= form_error('kerentanan_ipkm') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Edit</button>
                                <a href="<?= base_url('kajian_resikos') ?>" class="btn btn-dark">Batal</a>
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
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">KAJIAN RISIKO KRISIS KESEHATAN PROVINSI</h4>
                    <form action="<?= base_url('kajian_resiko') ?>" method="POST">
                        <div class="form-body">
                            <!-- provinsi  -->
                            <div class="row">
                                <div class="col-lg-5">Pilih Provinsi</div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                            <select class="form-control" name="id_prov" id="prov-option">
                                                <option value="" selected>=== Pilih Provinsi ===</option>
                                                <?php foreach(getProvinsi() as $provinsi) : ?>
                                                    <option value="<?= $provinsi->id ?>" <?= set_value('id_prov') == $provinsi->id ? 'selected' : '' ?>>
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
                            
                            <!-- umum  -->
                            <div class="row mb-2">
                                <div class="col-12 pt-3 pb-2">I. Umum</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">1. Dinas Kesehatan</div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">2. Alamat </div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">3. Telepon</div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">4. Fax</div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">5. Website</div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">6. Email</div></div>
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
                            <div class="row mb-2">
                                <div class="col-12"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">7. Responden</div></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-3 ml-lg-5">Nama Responder 1</div></div>
                                <div class="col-lg-7 ml-3 ml-lg-0">
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-3 ml-lg-5">Jabatan Responder 1</div></div>
                                <div class="col-lg-7 ml-3 ml-lg-0">
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-3 ml-lg-5">No Hp Responder 1</div></div>
                                <div class="col-lg-7 ml-3 ml-lg-0">
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-3 ml-lg-5">Nama Responder 2</div></div>
                                <div class="col-lg-7 ml-3 ml-lg-0">
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-3 ml-lg-5">Jabatan Responder 2</div></div>
                                <div class="col-lg-7 ml-3 ml-lg-0">
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-3 ml-lg-5">No Hp Responder 2</div></div>
                                <div class="col-lg-7 ml-3 ml-lg-0">
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

                            <!-- Karakteristik Wilayah -->
                            <div class="row mb-2">
                                <div class="col-12 pt-3 pb-2">II. Karakteristik Wilayah</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">1. Luas Wilayah</div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">2. Letak Geografis dan Batas Wilayah</div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">3. Kabupaten / Kota di Wilayah</div></div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                            <?= form_input('karakteristik_jumlah_kab_kot', $input->karakteristik_jumlah_kab_kot, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah kabupaten/kota ']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('karakteristik_jumlah_kab_kot') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">4. Topografi</div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">5. Jumlah Penduduk</div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">6. Alat Komunikasi</div></div>
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">7. Akses Transportasi</div></div>
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
                            
                            <!-- Ancaman Bencana (Hazard) -->
                            <div class="row mb-2">
                                <div class="col-12 pt-3 pb-2">III. Ancaman Bencana (Hazard)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-12"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">1. Jenis ancaman bencana di Provinsi (baik alam, non alam maupun sosial) :</div></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <div class="pb-1 pb-lg-0 ml-0 ml-lg-3">
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
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-12"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">2. Riwayat kejadian Krisis Kesehatan 5 tahun terakhir</div></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <div class="pb-1 pb-lg-0 ml-0 ml-lg-3">
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
                            </div>
                            
                            <!-- Kerentanan -->
                            <div class="row mb-2">
                                <div class="col-12 pt-3 pb-2">IV. Kerentanan</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">1. Indeks Pembangunan Manusia (IPM) </div></div>
                                <div class="col-lg-7">
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
                            <div class="row mb-2">
                                <div class="col-lg-5"><div class="pb-1 pb-lg-0 ml-0 ml-lg-3">2. Indeks Pembangunan Kesehatan Masyarakat  (IPKM)  </div></div>
                                <div class="col-lg-7">
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
                        <div class="form-actions mt-4">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= base_url('kajian_resiko/reset') ?>" class="btn btn-dark">Reset</a>
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
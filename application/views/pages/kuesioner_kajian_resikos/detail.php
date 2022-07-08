<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">KUESIONER KAJIAN RISIKO KRISIS KESEHATAN KABUPATEN / KOTA</h4>
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-lg-4">Provinsi</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <label>: <?= $input->nama_prov ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4">Kabupaten / Kota</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <label>: <?= $input->nama_kabkot ?></label>
                                            </div>
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
                                                <label>: <?= $input->nama_dinas ?></label>
                                            </div>
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
                                                <label>: <?= $input->alamat ?></label>
                                            </div>
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
                                                <label>: <?= $input->telepon ?></label>
                                            </div>
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
                                                <label>: <?= $input->fax ?></label>
                                            </div>
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
                                                <label>: <?= $input->website ?></label>
                                            </div>
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
                                                <label>: <?= $input->email ?></label>
                                            </div>
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
                                                <label>: <?= $input->responder_nama_satu ?></label>
                                            </div>
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
                                                <label>: <?= $input->responder_jabatan_satu ?></label>
                                            </div>
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
                                                <label>: <?= $input->responder_no_hp_satu ?></label>
                                            </div>
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
                                                <label>: <?= $input->responder_nama_dua ?></label>
                                            </div>
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
                                                <label>: <?= $input->responder_jabatan_dua ?></label>
                                            </div>
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
                                                <label>: <?= $input->responder_no_hp_dua ?></label>
                                            </div>
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
                                                <label>: <?= $input->karakteristik_luas ?></label>
                                            </div>
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
                                                <label>: <?= $input->karakteristik_letak ?></label>
                                            </div>
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
                                                <label>: <?= $input->karakteristik_jumlah_kec ?></label>
                                            </div>
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
                                                <label>: <?= $input->karakteristik_topografi ?></label>
                                            </div>
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
                                                <label>: <?= $input->karakteristik_jumlah_penduduk ?></label>
                                            </div>
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
                                                <label>: <?= $input->karakteristik_alat_komunikasi ?></label>
                                            </div>
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
                                                <label>: <?= $input->karakteristik_akses_transportasi ?></label>
                                            </div>
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
                                                <label><?= $input->ancam_jenis_ancaman ?></label>
                                            </div>
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
                                                <label><?= $input->ancam_riwayat ?></label>
                                            </div>
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
                                                <label><?= $input->kerentanan_ipm ?></label>
                                            </div>
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
                                                <label><?= $input->kerentanan_ipkm ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <a href="<?= base_url('kuesioner_kajian_resikos/edit/'.$input->id) ?>" class="btn btn-info">Edit</a>
                            <a href="<?= base_url('kuesioner_kajian_resikos') ?>" class="btn btn-dark">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
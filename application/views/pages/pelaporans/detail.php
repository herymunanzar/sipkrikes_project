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
                    <form action="<?= base_url("pelaporans/cetak/$input->id") ?>" method="POST">
                        <?= form_hidden('id', $input->id) ?>
                        <?= form_hidden('user', $this->session->userdata('nama')) ?>
                        <div class="form-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-lg-5">A. Nama Dinas Kesehatan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->nama_dinas ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">B. Jenis Bencana</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->jenis_bencana ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">C. Waktu Kejadian Bencana</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->waktu_kejadian ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">D. Deskripsi Kejadian</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->deskripsi_bencana ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">E. Lokasi Bencana</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 1. Provinsi</label>
                                    <div class="col-lg-6">
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
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 2. Kabupaten/Kota</label>
                                    <div class="col-lg-6">
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
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 3. Kecamatan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->nama_kec ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 4. Desa/Kelurahan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->desa_dusun ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 5. Jumlah Penduduk Terancam</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->jumlah_penduduk_terancam ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 6. Topografi</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->topografi ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">F. Jumlah Korban</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 1. Korban Meninggal</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->jumlah_korban_meninggal ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 2. Korban Hilang</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->jumlah_korban_hilang ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 3. Korban Luka Berat / Rawat Inap</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->jumlah_luka_berat_rawat_inap ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 4. Korban Luka Ringan / Rawat Jalan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->jumlah_luka_ringan_rawat_jalan ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 5. Pengungsi</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->jumlah_pengungsi_penduduk_rentan ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">G. Fasilitas Umum</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 1. Akses ke lokasi kejadian krisis</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->fasilitas_umum_akses ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 2. Jalur komunikasi yang masih dapat digunakan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->fasilitas_umum_jalur_komunikasi ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 3. Jaringan Listrik</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->fasilitas_umum_jaringan_listrik ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 4. Sumber air bersih yang digunakan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->fasilitas_umum_air_bersih ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">H. Kondisi Fasilitas Kesehatan</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 1. Kondisi Fasilitas Kesehatan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->kondisi_faskes_kondisi ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 2 Kondisi Fungsi Pelayanan Fasilitas Kesehatan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->kondisi_faskes_fungsi_pelayanan ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">I. Upaya Penanggulangan yang telah dilakukan</label>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5">&nbsp;&nbsp;&nbsp; 1 Upaya Sub Klaster Pelayanan Kesehatan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->upaya_penanggulangan_pelayanan_kesehatan ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 2 Upaya Sub Klaster Pengendalian Penyakit, Penyehatan Lingkungan dan Air Bersih </label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->upaya_penanggulangan_pengendalian ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 3 Upaya Sub Klaster Pelayanan Gizi </label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->upaya_penanggulangan_pelayanan_gizi ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5">&nbsp;&nbsp;&nbsp; 4 Upaya Sub Klaster Pelayanan Kesehatan </label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->upaya_penanggulangan_pelayanan_kesehatan_jiwa ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 5 Upaya Sub Klaster Kesehatan Reproduksi</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->upaya_penanggulangan_reproduksi_dan_kia ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 6 Upaya Sub Klaster DVI </label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->upaya_penanggulangan_dvi ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-5"> &nbsp;&nbsp;&nbsp; 7 Upaya Tim Logistik Kesehatan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->upaya_penanggulangan_logistik_kesehatan ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">J. Hambatan Pelayanan Kesehatan</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->hambatan ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">K. Bantuan yang Diperlukan Segera</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->bantuan_yang_diperlukan ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label class="col-lg-5">L. Rencana Tidak Lanjut</label>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <label>: <?= $input->rencana_tindak_lanjut ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Download Dokumen Pelaporan</button>
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
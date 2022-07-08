<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">FORMULIR PELAPORAN AWAL KEJADIAN BENCANA atau RHA-FORM B1</h4>
                    <form action="<?= base_url("pelaporans/cetak/$input->id") ?>" method="POST">
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
                                                    <label>: <?= $input->jenis ?></label>
                                                </div>
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
                                                    <label>: <?= $input->deskripsi ?></label>
                                                </div>
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
                                                    <?php foreach(getProvinsi() as $provinsi) : ?>
                                                        <?php if($input->prov == $provinsi->id_prov){?>
                                                            <label>: <?= $provinsi->nama_prov ?></label>
                                                        <?php } ?>
                                                    <?php endforeach ?>
                                                </div>
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
                                                    <?php foreach(getKabkota($input->prov) as $kabkota) : ?>
                                                        <?php if($input->kab == $kabkota->id_kabkot){?>
                                                            <label>: <?= $kabkota->nama_kabkot ?></label>
                                                        <?php } ?>
                                                    <?php endforeach ?>
                                                </div>
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
                                                    <label>: <?= $input->kec ?></label>
                                                </div>
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
                                                    <label>: <?= $input->desa ?></label>
                                                </div>
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
                                                    <label>: <?= $input->dusun ?></label>
                                                </div>
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
                                                    <label>: <?= $input->letak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->lainnya ?></label>
                                                </div>
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
                                                    <label>: <?= $input->tanggal ?></label>
                                                </div>
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
                                                    <label>: <?= $input->waktu ?></label>
                                                </div>
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
                                                    <label>: <?= $input->meninggal ?></label>
                                                </div>
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
                                                    <label>: <?= $input->hilang ?></label>
                                                </div>
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
                                                    <label>: <?= $input->luka_berat ?></label>
                                                </div>
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
                                                    <label>: <?= $input->luka_ringan ?></label>
                                                </div>
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
                                                    <label>: <?= $input->pengungsi ?></label>
                                                </div>
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
                                                    <label>: <?= $input->pengungsi_kk ?></label>
                                                </div>
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
                                                    <label>: <?= $input->lokasi_ungsi ?></label>
                                                </div>
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
                                                    <label>: <?= $input->akses_mudah ?></label>
                                                </div>
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
                                                    <label>: <?= $input->akses_sukar ?></label>
                                                </div>
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
                                                    <label>: <?= $input->jalur ?></label>
                                                </div>
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
                                                    <label>: <?= $input->listrik ?></label>
                                                </div>
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
                                                    <label>: <?= $input->rs_bangun_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->rs_bangun_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->rs_layan_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->rs_layan_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->puskesmas_bangun_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->puskesmas_bangun_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->puskesmas_layan_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->puskesmas_layan_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->pustu_bangun_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->pustu_bangun_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->pustu_layan_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->pustu_layan_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->farmasi_bangun_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->farmasi_bangun_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->farmasi_layan_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->farmasi_layan_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->polindes_bangun_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->polindes_bangun_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->polindes_layan_rusak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->polindes_layan_tidak ?></label>
                                                </div>
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
                                                    <label>: <?= $input->air ?></label>
                                                </div>
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
                                                    <label>: <?= $input->upaya ?></label>
                                                </div>
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
                                                    <label>: <?= $input->bantuan ?></label>
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
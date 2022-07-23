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
                            <table class="table table-sm table-style" >
                                <tbody>
                                    <tr>
                                        <th>A. Nama Dinas Kesehatan</th>
                                        <td>:</td>
                                        <td><?= $input->nama_dinas ?></td>
                                    </tr>
                                    <tr>
                                        <th>B. Jenis Bencana</th>
                                        <td>:</td>
                                        <td><?= $input->jenis_bencana ?></td>
                                    </tr>
                                    <tr>
                                        <th>C. Waktu Kejadian Bencana</th>
                                        <td>:</td>
                                        <td><?= $input->waktu_kejadian ?></td>
                                    </tr>
                                    <tr>
                                        <th>D. Deskripsi Kejadian</th>
                                        <td>:</td>
                                        <td><?= $input->deskripsi_bencana ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">E. Lokasi Bencana</th>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">1. Provinsi</td>
                                        <td>:</td>
                                        <td><?= $input->nama_prov ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">2. Kabupaten/Kota</td>
                                        <td>:</td>
                                        <td><?= $input->nama_kabkot ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">3. Kecamatan</td>
                                        <td>:</td>
                                        <td><?= $input->nama_kec ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">4. Desa/Kelurahan</td>
                                        <td>:</td>
                                        <td><?= $input->desa_dusun ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">5. Jumlah Penduduk Terancam</td>
                                        <td>:</td>
                                        <td><?= $input->jumlah_penduduk_terancam ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">6. Topografi</td>
                                        <td>:</td>
                                        <td><?= $input->topografi ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">F. Jumlah Korban</th>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">1. Korban Meninggal</td>
                                        <td>:</td>
                                        <td><?= $input->jumlah_korban_meninggal ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">2. Korban Hilang</td>
                                        <td>:</td>
                                        <td><?= $input->jumlah_korban_hilang ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">3. Korban Luka Berat / Rawat Inap</td>
                                        <td>:</td>
                                        <td><?= $input->jumlah_luka_berat_rawat_inap ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">4. Korban Luka Ringan / Rawat Jalan</td>
                                        <td>:</td>
                                        <td><?= $input->jumlah_luka_ringan_rawat_jalan ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">5. Pengungsi</td>
                                        <td>:</td>
                                        <td><?= $input->jumlah_pengungsi_penduduk_rentan ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">G. Fasilitas Umum</th>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">1. Akses ke lokasi kejadian krisis</td>
                                        <td>:</td>
                                        <td><?= $input->fasilitas_umum_akses ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">2. Jalur komunikasi yang masih dapat digunakan</td>
                                        <td>:</td>
                                        <td><?= $input->fasilitas_umum_jalur_komunikasi ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">3. Jaringan Listrik</td>
                                        <td>:</td>
                                        <td><?= $input->fasilitas_umum_jaringan_listrik ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">4. Sumber air bersih yang digunakan</td>
                                        <td>:</td>
                                        <td><?= $input->fasilitas_umum_air_bersih ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">H. Kondisi Fasilitas Kesehatan</th>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">1. Kondisi Fasilitas Kesehatan</td>
                                        <td>:</td>
                                        <td><?= $input->kondisi_faskes_kondisi ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">2. Kondisi Fungsi Pelayanan Fasilitas Kesehatan</td>
                                        <td>:</td>
                                        <td><?= $input->kondisi_faskes_fungsi_pelayanan ?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">I. Upaya Penanggulangan yang telah dilakukan</th>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">1. Upaya Sub Klaster Pelayanan Kesehatan</td>
                                        <td>:</td>
                                        <td><?= $input->upaya_penanggulangan_pelayanan_kesehatan ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">2. Upaya Sub Klaster Pengendalian Penyakit, Penyehatan Lingkungan dan Air Bersih</td>
                                        <td>:</td>
                                        <td><?= $input->upaya_penanggulangan_pengendalian ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">3. Upaya Sub Klaster Pelayanan Gizi</td>
                                        <td>:</td>
                                        <td><?= $input->upaya_penanggulangan_pelayanan_gizi ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">4. Upaya Sub Klaster Pelayanan Kesehatan</td>
                                        <td>:</td>
                                        <td><?= $input->upaya_penanggulangan_pelayanan_kesehatan_jiwa ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">5. Upaya Sub Klaster Kesehatan Reproduksi</td>
                                        <td>:</td>
                                        <td><?= $input->upaya_penanggulangan_reproduksi_dan_kia ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">6. Upaya Sub Klaster DVI</td>
                                        <td>:</td>
                                        <td><?= $input->upaya_penanggulangan_dvi ?></td>
                                    </tr>
                                    <tr>
                                        <td class="pl-3">7. Upaya Tim Logistik Kesehatan</td>
                                        <td>:</td>
                                        <td><?= $input->upaya_penanggulangan_logistik_kesehatan ?></td>
                                    </tr>
                                    <tr>
                                        <th>J. Hambatan Pelayanan Kesehatan</th>
                                        <td>:</td>
                                        <td><?= $input->hambatan ?></td>
                                    </tr>
                                    <tr>
                                        <th>K. Bantuan yang Diperlukan Segera</th>
                                        <td>:</td>
                                        <td><?= $input->bantuan_yang_diperlukan ?></td>
                                    </tr>
                                    <tr>
                                        <th>L. Rencana Tidak Lanjut</th>
                                        <td>:</td>
                                        <td><?= $input->rencana_tindak_lanjut ?></td>
                                    </tr>
                                </tbody>
                            </table>
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
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
                    <table class="table table-sm table-style" >
                        <tbody>
                            <tr>
                                <th>Provinsi</th>
                                <td>:</td>
                                <td><?= $input->nama_prov ?></td>
                            </tr>

                            <!-- umum  -->
                            <tr>
                                <th colspan="3">I. Umum</th>
                            </tr>
                            <tr>
                                <td class="pl-3">1. Dinas Kesehatan</td>
                                <td>:</td>
                                <td><?= $input->nama_dinas ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">2. Alamat</td>
                                <td>:</td>
                                <td><?= $input->alamat ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">3. Telepon</td>
                                <td>:</td>
                                <td><?= $input->telepon ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">4. Fax</td>
                                <td>:</td>
                                <td><?= $input->fax ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">5. Website</td>
                                <td>:</td>
                                <td><?= $input->website ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">6. Email</td>
                                <td>:</td>
                                <td><?= $input->email ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3" colspan="3">7. Responden</td>
                            </tr>
                            <tr>
                                <td class="pl-5">Responder 1</td>
                                <td>:</td>
                                <td>
                                    <dt class="font-12 font-weight-normal"><em>Nama</em></dt>
                                    <dd><?= $input->responder_nama_satu ?></dd>
                                    <dt class="font-12 font-weight-normal"><em>Jabatan</em></dt>
                                    <dd><?= $input->responder_jabatan_satu ?></dd>
                                    <dt class="font-12 font-weight-normal"><em>No</em> Hp</dt>
                                    <dd><?= $input->responder_no_hp_satu ?></dd>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-5">Responder 2</td>
                                <td>:</td>
                                <td>
                                    <dt class="font-12 font-weight-normal"><em>Nama</em></dt>
                                    <dd><?= $input->responder_nama_dua ?></dd>
                                    <dt class="font-12 font-weight-normal"><em>Jabatan</em></dt>
                                    <dd><?= $input->responder_jabatan_dua ?></dd>
                                    <dt class="font-12 font-weight-normal"><em>No</em> Hp</dt>
                                    <dd><?= $input->responder_no_hp_dua ?></dd>
                                </td>
                            </tr>

                            <!-- Karakteristik Wilayah -->
                            <tr>
                                <th colspan="3">II. Karakteristik Wilayah</th>
                            </tr>
                            <tr>
                                <td class="pl-3">1. Luas Wilayah</td>
                                <td>:</td>
                                <td><?= $input->karakteristik_luas ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">2. Letak Geografis dan Batas Wilayah</td>
                                <td>:</td>
                                <td><?= $input->karakteristik_letak ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">3. Kabupaten / Kota di Wilayah</td>
                                <td>:</td>
                                <td><?= $input->karakteristik_jumlah_kab_kot ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">4. Topografi</td>
                                <td>:</td>
                                <td><?= $input->karakteristik_topografi ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">5. Jumlah Penduduk</td>
                                <td>:</td>
                                <td><?= $input->karakteristik_jumlah_penduduk ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">6. Alat Komunikasi</td>
                                <td>:</td>
                                <td><?= $input->karakteristik_alat_komunikasi ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">7. Akses Transportasi</td>
                                <td>:</td>
                                <td><?= $input->karakteristik_akses_transportasi ?></td>
                            </tr>

                            <!-- Ancaman Bencana (Hazard) -->
                            <tr>
                                <th colspan="3">III. Ancaman Bencana (Hazard)</th>
                            </tr>
                            <tr>
                                <td class="pl-3">1. Jenis ancaman bencana di Provinsi (baik alam, non alam maupun sosial)</td>
                                <td>:</td>
                                <td><?= $input->ancam_jenis_ancaman ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">2. Riwayat kejadian Krisis Kesehatan 5 tahun terakhir</td>
                                <td>:</td>
                                <td><?= $input->ancam_riwayat ?></td>
                            </tr>

                            <!-- Kerentanan -->
                            <tr>
                                <th colspan="3">IV. Kerentanan</th>
                            </tr>
                            <tr>
                                <td class="pl-3">1. Indeks Pembangunan Manusia (IPM)</td>
                                <td>:</td>
                                <td><?= $input->kerentanan_ipm ?></td>
                            </tr>
                            <tr>
                                <td class="pl-3">2. Indeks Pembangunan Kesehatan Masyarakat  (IPKM)</td>
                                <td>:</td>
                                <td><?= $input->kerentanan_ipkm ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-actions">
                        <div class="text-right">
                            <a href="<?= base_url('kajian_resikos/edit/'.$input->id) ?>" class="btn btn-info">Edit</a>
                            <a href="<?= base_url('kajian_resikos') ?>" class="btn btn-dark">Kembali</a>
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
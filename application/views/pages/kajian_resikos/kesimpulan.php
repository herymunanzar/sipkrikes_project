<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">KESIMPULAN KAJIAN RISIKO KRISIS KESEHATAN PROVINSI</h4>
                    <form action="<?= base_url('kajian_resiko') ?>" method="POST">
                        <div class="form-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-lg-4">KESIMPULAN</label>
                                </div>
                                <ol start="1">
                                    <div class="row">
                                        <li>Ancaman bencana di Provinsi <?= $input->nama_prov ?> adalah <?= $input->ancam_jenis_ancaman ?></li>
                                    </div>
                                    <div class="row">
                                        <li>Kerentanan yang bermasalah yaitu : a. Nilai Kerentanan IPM = <?= $input->kerentanan_ipm ?> dan b. Nilai Kerentanan IPKM = <?= $input->kerentanan_ipkm?></li>
                                    </div>
                                    <div class="row">
                                        <li>Persentase kapasitas Provinsi <?= $input->nama_prov ?> yaitu <?= $persentase ?> %, termasuk kategori <?= $kategori ?>, dengan rincian :</li>
                                    </div>
                                </ol>
                                <table class="table table-bordered no-wrap v-middle mb-0">
                                    <thead>
                                        <tr class="">
                                            <th class="border font-14 font-weight-medium text-muted text-center">No.</th>
                                            <th class="border font-14 font-weight-medium text-muted text-center">Indikator</th>
                                            <th class="border font-14 font-weight-medium text-muted text-center">Jumlah Indikator</th>
                                            <th class="border font-14 font-weight-medium text-muted text-center">Sesuai Standar</th>
                                            <th class="border font-14 font-weight-medium text-muted text-center">Tidak Sesuai Standar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">1</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">Kebijakan/Peraturan</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">8</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $kebijakan?></td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $hasil_tidak_sesuai_kebijakan = 8 + $kebijakan?></td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">2</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">Penguatan kapasitas</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">11</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $penguatan?></td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $hasil_tidak_sesuai_penguatan = 11 + $penguatan?></td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">3</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">Peringatan Dini</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">2</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $peringatan_dini?></td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $hasil_tidak_sesuai_peringatan_dini = 2 + $peringatan_dini?></td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">4</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">Mitigasi</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">11</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $mitigasi?></td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $hasil_tidak_sesuai_mitigasi = 11 + $mitigasi?></td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">5</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">Kesiapsiagaan</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">13</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $kesiapsiagaan?></td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $hasil_tidak_sesuai_kesiapsiagaan = 13 + $kesiapsiagaan?></td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"></td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">Total Pencapaian</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">45</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $total?></td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $hasil_tidak_sesuai_total = 45 + $total?></td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"></td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">Persentase</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14">100 %</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $persentase ?> %</td>
                                            <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $hasil_tidak_sesuai_persentase = 100 - $persentase ?> %</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-actions">
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
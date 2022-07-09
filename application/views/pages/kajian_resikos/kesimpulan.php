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
                            <p class="mb-1 font-14">KESIMPULAN</p>
                            <ol start="1" class="font-14">
                                <li>Ancaman bencana di Provinsi <?= $input->nama_prov ?> adalah <?= $input->ancam_jenis_ancaman ?></li>
                                <li>Kerentanan yang bermasalah yaitu : a. Nilai Kerentanan IPM = <?= $input->kerentanan_ipm ?> dan b. Nilai Kerentanan IPKM = <?= $input->kerentanan_ipkm?></li>
                                <li>Persentase kapasitas Provinsi <?= $input->nama_prov ?> yaitu <?= $persentase ?> %, termasuk kategori <?= $kategori ?>, dengan rincian :</li>
                            </ol>
                            <div class="table-responsive mt-4">
                                <table class="table table-style-border table-striped table-sm no-wrap font-14">
                                    <thead>
                                        <th>No.</th>
                                        <th>Indikator</th>
                                        <th>Jumlah Indikator</th>
                                        <th>Sesuai Standar</th>
                                        <th>Tidak Sesuai Standar</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td >1</td>
                                            <td >Kebijakan/Peraturan</td>
                                            <td >8</td>
                                            <td ><?= $kebijakan?></td>
                                            <td ><?= $hasil_tidak_sesuai_kebijakan = 8 + $kebijakan?></td>
                                        </tr>
                                        <tr>
                                            <td >2</td>
                                            <td >Penguatan kapasitas</td>
                                            <td >11</td>
                                            <td ><?= $penguatan?></td>
                                            <td ><?= $hasil_tidak_sesuai_penguatan = 11 + $penguatan?></td>
                                        </tr>
                                        <tr>
                                            <td >3</td>
                                            <td >Peringatan Dini</td>
                                            <td >2</td>
                                            <td ><?= $peringatan_dini?></td>
                                            <td ><?= $hasil_tidak_sesuai_peringatan_dini = 2 + $peringatan_dini?></td>
                                        </tr>
                                        <tr>
                                            <td >4</td>
                                            <td >Mitigasi</td>
                                            <td >11</td>
                                            <td ><?= $mitigasi?></td>
                                            <td ><?= $hasil_tidak_sesuai_mitigasi = 11 + $mitigasi?></td>
                                        </tr>
                                        <tr>
                                            <td >5</td>
                                            <td >Kesiapsiagaan</td>
                                            <td >13</td>
                                            <td ><?= $kesiapsiagaan?></td>
                                            <td ><?= $hasil_tidak_sesuai_kesiapsiagaan = 13 + $kesiapsiagaan?></td>
                                        </tr>
                                        <tr>
                                            <td ></td>
                                            <td >Total Pencapaian</td>
                                            <td >45</td>
                                            <td ><?= $total?></td>
                                            <td ><?= $hasil_tidak_sesuai_total = 45 + $total?></td>
                                        </tr>
                                        <tr>
                                            <td ></td>
                                            <td >Persentase</td>
                                            <td >100 %</td>
                                            <td ><?= round($persentase) ?> %</td>
                                            <td ><?= round($hasil_tidak_sesuai_persentase = 100 - $persentase) ?> %</td>
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
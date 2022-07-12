<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    
    <?php $this->load->view('layouts/_alert') ?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">List Data Pelaporan Awal Pengungsi</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0" id="dataTable">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Kabupaten / Kota</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Kecamatan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Lokasi Pengungsian</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Gangguan Jiwa Anak</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Gangguan Jiwa Dewasa</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Pengungsi Laki - laki</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Pengungsi Perempuan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Pengungsi KK</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Penduduk Rentan Bayi</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Penduduk Rentan Balita</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Penduduk Rentan Bumil</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Penduduk Rentan Buteki</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Penduduk Rentan Cacat Laki</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Penduduk Rentan Cacat Perempuan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Penduduk Rentan Lansia Laki</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jumlah Penduduk Rentan Lansia Perempuan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Edit</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->nama_kabkot ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->nama_kec ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->lokasi_pengungsian ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->gangguan_jiwa_anak ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->gangguan_jiwa_dewasa ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_pengungsi_laki ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_pengungsi_perempuan ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_pengungsi_kk ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_penduduk_rentan_bayi ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_penduduk_rentan_balita ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_penduduk_rentan_bumil ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_penduduk_rentan_buteki ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_penduduk_rentan_cacat_laki ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_penduduk_rentan_cacat_perempuan ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_penduduk_rentan_lansia_laki ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jumlah_penduduk_rentan_lansia_perempuan ?></td>
                                        <!-- Hanya admin yang boleh melakukan aksi pada data -->
                                        <?php if ($this->session->userdata('role') == 'admin') : ?>
                                            <td class="border-top-0 text-center text-muted px-2 py-2">
                                                <a href="<?= base_url("pelaporans/edit/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-edit text-info"></i>
                                                </a>
                                            </td>
                                            <td class="border-top-0 text-center text-muted px-2 py-2">
                                                <a href="<?= base_url("pelaporans/hapus/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-trash text-info"></i>
                                                </a>
                                            </td>
                                        <?php endif ?>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <br>
                        <div class="form-actions">
                            <div class="text-right">
                                <a href="<?= base_url('pelaporans') ?>" class="btn btn-dark">Kembali</a>
                            </div>
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
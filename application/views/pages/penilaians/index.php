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
                        <h4 class="card-title">List Data Pelaporan Penilaian Cepat Kesehatan Kejadian Krisis Kesehatan</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0" id="dataTable">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Nama Dinas Kesehatan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Jenis Bencana</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Provinsi</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Lokasi Bencana</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Data Korban Meninggal</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Data Korban Hilang</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Data Korban Luka Berat dan Ringan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Data Pengungsi</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Data Fasilitas Kesehatan</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Detail</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Edit</th>
                                    <th class="border-0 font-14 font-weight-medium text-muted text-center">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->nama_dinas ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->jenis_bencana ?></td>
                                        <td class="border-top-0 text-muted px-2 py-2 font-14"><?= $row->nama_prov ?></td>
                                        <td class="border-top-0 text-center text-muted px-2 py-2">
                                            <a href="<?= base_url("penilaian_cepat_lokasi_bencana/input_lokasi_bencana/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-map-marker-alt text-info"></i>
                                            </a>
                                            <a href="<?= base_url("penilaian_cepat_lokasi_bencana/lihat_lokasi_bencana/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-map text-info"></i>
                                            </a>
                                        </td>
                                        <td class="border-top-0 text-center text-muted px-2 py-2">
                                            <a href="<?= base_url("penilaian_cepat_korban_meninggal/input_korban_meninggal/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-pencil-alt text-info"></i>
                                            </a>
                                            <a href="<?= base_url("penilaian_cepat_korban_meninggal/lihat_korban_meninggal/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-clipboard-list text-info"></i>
                                            </a>
                                        </td>
                                        <td class="border-top-0 text-center text-muted px-2 py-2">
                                            <a href="<?= base_url("penilaian_cepat_korban_hilang/input_korban_hilang/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-pencil-alt text-info"></i>
                                            </a>
                                            <a href="<?= base_url("penilaian_cepat_korban_hilang/lihat_korban_hilang/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-clipboard-list text-info"></i>
                                            </a>
                                        </td>
                                        <td class="border-top-0 text-center text-muted px-2 py-2">
                                            <a href="<?= base_url("penilaian_cepat_korban_luka/input_korban_luka/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-pencil-alt text-info"></i>
                                            </a>
                                            <a href="<?= base_url("penilaian_cepat_korban_luka/lihat_korban_luka/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-clipboard-list text-info"></i>
                                            </a>
                                        </td>
                                        <td class="border-top-0 text-center text-muted px-2 py-2">
                                            <a href="<?= base_url("penilaian_cepat_pengungsi/input_pengungsi/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-pencil-alt text-info"></i>
                                            </a>
                                            <a href="<?= base_url("penilaian_cepat_pengungsi/lihat_pengungsi/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-clipboard-list text-info"></i>
                                            </a>
                                        </td>
                                        <td class="border-top-0 text-center text-muted px-2 py-2">
                                            <a href="<?= base_url("penilaian_cepat_fasilitas_kesehatan/input_fasilitas_kesehatan/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-pencil-alt text-info"></i>
                                            </a>
                                            <a href="<?= base_url("penilaian_cepat_fasilitas_kesehatan/lihat_fasilitas_kesehatan/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-clipboard-list text-info"></i>
                                            </a>
                                        </td>
                                        <td class="border-top-0 text-center text-muted px-2 py-2">
                                            <a href="<?= base_url("penilaians/detail/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-info text-info"></i>
                                            </a>
                                        </td>
                                        <!-- Hanya admin yang boleh melakukan aksi pada data -->
                                        <?php if ($this->session->userdata('role') == 'admin') : ?>
                                            <td class="border-top-0 text-center text-muted px-2 py-2">
                                                <a href="<?= base_url("penilaians/edit/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-edit text-info"></i>
                                                </a>
                                            </td>
                                            <td class="border-top-0 text-center text-muted px-2 py-2">
                                                <a href="<?= base_url("penilaians/hapus/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-trash text-info"></i>
                                                </a>
                                            </td>
                                        <?php endif ?>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
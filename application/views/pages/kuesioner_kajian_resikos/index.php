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
                        <h4 class="card-title">List Data Kajian Resiko Provinsi</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered no-wrap v-middle mb-0">
                            <thead>
                                <tr class="">
                                    <th class="border font-14 font-weight-medium text-muted text-center">Provinsi</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Kabupaten / Kota</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Dinas Kesehatan</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Website</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Detail</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Kapasitas</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Kesimpulan</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr>
                                        <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $row->nama_prov ?></td>
                                        <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $row->nama_kabkot ?></td>
                                        <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $row->nama_dinas ?></td>
                                        <td class="border-top-0 text-muted px-1 py-0 font-14"><?= $row->website ?></td>
                                        <td class="border-top-0 text-center text-muted px-1 py-0">
                                            <a href="<?= base_url("kuesioner_kajian_resikos/detail/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-info-circle text-info"></i>
                                            </a>
                                        </td>
                                        <td class="border-top-0 text-center text-muted px-1 py-0">
                                            <?php if($row->id_kapasitas == null) {?>
                                                <a href="<?= base_url("kapasitas_kuesioner_kajian_resikos/input_kapasitas/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-pencil-alt text-info"></i>
                                                </a>
                                            <?php }else{ ?>
                                                <a href="<?= base_url("kapasitas_kuesioner_kajian_resikos/detail/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-file-alt text-info"> </i>
                                                </a>
                                            <?php } ?>
                                        </td>

                                        <!-- Hanya admin yang boleh melakukan aksi pada data -->
                                        <td class="border-top-0 text-center text-muted px-1 py-0">
                                            <?php //if ($this->session->userdata('role') == 'admin')
                                            if ($row->id_kapasitas == null){ ?>
                                                <a href="#" class="btn btn-sm">
                                                    <i class="fas fa-minus text-info"></i>
                                                </a>
                                            <?php }else { ?>
                                                <a href="<?= base_url("kuesioner_kajian_resikos/kesimpulan/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-chart-bar text-info"></i>
                                                </a>
                                            <?php } ?>
                                        </td>
                                        <td class="border-top-0 text-center text-muted px-1 py-0">
                                            <a href="<?= base_url("kuesioner_kajian_resikos/hapus/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-trash text-info"></i>
                                            </a>
                                        </td>
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
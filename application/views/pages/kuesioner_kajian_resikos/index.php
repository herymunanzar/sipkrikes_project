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
                        <table class="table table-sm table-style-border table-striped no-wrap font-14" id="dataTable">
                            <thead>
                                <th class="py-2">Provinsi</th>
                                <th class="py-2">Kabupaten / Kota</th>
                                <th class="py-2">Dinas Kesehatan</th>
                                <th class="py-2">Website</th>
                                <th class="py-2">Detail</th>
                                <th class="py-2">Kapasitas</th>
                                <th class="py-2">Kesimpulan</th>
                                <th class="py-2">Hapus</th>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr>
                                        <td><?= $row->nama_prov ?></td=>
                                        <td><?= $row->nama_kabkot ?></td>
                                        <td><?= $row->nama_dinas ?></td>
                                        <td><?= $row->website ?></td>
                                        <td>
                                            <a href="<?= base_url("kuesioner_kajian_resikos/detail/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-info-circle text-info"></i>
                                            </a>
                                        </td=>
                                        <td>
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
                                        <td>
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
                                        </td=>
                                        <td>
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
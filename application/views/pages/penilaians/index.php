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
                        <h4 class="card-title">List Data Penilaian</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered no-wrap v-middle mb-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="border  font-14 font-weight-medium text-muted text-center">Jenis Bencana</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Tanggal</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Pelaporan</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Detail</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Edit</th>
                                    <th class="border font-14 font-weight-medium text-muted text-center">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($content as $row) : ?>
                                    <tr>
                                        <td class="border text-muted px-2 py-2 font-14"><?= $row->jenis ?></td>
                                        <td class="border text-muted px-2 py-2 font-14"><?= $row->tanggal ?></td>
                                        <td class="border text-muted px-2 py-2 font-14"><?= $row->user ?></td>
                                        <td class="border text-center text-muted px-2 py-2">
                                            <a href="<?= base_url("penilaians/detail/$row->id") ?>" class="btn btn-sm">
                                                <i class="fas fa-info text-info"></i>
                                            </a>
                                        </td>
                                        <!-- Hanya admin yang boleh melakukan aksi pada data -->
                                        <?php if ($this->session->userdata('role') == 'admin') : ?>
                                            <td class="border text-center text-muted px-2 py-2">
                                                <a href="<?= base_url("penilaians/edit/$row->id") ?>" class="btn btn-sm">
                                                    <i class="fas fa-edit text-info"></i>
                                                </a>
                                            </td>
                                            <td class="border text-center text-muted px-2 py-2">
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
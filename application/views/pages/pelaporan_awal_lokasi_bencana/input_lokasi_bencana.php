<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">INPUT LOKASI BENCANA</h4>
                    <form action="<?= base_url('pelaporan_awal_lokasi_bencana/input_lokasi_bencana/'.$data->id) ?>" method="POST">
                        <?= form_hidden('id_pelaporan_awal', $data->id) ?>
                        <div class="form-body">
                            <div class="row mb-3">
                                <label class="col-lg-5">Kabupaten / Kota</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select class="form-control" name="id_kabkot" id="kabkot-option">
                                                    <option value="" selected>=== Pilih Kabupaten / Kota ===</option>
                                                    <?php foreach($kabkot as $kabkot) : ?>
                                                        <option value="<?= $kabkot->id ?>" <?= set_value('id_kabkot') == $kabkot->id ? 'selected' : '' ?>>
                                                            <?= $kabkot->nama_kabkot ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('id_kabkot') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-lg-5">Kecamatan</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select class="form-control" name="nama_kec" id="kec-option">
                                                    <option value="" selected>=== Pilih Kecamatan ===</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('nama_kec') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-lg-5">Desa/Dusun</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_input('desa_dusun', $input->desa_dusun, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Desa / Dusun']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('desa_dusun') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-lg-5"> Jumlah Penduduk Terancam</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <?= form_input('jumlah_penduduk_terancam', $input->jumlah_penduduk_terancam, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah penduduk terancam']) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('jumlah_penduduk_terancam') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-lg-5">Topografi</label>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select class="form-control" name="topografi" id="letak-option">
                                                    <option value="" selected>=== Pilih Letak Geografis ===</option>
                                                    <?php foreach(getLetakGeografis() as $letak) : ?>
                                                        <option value="<?= $letak->nama_letak ?>" <?= set_value('topografi') == $letak->nama_letak ? 'selected' : '' ?>>
                                                            <?= $letak->nama_letak ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-md-12">
                                            <?= form_error('topografi') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= base_url('pelaporans') ?>" class="btn btn-dark">Kembali</a>
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
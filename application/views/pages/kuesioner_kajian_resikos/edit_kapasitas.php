<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">EDIT KAPASITAS KUESIONER KAJIAN RISIKO KRISIS KESEHATAN PROVINSI</h4>
                    <form action="<?= base_url("kapasitas_kuesioner_kajian_resikos/edit/$input->id") ?>" method="POST">
                        <?= form_hidden('id_kuesioner_kajian_resiko_kabkot', $input->id_kuesioner_kajian_resiko_kabkot) ?>
                        <div class="form-body">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-lg-4">V. Kapasitas</label>
                                </div>
                                <table class="table-bordered font-11" >
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Indikator</th>
                                        <th class="text-center">Pencapaian</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Kebijakan / Peraturan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>a. Kebijakan / Peraturan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="1"><li>Peraturan yang dibuat pemerintah provinsi terkait penanggulangan bencana/Krisis Kesehatan</li><ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kebijakan_peraturan" <?php if($input->kebijakan_peraturan == 'ada') echo 'checked'; ?>> Ada </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_peraturan" <?php if($input->kebijakan_peraturan == 'tidak ada') echo 'checked'; ?>> Tidak Ada</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="2"><li>Peraturan/SK Kadinkes terkait penanggulangan bencana/Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kebijakan_sk" <?php if($input->kebijakan_sk == 'ada') echo 'checked'; ?>> Ada </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_sk" <?php if($input->kebijakan_sk == 'tidak ada') echo 'checked'; ?>> Tidak Ada</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="3"><li>Tersedia/SOP Mekanisme Koordinasi Terkait PKK</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kebijakan_sop" <?php if($input->kebijakan_sop == 'ada') echo 'checked'; ?>> Ada </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_sop" <?php if($input->kebijakan_sop == 'tidak ada') echo 'checked'; ?>> Tidak Ada</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>b. Struktur Organisasi Penanggulangan Krisis kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="4"><li>Pelaksanaan pertemuan koordinasi klaster kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="rutin" name="kebijakan_koordinasi" <?php if($input->kebijakan_koordinasi == 'rutin') echo 'checked'; ?>> Rutin, walau tidak terjadi bencana </input>
                                                <input type="radio" value="sewaktu-waktu" name="kebijakan_koordinasi" <?php if($input->kebijakan_koordinasi == 'sewaktu-waktu') echo 'checked'; ?>> Sewaktu-waktu bila ada kejadian bencana/krisis kesehatan </input>
                                                <input type="radio" value="tidak pernah" name="kebijakan_koordinasi" <?php if($input->kebijakan_koordinasi == 'tidak pernah') echo 'checked'; ?>> Tidak Pernah </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="5"><li>Unit di Dinkes Kesehatan yang memiliki tugas mengkoordinasikan upaya Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kebijakan_unit" <?php if($input->kebijakan_unit == 'ada') echo 'checked'; ?>> Ada, yaitu Bidang ..... </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_unit" <?php if($input->kebijakan_unit == 'tidak ada') echo 'checked'; ?>> Tidak ada, sehingga bila terjadi krisis kesehatan yang melaksanakan adalah ........</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="6"><li>SK Klaster Kesehatan Provinsi</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kebijakan_sk_klaster" <?php if($input->kebijakan_sk_klaster == 'ada') echo 'checked'; ?>> Ada </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_sk_klaster" <?php if($input->kebijakan_sk_klaster == 'tidak ada') echo 'checked'; ?>> Tidak </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>c. Keterlibatan Institusi/Lembaga Non Pemerintahan dalam Penanggulangan Krisis Kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="7"><li>Dinas Kesehatan telah mengidentifikasi institusi/lembaga non pemerintahan yang dilibatkan dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="kebijakan_dinas_identifikasi" <?php if($input->kebijakan_dinas_identifikasi == 'melakukan') echo 'checked'; ?>> Melakukan </input>
                                                <input type="radio" value="tidak melakukan" name="kebijakan_dinas_identifikasi" <?php if($input->kebijakan_dinas_identifikasi == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="8"><li>Dinas Kesehatan pernah mengadakan MoU dengan LSM/Instansi/Lembaga non pemerintah dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya" name="kebijakan_dinas_mou_lembaga" <?php if($input->kebijakan_dinas_mou_lembaga == 'ya') echo 'checked'; ?>> Ya </input>
                                                <input type="radio" value="tidak" name="kebijakan_dinas_mou_lembaga" <?php if($input->kebijakan_dinas_mou_lembaga == 'tidak') echo 'checked'; ?>> Tidak </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Penguatan Kapasitas</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>a. Fasilitas Pelayanan Kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="9"><li>Jumlah total seluruh Fasilitas Pelayanan Kesehatan</li></ol></td>
                                        <td><?= form_input('penguatan_jumlah_seluruh_fas_pel_kes', $input->penguatan_jumlah_seluruh_fas_pel_kes, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah seluruh fasilitas pelayanan kesehatan']) ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="10"><li>Jumlah Puskesmas</li></ol></td>
                                        <td><?= form_input('penguatan_jumlah_puskesmas', $input->penguatan_jumlah_puskesmas, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah puskesmas']) ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="11"><li>Jumlah Rumah Sakit</li></ol></td>
                                        <td><?= form_input('penguatan_jumlah_rs', $input->penguatan_jumlah_rs, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah rumah sakit']) ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="12"><li>Kapasitas tempat tidur di RS</li></ol></td>
                                        <td><?= form_input('penguatan_kapasitas_tempat_tidur_rs', $input->penguatan_kapasitas_tempat_tidur_rs, ['class' => 'form-control', 'placeholder' => 'Masukkan kapasitas tempat tidur di RS']) ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="13"><li>Proporsi RS di Kab/Kota yang telah memiliki Tim tanggap darurat bencana RS</li></ol></td>
                                        <td><?= form_input('penguatan_proporsi_rs_memiliki_tim', $input->penguatan_proporsi_rs_memiliki_tim, ['class' => 'form-control', 'placeholder' => 'Masukkan proporsi RS memiliki tim']) ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="14"><li>Dinkes memilliki Program yang berkesinambungan untuk mengimplementasi fasilitas pelayanan kesehatan aman bencana</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_dinkes_memiliki_program" <?php if($input->penguatan_dinkes_memiliki_program == 'memiliki') echo 'checked'; ?>> Memiliki </input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_dinkes_memiliki_program" <?php if($input->penguatan_dinkes_memiliki_program == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="15"><li>Dinkes memfasilitasi upaya penilaian risiko fasyankes terhadap berbagai ancaman yang terjadi di wilayah tersebut </li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya, sebagian atau seluruh" name="penguatan_dinkes_memfasilitasi" <?php if($input->penguatan_dinkes_memfasilitasi == 'ya, sebagian atau seluruh') echo 'checked'; ?>> Ya, sebagian /seluruh fasyankes telah dilakukan penilaian risiko</input>
                                                <input type="radio" value="ya, sebagian kecil" name="penguatan_dinkes_memfasilitasi" <?php if($input->penguatan_dinkes_memfasilitasi == 'ya, sebagian kecil') echo 'checked'; ?>> Ya, sebagian kecil fasyankes telah dilakukan penilaian risiko</input>
                                                <input type="radio" value="belum ada" name="penguatan_dinkes_memfasilitasi" <?php if($input->penguatan_dinkes_memfasilitasi == 'belum ada') echo 'checked'; ?>> Belum ada sama sekali </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>b. Sumber daya manusia</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="16"><li>Jumlah dokter spesialis</li></ol></td>
                                        <td><?= form_input('penguatan_jumlah_dokter_spesialis', $input->penguatan_jumlah_dokter_spesialis, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah dokter spesialis']) ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="17"><li>Jumlah dokter umum</li></ol></td>
                                        <td><?= form_input('penguatan_jumlah_dokter_umum', $input->penguatan_jumlah_dokter_umum, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah dokter umum']) ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="18"><li>Jumlah bidan</li></ol></td>
                                        <td><?= form_input('penguatan_jumlah_bidan', $input->penguatan_jumlah_bidan, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah bidan']) ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="19"><li>Jumlah perawat</li></ol></td>
                                        <td><?= form_input('penguatan_jumlah_perawat', $input->penguatan_jumlah_perawat, ['class' => 'form-control', 'placeholder' => 'Masukkan jumlah perawat']) ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="20"><li>Ketenagaan pada unit yang mengkoordinir upaya Penanggulangan Krisis Kesehatan di Dinas Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="penguatan_ketenagaan_unit" <?php if($input->penguatan_ketenagaan_unit == 'ada') echo 'checked'; ?>> Ada, dengan latar belakang pendidikan .... </input>
                                                <input type="radio" value="tidak ada" name="penguatan_ketenagaan_unit" <?php if($input->penguatan_ketenagaan_unit == 'tidak ada') echo 'checked'; ?>> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="21"><li>Kepemilikan Tim RHA</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_tim_rha" <?php if($input->penguatan_tim_rha == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_tim_rha" <?php if($input->penguatan_tim_rha == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="22"><li>Kepemilikan Tim Penyelidikan Epidemiologi</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_tim_penyelidikan_epidemiologi" <?php if($input->penguatan_tim_penyelidikan_epidemiologi == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_tim_penyelidikan_epidemiologi" <?php if($input->penguatan_tim_penyelidikan_epidemiologi == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="23"><li>Kepemilikan Tim Reaksi Cepat/ Tim Gerak Cepat/ Emergency Medical Team/ PHRRT</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_tim_reaksi_cepat" <?php if($input->penguatan_tim_reaksi_cepat == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_tim_reaksi_cepat" <?php if($input->penguatan_tim_reaksi_cepat == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="24"><li>Dinkes Kab/kota telah memetakan / mengidentifikasi tenaga kesehatan yang siap untuk dimobilisasi pada saat bencana</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="penguatan_memetakan_petugas" <?php if($input->penguatan_memetakan_petugas == 'melakukan') echo 'checked'; ?>> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="penguatan_memetakan_petugas" <?php if($input->penguatan_memetakan_petugas == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="25"><li>SOP mekanisme mobilitas tim PKK</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="penguatan_sop" <?php if($input->penguatan_sop == 'ada') echo 'checked'; ?>> Ada</input>
                                                <input type="radio" value="tidak ada" name="penguatan_sop" <?php if($input->penguatan_sop == 'tidak ada') echo 'checked'; ?>> Tidak Ada</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="26"><li>Memiliki petugas yang terlatih manajemen Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_petugas_managemen" <?php if($input->penguatan_petugas_managemen == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_petugas_managemen" <?php if($input->penguatan_petugas_managemen == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="27"><li>Memiliki petugas yang terlatih terkait teknis medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_petugas_medis" <?php if($input->penguatan_petugas_medis == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_petugas_medis" <?php if($input->penguatan_petugas_medis == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="28"><li>Petugas yang terlatih terkait teknis non medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_petugas_non_medis" <?php if($input->penguatan_petugas_non_medis == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_petugas_non_medis" <?php if($input->penguatan_petugas_non_medis == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="29"><li>Perencanaan peningkatan kapasitas SDM terkait PKK yang rutin dan berkesinambungan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="penguatan_peningkatan" <?php if($input->penguatan_peningkatan == 'ada') echo 'checked'; ?>> Ada</input>
                                                <input type="radio" value="tidak ada" name="penguatan_peningkatan" <?php if($input->penguatan_peningkatan == 'tidak ada') echo 'checked'; ?>> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td>Peringatan Dini</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="30"><li>Sistem Peringatan Dini</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya, sebagian atau seluruh" name="peringatan_sistem" <?php if($input->peringatan_sistem == 'ya, sebagian atau seluruh') echo 'checked'; ?>> Ya, sebagian / seluruh ancaman bencana sudah ada sistem peringatan dininya</input>
                                                <input type="radio" value="ya, sebagian kecil" name="peringatan_sistem" <?php if($input->peringatan_sistem == 'ya, sebagian kecil') echo 'checked'; ?>> Ya, tapi hanya sebagian kecil ancaman bencana yang ada sistem peringatan dininya</input>
                                                <input type="radio" value="tidak ada" name="peringatan_sistem" <?php if($input->peringatan_sistem == 'tidak ada') echo 'checked'; ?>> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Mitigasi</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>a. Pemberdayaan Masyarakat dalamPenanggulangan Krisis Kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="31"><li>Fasilitas kepada masyarakat dalam rangka pemberdayaan masyarakat terkait Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="mitigasi_fasilitas_kepada_masyarakat" <?php if($input->mitigasi_fasilitas_kepada_masyarakat == 'melakukan') echo 'checked'; ?>> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="mitigasi_fasilitas_kepada_masyarakat" <?php if($input->mitigasi_fasilitas_kepada_masyarakat == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>b. Kapasitas untuk memetakan risiko Krisis Kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="32"><li>Peta/pemetaan kapasitas atau data kapasitas sumber daya yang dapat digunakan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="mitigasi_peta_kapasitas" <?php if($input->mitigasi_peta_kapasitas == 'memiliki') echo 'checked'; ?>> Memiliki </input>
                                                <input type="radio" value="tidak memiliki" name="mitigasi_peta_kapasitas" <?php if($input->mitigasi_peta_kapasitas == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="33"><li>Peta/pemetaan kelompok rentan per kecamatan di kabupaten/kota</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="mitigasi_peta_kelompok_rentan" <?php if($input->mitigasi_peta_kelompok_rentan == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="mitigasi_peta_kelompok_rentan" <?php if($input->mitigasi_peta_kelompok_rentan == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="34"><li>Peta/pemetaan jenis ancaman bencana per kecamatan di kabupaten/kota</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="mitigasi_peta_ancaman" <?php if($input->mitigasi_peta_ancaman == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="mitigasi_peta_ancaman" <?php if($input->mitigasi_peta_ancaman == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>c. Anggaran pengurangan risiko kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="35"><li>Dinas Kesehatan mengalokasikan anggaran kegiatan pengurangan risiko Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya" name="mitigasi_alokasi_anggaran" <?php if($input->mitigasi_alokasi_anggaran == 'ya') echo 'checked'; ?>> Ya</input>
                                                <input type="radio" value="tidak" name="mitigasi_alokasi_anggaran" <?php if($input->mitigasi_alokasi_anggaran == 'tidak') echo 'checked'; ?>> Tidak</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>d. Sistem Informasi</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="36"><li>Data kejadian Krisis Kesehatah 5 tahun terakhir</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_data_kejadian" <?php if($input->mitigasi_data_kejadian == 'ada') echo 'checked'; ?>> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_data_kejadian" <?php if($input->mitigasi_data_kejadian == 'tidak ada') echo 'checked'; ?>> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="37"><li>Daftar kontak person lintas program dan lintas sektor terkait Penanggulangan Krisis Kesehatan Akibat Bencana baik di tingkat Kabupaten/Kota maupun Provinsi</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_kontak_person" <?php if($input->mitigasi_kontak_person == 'ada') echo 'checked'; ?>> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_kontak_person" <?php if($input->mitigasi_kontak_person == 'tidak ada') echo 'checked'; ?>> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="38"><li>Media informasi yang dapat diakses oleh seluruh masyarakat untuk meningkatkan kesadaran dalam kesiapsiagaan bencana</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_media_informasi" <?php if($input->mitigasi_media_informasi == 'ada') echo 'checked'; ?>> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_media_informasi" <?php if($input->mitigasi_media_informasi == 'tidak ada') echo 'checked'; ?>> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="39"><li>Sarana pengumpulan, pengelolaan data dan penyampaian informasi terkait Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_sarana_pengumpulan_data" <?php if($input->mitigasi_sarana_pengumpulan_data == 'ada') echo 'checked'; ?>> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_sarana_pengumpulan_data" <?php if($input->mitigasi_sarana_pengumpulan_data == 'tidak ada') echo 'checked'; ?>> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="40"><li>Sistem Pemantauan 24 jam</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_sistem_pemantauan" <?php if($input->mitigasi_sistem_pemantauan == 'ada') echo 'checked'; ?>> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_sistem_pemantauan" <?php if($input->mitigasi_sistem_pemantauan == 'tidak ada') echo 'checked'; ?>> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Kesiapsiagaan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>a. Rencana Penanggulangan Krisis Kesehatan dan standard operating procedure</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="41"><li>Dinas Kesehatan menyusun rencana kontijensi bidang kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_menyusun_rencana" <?php if($input->kesiapsiaga_menyusun_rencana == 'ada') echo 'checked'; ?>> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_menyusun_rencana" <?php if($input->kesiapsiaga_menyusun_rencana == 'tidak ada') echo 'checked'; ?>> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="42"><li>Dinas Kesehatan melakukan TTX, Simulasi, Geladi Bencana Bidang Kesehatan berdasarkan rencana kontijensi yang disusun</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="kesiapsiaga_melakukan_simulasi" <?php if($input->kesiapsiaga_melakukan_simulasi == 'melakukan') echo 'checked'; ?>> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="kesiapsiaga_melakukan_simulasi" <?php if($input->kesiapsiaga_melakukan_simulasi == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="43"><li>SOP Penanganan Korban Bencana di Lapangan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_sop_penaganan" <?php if($input->kesiapsiaga_sop_penaganan == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_penaganan" <?php if($input->kesiapsiaga_sop_penaganan == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="44"><li>SOP Pengelolaan obat dan logistik kesehatan bencana</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_sop_obat" <?php if($input->kesiapsiaga_sop_obat == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_obat" <?php if($input->kesiapsiaga_sop_obat == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="45"><li>SOP pengelolaan bantuan relawan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_sop_bantuan_relawan" <?php if($input->kesiapsiaga_sop_bantuan_relawan == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_bantuan_relawan" <?php if($input->kesiapsiaga_sop_bantuan_relawan == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="46"><li>SOP pemantauan kejadian Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_sop_pemantauan" <?php if($input->kesiapsiaga_sop_pemantauan == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_pemantauan" <?php if($input->kesiapsiaga_sop_pemantauan == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="47"><li>SOP pelaporan Kejadian Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_sop_pelaporan" <?php if($input->kesiapsiaga_sop_pelaporan == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_pelaporan" <?php if($input->kesiapsiaga_sop_pelaporan == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="48"><li>SOP sistem rujukan pada kondisi bencana</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_sop_pelayanan_rujukan" <?php if($input->kesiapsiaga_sop_pelayanan_rujukan == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_pelayanan_rujukan" <?php if($input->kesiapsiaga_sop_pelayanan_rujukan == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="49"><li>SOP Pelayanan Kesehatan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_sop_pelayanan_kesehatan" <?php if($input->kesiapsiaga_sop_pelayanan_kesehatan == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_pelayanan_kesehatan" <?php if($input->kesiapsiaga_sop_pelayanan_kesehatan == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>b. Pembiayaan Tanggap Darurat Krisis Kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="50"><li>Dinas Kesehatan memahami penggunaan Dana Tak Terduga di BPBD</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya" name="kesiapsiaga_dana_tak_terduga" <?php if($input->kesiapsiaga_dana_tak_terduga == 'ya') echo 'checked'; ?>> Ya</input>
                                                <input type="radio" value="tidak" name="kesiapsiaga_dana_tak_terduga" <?php if($input->kesiapsiaga_dana_tak_terduga == 'tidak') echo 'checked'; ?>> Tidak </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="51"><li>Dinas Kesehatan memahami DSP di BNPB</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya" name="kesiapsiaga_paham_dsp_bnpb" <?php if($input->kesiapsiaga_paham_dsp_bnpb == 'ya') echo 'checked'; ?>> Ya</input>
                                                <input type="radio" value="tidak" name="kesiapsiaga_paham_dsp_bnpb" <?php if($input->kesiapsiaga_paham_dsp_bnpb == 'tidak') echo 'checked'; ?>> Tidak </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>c. Sarana prasarana PKK</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="52"><li>Sarana prasarana Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_sarana" <?php if($input->kesiapsiaga_sarana == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_sarana" <?php if($input->kesiapsiaga_sarana == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="53"><li>Penyediaan sarana prasarana telah menyesuaikan dengan jenis ancaman bencana di wilayahnya</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya" name="kesiapsiaga_sesuai_sarana" <?php if($input->kesiapsiaga_sesuai_sarana == 'ya') echo 'checked'; ?>> Ya</input>
                                                <input type="radio" value="tidak" name="kesiapsiaga_sesuai_sarana" <?php if($input->kesiapsiaga_sesuai_sarana == 'tidak') echo 'checked'; ?>> Tidak</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="54"><li>Saran prasarana telah mencukupi</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya" name="kesiapsiaga_kecukupan_sarana" <?php if($input->kesiapsiaga_kecukupan_sarana == 'ya') echo 'checked'; ?>> Ya</input>
                                                <input type="radio" value="tidak" name="kesiapsiaga_kecukupan_sarana" <?php if($input->kesiapsiaga_kecukupan_sarana == 'tidak') echo 'checked'; ?>> Tidak</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>d. Public Safety Centre</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="55"><li>Pemerintah memiliki PSC 24 jam</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_psc_24jam" <?php if($input->kesiapsiaga_psc_24jam == 'memiliki') echo 'checked'; ?>> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_psc_24jam" <?php if($input->kesiapsiaga_psc_24jam == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki</input>
                                            </fieldset></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= base_url('kuesioner_kajian_resikos') ?>" class="btn btn-dark">Kembali</a>
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
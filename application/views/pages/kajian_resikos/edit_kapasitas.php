<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">EDIT KAPASITAS KAJIAN RISIKO KRISIS KESEHATAN PROVINSI</h4>
                    <form action="<?= base_url("kapasitas_kajian_resikos/edit/$input->id") ?>" method="POST">
                        <?= form_hidden('id_kajian_resiko_provinsi', $input->id_kajian_resiko_provinsi) ?>
                        <div class="form-body">
                            <div class="row mb-3">
                                <div class="col-lg-12">V. Kapasitas</div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm table-style-border" >
                                    <thead>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Indikator</th>
                                        <th class="text-center" style="min-width: 250px;">Pencapaian</th>
                                    </thead>
                                    <tbody>
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
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kebijakan_peraturan" <?php if($input->kebijakan_peraturan == 'ada') echo 'checked'; ?>> Ada </label>
                                                    <label><input type="radio" value="tidak ada" name="kebijakan_peraturan" <?php if($input->kebijakan_peraturan == 'tidak ada') echo 'checked'; ?>> Tidak Ada</label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="2"><li>Peraturan/SK Kadinkes terkait penanggulangan bencana/Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kebijakan_sk" <?php if($input->kebijakan_sk == 'ada') echo 'checked'; ?>> Ada </label>
                                                    <label><input type="radio" value="tidak ada" name="kebijakan_sk" <?php if($input->kebijakan_sk == 'tidak ada') echo 'checked'; ?>> Tidak Ada</label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="3"><li>Tersedia/SOP Mekanisme Koordinasi Terkait PKK</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kebijakan_sop" <?php if($input->kebijakan_sop == 'ada') echo 'checked'; ?>> Ada </label>
                                                    <label><input type="radio" value="tidak ada" name="kebijakan_sop" <?php if($input->kebijakan_sop == 'tidak ada') echo 'checked'; ?>> Tidak Ada</label>
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
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="rutin" name="kebijakan_koordinasi" <?php if($input->kebijakan_koordinasi == 'rutin') echo 'checked'; ?>> Rutin, walau tidak terjadi bencana </label>
                                                    <label><input type="radio" value="sewaktu-waktu" name="kebijakan_koordinasi" <?php if($input->kebijakan_koordinasi == 'sewaktu-waktu') echo 'checked'; ?>> Sewaktu-waktu bila ada kejadian bencana/krisis kesehatan </label>
                                                    <label><input type="radio" value="tidak pernah" name="kebijakan_koordinasi" <?php if($input->kebijakan_koordinasi == 'tidak pernah') echo 'checked'; ?>> Tidak Pernah </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="5"><li>Unit di Dinkes Kesehatan yang memiliki tugas mengkoordinasikan upaya Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kebijakan_unit" <?php if($input->kebijakan_unit == 'ada') echo 'checked'; ?>> Ada, yaitu Bidang ..... </label>
                                                    <label><input type="radio" value="tidak ada" name="kebijakan_unit" <?php if($input->kebijakan_unit == 'tidak ada') echo 'checked'; ?>> Tidak ada, sehingga bila terjadi krisis kesehatan yang melaksanakan adalah ........</label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="6"><li>SK Klaster Kesehatan Provinsi</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kebijakan_sk_klaster" <?php if($input->kebijakan_sk_klaster == 'ada') echo 'checked'; ?>> Ada </label>
                                                    <label><input type="radio" value="tidak ada" name="kebijakan_sk_klaster" <?php if($input->kebijakan_sk_klaster == 'tidak ada') echo 'checked'; ?>> Tidak </label>
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
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ya" name="kebijakan_dinas_identifikasi" <?php if($input->kebijakan_dinas_identifikasi == 'ya') echo 'checked'; ?>> Ya </label>
                                                    <label><input type="radio" value="tidak" name="kebijakan_dinas_identifikasi" <?php if($input->kebijakan_dinas_identifikasi == 'tidak') echo 'checked'; ?>> Tidak </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="8"><li>Dinas Kesehatan pernah mengadakan MoU dengan LSM/Instansi/Lembaga non pemerintah dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ya" name="kebijakan_dinas_mou_lembaga" <?php if($input->kebijakan_dinas_mou_lembaga == 'ya') echo 'checked'; ?>> Ya </label>
                                                    <label><input type="radio" value="tidak" name="kebijakan_dinas_mou_lembaga" <?php if($input->kebijakan_dinas_mou_lembaga == 'tidak') echo 'checked'; ?>> Tidak </label>
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
                                            <td><ol start="9"><li>Pembinaan teknis/pendampingan kabupaten/kota dalam melakukan penilaian risiko fasilitas pelayanan kesehatan yang aman terhadap berbagai ancaman bencana yang terjadi di eilayah tersebut</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="melakukan" name="penguatan_bina_teknis" <?php if($input->penguatan_bina_teknis == 'melakukan') echo 'checked'; ?>> Melakukan </label>
                                                    <label><input type="radio" value="tidak melakukan" name="penguatan_bina_teknis" <?php if($input->penguatan_bina_teknis == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>b. Sumber daya manusia</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="10"><li>Ketenagaan pada unit yang mengkoordinir upaya Penanggulangan Krisis Kesehatan di Dinas Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="penguatan_sdm" <?php if($input->penguatan_sdm == 'ada') echo 'checked'; ?>> Ada, dengan latar belakang pendidikan .... </label>
                                                    <label><input type="radio" value="tidak ada" name="penguatan_sdm" <?php if($input->penguatan_sdm == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="11"><li>Tim RHA</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="memiliki" name="penguatan_tim_rha" <?php if($input->penguatan_tim_rha == 'memiliki') echo 'checked'; ?>> Memiliki</label>
                                                    <label><input type="radio" value="tidak memiliki" name="penguatan_tim_rha" <?php if($input->penguatan_tim_rha == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="12"><li>PHRRT</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="memiliki" name="penguatan_phrrt" <?php if($input->penguatan_phrrt == 'memiliki') echo 'checked'; ?>> Memiliki</label>
                                                    <label><input type="radio" value="tidak memiliki" name="penguatan_phrrt" <?php if($input->penguatan_phrrt == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="13"><li>EMT</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="memiliki" name="penguatan_emt" <?php if($input->penguatan_emt == 'memiliki') echo 'checked'; ?>> Memiliki</label>
                                                    <label><input type="radio" value="tidak memiliki" name="penguatan_emt" <?php if($input->penguatan_emt == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="14"><li>SOP mekanisme mobilitasi tim RHA/EMT/PHRRT saat bencana</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="penguatan_sop" <?php if($input->penguatan_sop == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="penguatan_sop" <?php if($input->penguatan_sop == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="15"><li>Petugas yang terlatih terkait manajemen Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="memiliki" name="penguatan_petugas_managemen" <?php if($input->penguatan_petugas_managemen == 'memiliki') echo 'checked'; ?>> Memiliki</label>
                                                    <label><input type="radio" value="tidak memiliki" name="penguatan_petugas_managemen" <?php if($input->penguatan_petugas_managemen == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="16"><li>Petugas yang terlatih terkait teknis medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="memiliki" name="penguatan_petugas_medis" <?php if($input->penguatan_petugas_medis == 'memiliki') echo 'checked'; ?>> Memiliki</label>
                                                    <label><input type="radio" value="tidak memiliki" name="penguatan_petugas_medis" <?php if($input->penguatan_petugas_medis == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="17"><li>Petugas yang terlatih terkait teknis non medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="memiliki" name="penguatan_petugas_non_medis" <?php if($input->penguatan_petugas_non_medis == 'memiliki') echo 'checked'; ?>> Memiliki</label>
                                                    <label><input type="radio" value="tidak memiliki" name="penguatan_petugas_non_medis" <?php if($input->penguatan_petugas_non_medis == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="18"><li>Memetakan/mengidentifikasi Petugas Kesehatan di wilayahnya yang siap untuk dimobilisasi pada kondisi bencana</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="melakukan" name="penguatan_memetakan_petugas" <?php if($input->penguatan_memetakan_petugas == 'melakukan') echo 'checked'; ?>> Melakukan</label>
                                                    <label><input type="radio" value="tidak melakukan" name="penguatan_memetakan_petugas" <?php if($input->penguatan_memetakan_petugas == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="19"><li>Perencanaan peningkatan kapasitas SDM terkait PKK yang rutin dan berkesinambungan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="melakukan" name="penguatan_peningkatan" <?php if($input->penguatan_peningkatan == 'melakukan') echo 'checked'; ?>> Melakukan</label>
                                                    <label><input type="radio" value="tidak melakukan" name="penguatan_peningkatan" <?php if($input->penguatan_peningkatan == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td>3. </td>
                                            <td>Peringatan Dini</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="20"><li>Sosialisasi/peningkatan kapasitas pada kabupaten/kota tentang sistem Peringatan Dini</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="melakukan" name="peringatan_sosialisasi" <?php if($input->peringatan_sosialisasi == 'melakukan') echo 'checked'; ?>> Melakukan</label>
                                                    <label><input type="radio" value="tidak melakukan" name="peringatan_sosialisasi" <?php if($input->peringatan_sosialisasi == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="21"><li>Memetakan ketersediaan sistem Peringatan dini di kabupaten /kota yang menjadi wilayahnya</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="melakukan" name="peringatan_sistem" <?php if($input->peringatan_sistem == 'melakukan') echo 'checked'; ?>> Melakukan</label>
                                                    <label><input type="radio" value="tidak melakukan" name="peringatan_sistem" <?php if($input->peringatan_sistem == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </label>
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
                                            <td><ol start="22"><li>Pembinaan teknis dan pendampingannya dalam rangka pemberdayaan masyarakat dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="melakukan" name="mitigasi_bina_teknis" <?php if($input->mitigasi_bina_teknis == 'melakukan') echo 'checked'; ?>> Melakukan</label>
                                                    <label><input type="radio" value="tidak melakukan" name="mitigasi_bina_teknis" <?php if($input->mitigasi_bina_teknis == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="23"><li>Peningkatan kapasitas terkait pemberdayaan masyarakat dalam Penanggulangan Krisis Kesehatan bagi aparatur provinsi dan kabupaten/kota</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="melakukan" name="mitigasi_peningkatan" <?php if($input->mitigasi_peningkatan == 'melakukan') echo 'checked'; ?>> Melakukan</label>
                                                    <label><input type="radio" value="tidak melakukan" name="mitigasi_peningkatan" <?php if($input->mitigasi_peningkatan == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>b. Kapasitas untuk memetakan risiko Krisis Kesehatan</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="24"><li>Peta/pemetaan kapasitas atau data kapasitas sumber daya yang dapat digunakan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="mitigasi_peta_sdm" <?php if($input->mitigasi_peta_sdm == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="mitigasi_peta_sdm" <?php if($input->mitigasi_peta_sdm == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="25"><li>Peta/ pemetaan kelompok rentan per kabupaten kota</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="mitigasi_peta_kelompok_rentan" <?php if($input->mitigasi_peta_kelompok_rentan == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="mitigasi_peta_kelompok_rentan" <?php if($input->mitigasi_peta_kelompok_rentan == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="26"><li>Peta/ pemetaan jenis ancaman bencana per kabupaten/kota</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="mitigasi_peta_ancaman" <?php if($input->mitigasi_peta_ancaman == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="mitigasi_peta_ancaman" <?php if($input->mitigasi_peta_ancaman == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>c. Anggaran pengurangan risiko kesehatan</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="27"><li>Dinas Kesehatan mengalokasikan anggaran kegiatan pengurangan risiko Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="mitigasi_alokasi_anggaran" <?php if($input->mitigasi_alokasi_anggaran == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="mitigasi_alokasi_anggaran" <?php if($input->mitigasi_alokasi_anggaran == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>d. Sistem Informasi</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="28"><li>Data kejadian Krisis Kesehatah 5 tahun terakhir</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="mitigasi_data_kejadian" <?php if($input->mitigasi_data_kejadian == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="mitigasi_data_kejadian" <?php if($input->mitigasi_data_kejadian == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="29"><li>Daftar kontak person lintas program dan lintas sektor terkait Penanggulangan Krisis Kesehatan Akibat Bencana baik di tingkat Kabupaten/Kota maupun Provinsi</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="mitigasi_kontak_person" <?php if($input->mitigasi_kontak_person == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="mitigasi_kontak_person" <?php if($input->mitigasi_kontak_person == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="30"><li>Media informasi yang dapat diakses oleh seluruh masyarakat untuk meningkatkan kesadaran dalam kesiapsiagaan bencana</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="mitigasi_media_informasi" <?php if($input->mitigasi_media_informasi == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="mitigasi_media_informasi" <?php if($input->mitigasi_media_informasi == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="31"><li>Sarana pengumpulan, pengelolaan data dan penyampaian informasi terkait Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="mitigasi_sarana_pengumpulan_data" <?php if($input->mitigasi_sarana_pengumpulan_data == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="mitigasi_sarana_pengumpulan_data" <?php if($input->mitigasi_sarana_pengumpulan_data == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="32"><li>Sistem Pemantauan 24 jam</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="mitigasi_sistem_pemantauan" <?php if($input->mitigasi_sistem_pemantauan == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="mitigasi_sistem_pemantauan" <?php if($input->mitigasi_sistem_pemantauan == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
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
                                            <td><ol start="33"><li>Memfasilitasi/mendukung/mengadvokasi Dinkes kabupaten/kota untuk melakukan penyusunan Rencana Kontijensi Bidang Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="melakukan" name="kesiapsiaga_fasilitas" <?php if($input->kesiapsiaga_fasilitas == 'melakukan') echo 'checked'; ?>> Melakukan</label>
                                                    <label><input type="radio" value="tidak melakukan" name="kesiapsiaga_fasilitas" <?php if($input->kesiapsiaga_fasilitas == 'tidak melakukan') echo 'checked'; ?>> Tidak Melakukan </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="34"><li>Memiliki Dokumen renkon bidang kesehatan untuk bencana tingkat provinsi</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kesiapsiaga_dok_rekon" <?php if($input->kesiapsiaga_dok_rekon == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="kesiapsiaga_dok_rekon" <?php if($input->kesiapsiaga_dok_rekon == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="35"><li>SOP Pengelolaan obat dan logistik kesehatan bencana</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kesiapsiaga_sop_obat" <?php if($input->kesiapsiaga_sop_obat == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="kesiapsiaga_sop_obat" <?php if($input->kesiapsiaga_sop_obat == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="36"><li>SOP pengelolaan bantuan relawan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kesiapsiaga_sop_bantuan_relawan" <?php if($input->kesiapsiaga_sop_bantuan_relawan == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="kesiapsiaga_sop_bantuan_relawan" <?php if($input->kesiapsiaga_sop_bantuan_relawan == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="37"><li>SOP pemantauan kejadian Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kesiapsiaga_sop_pemantauan" <?php if($input->kesiapsiaga_sop_pemantauan == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="kesiapsiaga_sop_pemantauan" <?php if($input->kesiapsiaga_sop_pemantauan == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="38"><li>SOP plaporan Kejadian Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kesiapsiaga_sop_pelaporan" <?php if($input->kesiapsiaga_sop_pelaporan == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="kesiapsiaga_sop_pelaporan" <?php if($input->kesiapsiaga_sop_pelaporan == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="39"><li>SOP Pelayanan rujukan (praRS-RS)</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kesiapsiaga_sop_pelayanan_rujukan" <?php if($input->kesiapsiaga_sop_pelayanan_rujukan == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="kesiapsiaga_sop_pelayanan_rujukan" <?php if($input->kesiapsiaga_sop_pelayanan_rujukan == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="40"><li>SOP Pelayanan Kesehatan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kesiapsiaga_sop_pelayanan_kesehatan" <?php if($input->kesiapsiaga_sop_pelayanan_kesehatan == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="kesiapsiaga_sop_pelayanan_kesehatan" <?php if($input->kesiapsiaga_sop_pelayanan_kesehatan == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>b. Pembiayaan Tanggap Darurat Krisis Kesehatan</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="41"><li>Dinas Kesehatan memahami penggunaan Dana Tak Terduga di BPBD</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kesiapsiaga_dana_tak_terduga" <?php if($input->kesiapsiaga_dana_tak_terduga == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="kesiapsiaga_dana_tak_terduga" <?php if($input->kesiapsiaga_dana_tak_terduga == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="42"><li>Dinas Kesehatan memahami DSP di BNPB</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ada" name="kesiapsiaga_paham_dsp_bnpb" <?php if($input->kesiapsiaga_paham_dsp_bnpb == 'ada') echo 'checked'; ?>> Ada</label>
                                                    <label><input type="radio" value="tidak ada" name="kesiapsiaga_paham_dsp_bnpb" <?php if($input->kesiapsiaga_paham_dsp_bnpb == 'tidak ada') echo 'checked'; ?>> Tidak Ada </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>c. Sarana prasarana PKK</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="43"><li>Sarana prasarana khusus untuk Penanggulangan Kesehatan</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="memiliki" name="kesiapsiaga_sarana_khusus" <?php if($input->kesiapsiaga_sarana_khusus == 'memiliki') echo 'checked'; ?>> Memiliki</label>
                                                    <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_sarana_khusus" <?php if($input->kesiapsiaga_sarana_khusus == 'tidak memiliki') echo 'checked'; ?>> Tidak Memiliki </label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="44"><li>Penyediaan sarana prasarana telah menyesuaikan dengan jenis ancaman bencana di wilayahnya</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ya" name="kesiapsiaga_sesuai_sarana" <?php if($input->kesiapsiaga_sesuai_sarana == 'ya') echo 'checked'; ?>> Ya</label>
                                                    <label><input type="radio" value="tidak" name="kesiapsiaga_sesuai_sarana" <?php if($input->kesiapsiaga_sesuai_sarana == 'tidak') echo 'checked'; ?>> Tidak</label>
                                                </fieldset></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="45"><li>Saran prasarana telah mencukupi</li></ol></td>
                                            <td><fieldset class="d-flex flex-column gap-2">
                                                    <label><input type="radio" value="ya" name="kesiapsiaga_kecukupan_sarana" <?php if($input->kesiapsiaga_kecukupan_sarana == 'ya') echo 'checked'; ?>> Ya</label>
                                                    <label><input type="radio" value="tidak" name="kesiapsiaga_kecukupan_sarana" <?php if($input->kesiapsiaga_kecukupan_sarana == 'tidak') echo 'checked'; ?>> Tidak</label>
                                                </fieldset></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="<?= base_url('kajian_resikos') ?>" class="btn btn-dark">Kembali</a>
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
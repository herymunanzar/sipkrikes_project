<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">INPUT KUESIONER KAPASITAS KAJIAN RISIKO KRISIS KESEHATAN KABUPATEN / KOTA</h4>
                    <form action="<?= base_url("kapasitas_kuesioner_kajian_resikos/input_kapasitas/$id") ?>" method="POST">
                        <?= form_hidden('id_kuesioner_kajian_resiko_kabkot', $id) ?>
                        <div class="form-body">
                            <div class="form-group">
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
                                                <td><ol start="1"><li>peraturan yang dibuat pemerintah provinsi terkait penanggulangan bencana / Krisis Kesehatan</li><ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2" require>
                                                        <label><input type="radio" value="ada" name="kebijakan_peraturan"> Ada </label>
                                                        <label><input type="radio" value="tidak ada" name="kebijakan_peraturan" checked> Tidak Ada</label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="2"><li>Peraturan/SK Kadinkes terkait penanggulangan bencana/Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="kebijakan_sk"> Ada </label>
                                                        <label><input type="radio" value="tidak ada" name="kebijakan_sk" checked> Tidak Ada</label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="3"><li>Tersedia/SOP Mekanisme Koordinasi Terkait PKK</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="kebijakan_sop"> Ada </label>
                                                        <label><input type="radio" value="tidak ada" name="kebijakan_sop" checked> Tidak Ada</label>
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
                                                        <label><input type="radio" value="rutin" name="kebijakan_koordinasi"> Rutin, walau tidak terjadi bencana </label>
                                                        <label><input type="radio" value="sewaktu-waktu" name="kebijakan_koordinasi"> Sewaktu-waktu bila ada kejadian bencana/krisis kesehatan </label>
                                                        <label><input type="radio" value="tidak pernah" name="kebijakan_koordinasi" checked> Tidak Pernah </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="5"><li>Unit di Dinkes Kesehatan yang memiliki tugas mengkoordinasikan upaya Penanggulangan Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="kebijakan_unit"> Ada, yaitu Bidang ..... </label>
                                                        <label><input type="radio" value="tidak ada" name="kebijakan_unit" checked> Tidak ada, sehingga bila terjadi krisis kesehatan yang melaksanakan adalah ........</label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="6"><li>SK Klaster Kesehatan Provinsi</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="kebijakan_sk_klaster"> Ada </label>
                                                        <label><input type="radio" value="tidak ada" name="kebijakan_sk_klaster" checked> Tidak </label>
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
                                                        <label><input type="radio" value="melakukan" name="kebijakan_dinas_identifikasi"> Melakukan </label>
                                                        <label><input type="radio" value="tidak melakukan" name="kebijakan_dinas_identifikasi" checked> Tidak Melakukan </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="8"><li>Dinas Kesehatan pernah mengadakan MoU dengan LSM/Instansi/Lembaga non pemerintah dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ya" name="kebijakan_dinas_mou_lembaga"> Ya </label>
                                                        <label><input type="radio" value="tidak" name="kebijakan_dinas_mou_lembaga" checked> Tidak </label>
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
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="penguatan_dinkes_memiliki_program"> Memiliki </label>
                                                        <label><input type="radio" value="tidak memiliki" name="penguatan_dinkes_memiliki_program" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="15"><li>Dinkes memfasilitasi upaya penilaian risiko fasyankes terhadap berbagai ancaman yang terjadi di wilayah tersebut </li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ya, sebagian atau seluruh" name="penguatan_dinkes_memfasilitasi"> Ya, sebagian /seluruh fasyankes telah dilakukan penilaian risiko</label>
                                                        <label><input type="radio" value="ya, sebagian kecil" name="penguatan_dinkes_memfasilitasi"> Ya, sebagian kecil fasyankes telah dilakukan penilaian risiko</label>
                                                        <label><input type="radio" value="belum ada" name="penguatan_dinkes_memfasilitasi" checked> Belum ada sama sekali </label>
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
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="penguatan_ketenagaan_unit"> Ada, dengan latar belakang pendidikan .... </label>
                                                        <label><input type="radio" value="tidak ada" name="penguatan_ketenagaan_unit" checked> Tidak Ada </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="21"><li>Kepemilikan Tim RHA</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="penguatan_tim_rha"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="penguatan_tim_rha" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="22"><li>Kepemilikan Tim Penyelidikan Epidemiologi</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="penguatan_tim_penyelidikan_epidemiologi"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="penguatan_tim_penyelidikan_epidemiologi" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="23"><li>Kepemilikan Tim Reaksi Cepat/ Tim Gerak Cepat/ Emergency Medical Team/ PHRRT</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="penguatan_tim_reaksi_cepat"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="penguatan_tim_reaksi_cepat" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="24"><li>Dinkes Kab/kota telah memetakan / mengidentifikasi tenaga kesehatan yang siap untuk dimobilisasi pada saat bencana</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="melakukan" name="penguatan_memetakan_petugas"> Melakukan</label>
                                                        <label><input type="radio" value="tidak melakukan" name="penguatan_memetakan_petugas" checked> Tidak Melakukan </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="25"><li>SOP mekanisme mobilitas tim PKK</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="penguatan_sop"> Ada</label>
                                                        <label><input type="radio" value="tidak ada" name="penguatan_sop" checked> Tidak Ada</label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="26"><li>Memiliki petugas yang terlatih manajemen Penanggulangan Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="penguatan_petugas_managemen"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="penguatan_petugas_managemen" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="27"><li>Memiliki petugas yang terlatih teknis medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="penguatan_petugas_medis"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="penguatan_petugas_medis" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="28"><li>Memiliki petugas yang terlatih teknis non medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="penguatan_petugas_non_medis"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="penguatan_petugas_non_medis" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="29"><li> Perencanaan peningkatan kapasitas SDM terkait PKK yang rutin dan berkesinambungan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="penguatan_peningkatan">Ada</label>
                                                        <label><input type="radio" value="tidak ada" name="penguatan_peningkatan" checked>Tidak Ada</label>
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
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ya, sebagian atau seluruh" name="peringatan_sistem"> Ya, sebagian / seluruh ancaman bencana sudah ada sistem peringatan dininya</label>
                                                        <label><input type="radio" value="ya, sebagian kecil" name="peringatan_sistem"> Ya, tapi hanya sebagian kecil ancaman bencana yang ada sistem peringatan dininya</label>
                                                        <label><input type="radio" value="tidak ada" name="peringatan_sistem" checked> Tidak Ada </label>
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
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="melakukan" name="mitigasi_fasilitas_kepada_masyarakat"> Melakukan</label>
                                                        <label><input type="radio" value="tidak melakukan" name="mitigasi_fasilitas_kepada_masyarakat" checked> Tidak Melakukan </label>
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
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="mitigasi_peta_kapasitas"> Memiliki </label>
                                                        <label><input type="radio" value="tidak memiliki" name="mitigasi_peta_kapasitas" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="33"><li> Peta/pemetaan kelompok rentan per kecamatan di kabupaten/kota</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="mitigasi_peta_kelompok_rentan"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="mitigasi_peta_kelompok_rentan" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="34"><li> Peta/pemetaan jenis ancaman bencana per kecamatan di kabupaten/kota</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="mitigasi_peta_ancaman"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="mitigasi_peta_ancaman" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>c. Anggaran pengurangan risiko kesehatan</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="35"><li>Dinas kesehatan mengalokasikan anggaran kegiatan pengurangan risiko Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ya" name="mitigasi_alokasi_anggaran"> Ya</label>
                                                        <label><input type="radio" value="tidak" name="mitigasi_alokasi_anggaran" checked> Tidak </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>d. Sistem Informasi</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="36"><li>Data kejadia Krisis Kesehatan 5 tahun terakhir</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="mitigasi_data_kejadian"> Ada</label>
                                                        <label><input type="radio" value="tidak ada" name="mitigasi_data_kejadian" checked> Tidak Ada </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="37"><li>Daftar kontak person lintas program dan lintas sektor terkait Penanggulangan Krisis Kesehatan Akibat Bencana baik di tingkat Kabupaten maupun Provinsi</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="mitigasi_kontak_person"> Ada</label>
                                                        <label><input type="radio" value="tidak ada" name="mitigasi_kontak_person" checked> Tidak Ada </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="38"><li>Media informasi yang dapat diakses oleh seluruh masyarakat untuk meningkatkan kesadaran dalam kesiapsiagaan bencana</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="mitigasi_media_informasi"> Ada</label>
                                                        <label><input type="radio" value="tidak ada" name="mitigasi_media_informasi" checked> Tidak Ada </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="39"><li>Sarana pengumpulan, pengelolaan data dan penyampaian informasi terkait Penanggulangan Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="mitigasi_sarana_pengumpulan_data"> Ada</label>
                                                        <label><input type="radio" value="tidak ada" name="mitigasi_sarana_pengumpulan_data" checked> Tidak Ada </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="40"><li>Sistem Pemantauan 24 jam</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="mitigasi_sistem_pemantauan"> Ada</label>
                                                        <label><input type="radio" value="tidak ada" name="mitigasi_sistem_pemantauan" checked> Tidak Ada </label>
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
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ada" name="kesiapsiaga_menyusun_rencana"> Ada</label>
                                                        <label><input type="radio" value="tidak ada" name="kesiapsiaga_menyusun_rencana" checked> Tidak Ada </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="42"><li>Dinas Kesehatan melakukan TTX, Simulasi, Geladi Bencana Bidang Kesehatan berdasarkan rencana kontijensi yang disusun</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="melakukan" name="kesiapsiaga_melakukan_simulasi"> Melakukan</label>
                                                        <label><input type="radio" value="tidak melakukan" name="kesiapsiaga_melakukan_simulasi" checked> Tidak Melakukan </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="43"><li>SOP Penanganan Korban Bencana di Lapangan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="kesiapsiaga_sop_penaganan"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_penaganan" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="44"><li>SOP Pengelolaan obat dan logistik kesehatan bencana</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="kesiapsiaga_sop_obat"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_obat" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="45"><li>SOP pengelolaan bantuan relawan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="kesiapsiaga_sop_bantuan_relawan"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_bantuan_relawan" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="46"><li>SOP pemantauan kejadian Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="kesiapsiaga_sop_pemantauan"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_pemantauan" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="47"><li>SOP pelaporan Kejadian Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="kesiapsiaga_sop_pelaporan"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_pelaporan" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="48"><li>SOP sistem rujukan pada kondisi bencana</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="kesiapsiaga_sop_pelayanan_rujukan"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_pelayanan_rujukan" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="49"><li>SOP Pelayanan Kesehatan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="kesiapsiaga_sop_pelayanan_kesehatan"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_sop_pelayanan_kesehatan" checked> Tidak Memiliki </label>
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
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ya" name="kesiapsiaga_dana_tak_terduga"> Ya</label>
                                                        <label><input type="radio" value="tidak" name="kesiapsiaga_dana_tak_terduga" checked> Tidak</label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="51"><li>Dinas Kesehatan memahami DSP di BNPB</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ya" name="kesiapsiaga_paham_dsp_bnpb"> Ya</label>
                                                        <label><input type="radio" value="tidak" name="kesiapsiaga_paham_dsp_bnpb" checked> Tidak</label>
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
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="kesiapsiaga_sarana"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_sarana" checked> Tidak Memiliki </label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="53"><li>Penyediaan sarana prasarana telah menyesuaikan dengan jenis ancaman bencana di wilayahnya</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ya" name="kesiapsiaga_sesuai_sarana"> Ya</label>
                                                        <label><input type="radio" value="tidak" name="kesiapsiaga_sesuai_sarana" checked> Tidak</label>
                                                    </fieldset></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><ol start="54"><li>Saran prasarana telah mencukupi</li></ol></td>
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="ya" name="kesiapsiaga_kecukupan_sarana"> Ya</label>
                                                        <label><input type="radio" value="tidak" name="kesiapsiaga_kecukupan_sarana" checked> Tidak</label>
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
                                                <td><fieldset class="d-flex flex-column gap-2">
                                                        <label><input type="radio" value="memiliki" name="kesiapsiaga_psc_24jam"> Memiliki</label>
                                                        <label><input type="radio" value="tidak memiliki" name="kesiapsiaga_psc_24jam" checked> Tidak Memiliki</label>
                                                    </fieldset></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
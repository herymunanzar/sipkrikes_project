<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">INPUT KAPASITAS KAJIAN RISIKO KRISIS KESEHATAN PROVINSI</h4>
                    <form action="<?= base_url("kapasitas_kajian_resikos/input_kapasitas/$id") ?>" method="POST">
                        <?= form_hidden('id_kajian_resiko_provinsi', $id) ?>
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
                                        <td><fieldset id="group1" require>
                                                <input type="radio" value="ada" name="kebijakan_peraturan"> Ada </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_peraturan" checked> Tidak Ada</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="2"><li>Peraturan/SK Kadinkes terkait penanggulangan bencana/Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kebijakan_sk"> Ada </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_sk" checked> Tidak Ada</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="3"><li>Tersedia/SOP Mekanisme Koordinasi Terkait PKK</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kebijakan_sop"> Ada </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_sop" checked> Tidak Ada</input>
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
                                                <input type="radio" value="rutin" name="kebijakan_koordinasi"> Rutin, walau tidak terjadi bencana </input>
                                                <input type="radio" value="sewaktu-waktu" name="kebijakan_koordinasi"> Sewaktu-waktu bila ada kejadian bencana/krisis kesehatan </input>
                                                <input type="radio" value="tidak pernah" name="kebijakan_koordinasi" checked> Tidak Pernah </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="5"><li>Unit di Dinkes Kesehatan yang memiliki tugas mengkoordinasikan upaya Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kebijakan_unit"> Ada, yaitu Bidang ..... </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_unit" checked> Tidak ada, sehingga bila terjadi krisis kesehatan yang melaksanakan adalah ........</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="6"><li>SK Klaster Kesehatan Provinsi</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kebijakan_sk_klaster"> Ada </input>
                                                <input type="radio" value="tidak ada" name="kebijakan_sk_klaster" checked> Tidak </input>
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
                                                <input type="radio" value="ya" name="kebijakan_dinas_identifikasi"> Ya </input>
                                                <input type="radio" value="tidak" name="kebijakan_dinas_identifikasi" checked> Tidak </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="8"><li>Dinas Kesehatan pernah mengadakan MoU dengan LSM/Instansi/Lembaga non pemerintah dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya" name="kebijakan_dinas_mou_lembaga"> Ya </input>
                                                <input type="radio" value="tidak" name="kebijakan_dinas_mou_lembaga" checked> Tidak </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="penguatan_bina_teknis"> Melakukan </input>
                                                <input type="radio" value="tidak melakukan" name="penguatan_bina_teknis" checked> Tidak Melakukan </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="penguatan_sdm"> Ada, dengan latar belakang pendidikan .... </input>
                                                <input type="radio" value="tidak ada" name="penguatan_sdm" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="11"><li>Tim RHA</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_tim_rha"> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_tim_rha" checked> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="12"><li>PHRRT</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_phrrt"> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_phrrt" checked> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="13"><li>EMT</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_emt"> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_emt" checked> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="14"><li>SOP mekanisme mobilitasi tim RHA/EMT/PHRRT saat bencana</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="penguatan_sop"> Ada</input>
                                                <input type="radio" value="tidak ada" name="penguatan_sop" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="15"><li>Petugas yang terlatih terkait manajemen Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_petugas_managemen"> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_petugas_managemen" checked> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="16"><li>Petugas yang terlatih terkait teknis medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_petugas_medis"> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_petugas_medis" checked> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="17"><li>Petugas yang terlatih terkait teknis non medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="penguatan_petugas_non_medis"> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="penguatan_petugas_non_medis" checked> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="18"><li>Memetakan/mengidentifikasi Petugas Kesehatan di wilayahnya yang siap untuk dimobilisasi pada kondisi bencana</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="penguatan_memetakan_petugas"> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="penguatan_memetakan_petugas" checked> Tidak Melakukan </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="19"><li>Perencanaan peningkatan kapasitas SDM terkait PKK yang rutin dan berkesinambungan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="penguatan_peningkatan"> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="penguatan_peningkatan" checked> Tidak Melakukan </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="peringatan_sosialisasi"> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="peringatan_sosialisasi" checked> Tidak Melakukan </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="21"><li>Memetakan ketersediaan sistem Peringatan dini di kabupaten /kota yang menjadi wilayahnya</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="peringatan_sistem"> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="peringatan_sistem" checked> Tidak Melakukan </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="mitigasi_bina_teknis"> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="mitigasi_bina_teknis" checked> Tidak Melakukan </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="23"><li>Peningkatan kapasitas terkait pemberdayaan masyarakat dalam Penanggulangan Krisis Kesehatan bagi aparatur provinsi dan kabupaten/kota</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="mitigasi_peningkatan"> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="mitigasi_peningkatan" checked> Tidak Melakukan </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_peta_sdm"> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_peta_sdm" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="25"><li>Peta/ pemetaan kelompok rentan per kabupaten kota</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_peta_kelompok_rentan"> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_peta_kelompok_rentan" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="26"><li>Peta/ pemetaan jenis ancaman bencana per kabupaten/kota</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_peta_ancaman"> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_peta_ancaman" checked> Tidak Ada </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_alokasi_anggaran"> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_alokasi_anggaran" checked> Tidak Ada </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_data_kejadian"> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_data_kejadian" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="29"><li>Daftar kontak person lintas program dan lintas sektor terkait Penanggulangan Krisis Kesehatan Akibat Bencana baik di tingkat Kabupaten/Kota maupun Provinsi</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_kontak_person"> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_kontak_person" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="30"><li>Media informasi yang dapat diakses oleh seluruh masyarakat untuk meningkatkan kesadaran dalam kesiapsiagaan bencana</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_media_informasi"> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_media_informasi" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="31"><li>Sarana pengumpulan, pengelolaan data dan penyampaian informasi terkait Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_sarana_pengumpulan_data"> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_sarana_pengumpulan_data" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="32"><li>Sistem Pemantauan 24 jam</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="mitigasi_sistem_pemantauan"> Ada</input>
                                                <input type="radio" value="tidak ada" name="mitigasi_sistem_pemantauan" checked> Tidak Ada </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="melakukan" name="kesiapsiaga_fasilitas"> Melakukan</input>
                                                <input type="radio" value="tidak melakukan" name="kesiapsiaga_fasilitas" checked> Tidak Melakukan </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="34"><li>Memiliki Dokumen renkon bidang kesehatan untuk bencana tingkat provinsi</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_dok_rekon"> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_dok_rekon" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="35"><li>SOP Pengelolaan obat dan logistik kesehatan bencana</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_sop_obat"> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_sop_obat" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="36"><li>SOP pengelolaan bantuan relawan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_sop_bantuan_relawan"> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_sop_bantuan_relawan" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="37"><li>SOP pemantauan kejadian Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_sop_pemantauan"> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_sop_pemantauan" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="38"><li>SOP plaporan Kejadian Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_sop_pelaporan"> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_sop_pelaporan" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="39"><li>SOP Pelayanan rujukan (praRS-RS)</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_sop_pelayanan_rujukan"> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_sop_pelayanan_rujukan" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="40"><li>SOP Pelayanan Kesehatan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_sop_pelayanan_kesehatan"> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_sop_pelayanan_kesehatan" checked> Tidak Ada </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_dana_tak_terduga"> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_dana_tak_terduga" checked> Tidak Ada </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="42"><li>Dinas Kesehatan memahami DSP di BNPB</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ada" name="kesiapsiaga_paham_dsp_bnpb"> Ada</input>
                                                <input type="radio" value="tidak ada" name="kesiapsiaga_paham_dsp_bnpb" checked> Tidak Ada </input>
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
                                        <td><fieldset id="group1">
                                                <input type="radio" value="memiliki" name="kesiapsiaga_sarana_khusus"> Memiliki</input>
                                                <input type="radio" value="tidak memiliki" name="kesiapsiaga_sarana_khusus" checked> Tidak Memiliki </input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="44"><li>Penyediaan sarana prasarana telah menyesuaikan dengan jenis ancaman bencana di wilayahnya</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya" name="kesiapsiaga_sesuai_sarana"> Ya</input>
                                                <input type="radio" value="tidak" name="kesiapsiaga_sesuai_sarana" checked> Tidak</input>
                                            </fieldset></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="45"><li>Saran prasarana telah mencukupi</li></ol></td>
                                        <td><fieldset id="group1">
                                                <input type="radio" value="ya" name="kesiapsiaga_kecukupan_sarana"> Ya</input>
                                                <input type="radio" value="tidak" name="kesiapsiaga_kecukupan_sarana" checked> Tidak</input>
                                            </fieldset></td>
                                    </tr>
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
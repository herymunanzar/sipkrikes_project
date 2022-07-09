<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">KAPASITAS KAJIAN RISIKO KRISIS KESEHATAN PROVINSI</h4>

                        <div class="form-body">
                            <div class="row mb-3">
                                <div class="col-lg-12">V. Kapasitas</div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm table-style" >
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Indikator</th>
                                        <th class="text-center" style="min-width: 150px;">Pencapaian</th>
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
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kebijakan_peraturan ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="2"><li>Peraturan/SK Kadinkes terkait penanggulangan bencana/Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kebijakan_sk ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="3"><li>Tersedia/SOP Mekanisme Koordinasi Terkait PKK</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kebijakan_sop ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>b. Struktur Organisasi Penanggulangan Krisis kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="4"><li>Pelaksanaan pertemuan koordinasi klaster kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kebijakan_koordinasi ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="5"><li>Unit di Dinkes Kesehatan yang memiliki tugas mengkoordinasikan upaya Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kebijakan_unit ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="6"><li>SK Klaster Kesehatan Provinsi</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kebijakan_sk_klaster ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>c. Keterlibatan Institusi/Lembaga Non Pemerintahan dalam Penanggulangan Krisis Kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="7"><li>Dinas Kesehatan telah mengidentifikasi institusi/lembaga non pemerintahan yang dilibatkan dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kebijakan_dinas_identifikasi ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="8"><li>Dinas Kesehatan pernah mengadakan MoU dengan LSM/Instansi/Lembaga non pemerintah dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kebijakan_dinas_mou_lembaga ?></td>
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
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_bina_teknis ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>b. Sumber daya manusia</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="10"><li>Ketenagaan pada unit yang mengkoordinir upaya Penanggulangan Krisis Kesehatan di Dinas Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_sdm ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="11"><li>Tim RHA</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_tim_rha ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="12"><li>PHRRT</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_phrrt ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="13"><li>EMT</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_emt ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="14"><li>SOP mekanisme mobilitasi tim RHA/EMT/PHRRT saat bencana</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_sop ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="15"><li>Petugas yang terlatih terkait manajemen Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_petugas_managemen ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="16"><li>Petugas yang terlatih terkait teknis medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_petugas_medis ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="17"><li>Petugas yang terlatih terkait teknis non medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_petugas_non_medis ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="18"><li>Memetakan/mengidentifikasi Petugas Kesehatan di wilayahnya yang siap untuk dimobilisasi pada kondisi bencana</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_memetakan_petugas ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="19"><li>Perencanaan peningkatan kapasitas SDM terkait PKK yang rutin dan berkesinambungan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->penguatan_peningkatan ?></td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td>Peringatan Dini</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="20"><li>Sosialisasi/peningkatan kapasitas pada kabupaten/kota tentang sistem Peringatan Dini</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->peringatan_sosialisasi ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="21"><li>Memetakan ketersediaan sistem Peringatan dini di kabupaten /kota yang menjadi wilayahnya</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->peringatan_sistem ?></td>
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
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_bina_teknis ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="23"><li>Peningkatan kapasitas terkait pemberdayaan masyarakat dalam Penanggulangan Krisis Kesehatan bagi aparatur provinsi dan kabupaten/kota</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_peningkatan ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>b. Kapasitas untuk memetakan risiko Krisis Kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="24"><li>Peta/pemetaan kapasitas atau data kapasitas sumber daya yang dapat digunakan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_peta_sdm ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="25"><li>Peta/ pemetaan kelompok rentan per kabupaten kota</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_peta_kelompok_rentan ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="26"><li>Peta/ pemetaan jenis ancaman bencana per kabupaten/kota</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_peta_ancaman ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>c. Anggaran pengurangan risiko kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="27"><li>Dinas Kesehatan mengalokasikan anggaran kegiatan pengurangan risiko Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_alokasi_anggaran ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>d. Sistem Informasi</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="28"><li>Data kejadian Krisis Kesehatah 5 tahun terakhir</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_data_kejadian ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="29"><li>Daftar kontak person lintas program dan lintas sektor terkait Penanggulangan Krisis Kesehatan Akibat Bencana baik di tingkat Kabupaten/Kota maupun Provinsi</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_kontak_person ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="30"><li>Media informasi yang dapat diakses oleh seluruh masyarakat untuk meningkatkan kesadaran dalam kesiapsiagaan bencana</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_media_informasi ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="31"><li>Sarana pengumpulan, pengelolaan data dan penyampaian informasi terkait Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_sarana_pengumpulan_data ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="32"><li>Sistem Pemantauan 24 jam</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->mitigasi_sistem_pemantauan ?></td>
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
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_fasilitas ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="34"><li>Memiliki Dokumen renkon bidang kesehatan untuk bencana tingkat provinsi</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_dok_rekon ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="35"><li>SOP Pengelolaan obat dan logistik kesehatan bencana</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_sop_obat ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="36"><li>SOP pengelolaan bantuan relawan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_sop_bantuan_relawan ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="37"><li>SOP pemantauan kejadian Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_sop_pemantauan ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="38"><li>SOP plaporan Kejadian Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_sop_pelaporan ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="39"><li>SOP Pelayanan rujukan (praRS-RS)</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_sop_pelayanan_rujukan ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="40"><li>SOP Pelayanan Kesehatan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_sop_pelayanan_kesehatan ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>b. Pembiayaan Tanggap Darurat Krisis Kesehatan</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="41"><li>Dinas Kesehatan memahami penggunaan Dana Tak Terduga di BPBD</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_dana_tak_terduga ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="42"><li>Dinas Kesehatan memahami DSP di BNPB</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_paham_dsp_bnpb ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>c. Sarana prasarana PKK</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="43"><li>Sarana prasarana khusus untuk Penanggulangan Kesehatan</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_sarana_khusus ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="44"><li>Penyediaan sarana prasarana telah menyesuaikan dengan jenis ancaman bencana di wilayahnya</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_sesuai_sarana ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><ol start="45"><li>Saran prasarana telah mencukupi</li></ol></td>
                                        <td style="text-transform:capitalize;" class="text-left"><?= $input->kesiapsiaga_kecukupan_sarana ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <a href="<?= base_url("kapasitas_kajian_resikos/edit/$input->id") ?>" class="btn btn-info">Edit</a>
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
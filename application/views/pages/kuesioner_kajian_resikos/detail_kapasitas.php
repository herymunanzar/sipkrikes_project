<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">KAPASITAS KUESIONER KAJIAN RISIKO KRISIS KESEHATAN KABUPATEN / KOTA</h4>

                        <div class="form-body">
                            <div class="form-group">
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
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kebijakan_peraturan ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="2"><li>Peraturan/SK Kadinkes terkait penanggulangan bencana/Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kebijakan_sk ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="3"><li>Tersedia/SOP Mekanisme Koordinasi Terkait PKK</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kebijakan_sop ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>b. Struktur Organisasi Penanggulangan Krisis kesehatan</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="4"><li>Pelaksanaan pertemuan koordinasi klaster kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kebijakan_koordinasi ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="5"><li>Unit di Dinkes Kesehatan yang memiliki tugas mengkoordinasikan upaya Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kebijakan_unit ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="6"><li>SK Klaster Kesehatan Provinsi</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kebijakan_sk_klaster ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>c. Keterlibatan Institusi/Lembaga Non Pemerintahan dalam Penanggulangan Krisis Kesehatan</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="7"><li>Dinas Kesehatan telah mengidentifikasi institusi/lembaga non pemerintahan yang dilibatkan dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kebijakan_dinas_identifikasi ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="8"><li>Dinas Kesehatan pernah mengadakan MoU dengan LSM/Instansi/Lembaga non pemerintah dalam Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kebijakan_dinas_mou_lembaga ?></td>
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
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_jumlah_seluruh_fas_pel_kes ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="10"><li>Jumlah Puskesmas</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_jumlah_puskesmas ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="11"><li>Jumlah Rumah Sakit</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_jumlah_rs ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="12"><li>Kapasitas tempat tidur di RS</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_kapasitas_tempat_tidur_rs ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="13"><li>Proporsi RS di Kab/Kota yang telah memiliki Tim tanggap darurat bencana RS</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_proporsi_rs_memiliki_tim ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="14"><li>Dinkes memilliki Program yang berkesinambungan untuk mengimplementasi fasilitas pelayanan kesehatan aman bencana</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_dinkes_memiliki_program ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="15"><li>Dinkes memfasilitasi upaya penilaian risiko fasyankes terhadap berbagai ancaman yang terjadi di wilayah tersebut </li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_dinkes_memfasilitasi ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>b. Sumber daya manusia</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="16"><li>Jumlah dokter spesialis</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_jumlah_dokter_spesialis ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="17"><li>Jumlah dokter umum</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_jumlah_dokter_umum ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="18"><li>Jumlah bidan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_jumlah_bidan ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="19"><li>Jumlah perawat</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_jumlah_perawat ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="20"><li>Ketenagaan pada unit yang mengkoordinir upaya Penanggulangan Krisis Kesehatan di Dinas Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_ketenagaan_unit ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="21"><li>Tim RHA</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_tim_rha ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="22"><li>Kepemilikan Tim Penyelidikan Epidemiologi</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_tim_penyelidikan_epidemiologi ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="23"><li>Kepemilikan Tim Reaksi Cepat/ Tim Gerak Cepat/ Emergency Medical Team/ PHRRT</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_tim_reaksi_cepat ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="24"><li>Dinkes Kab/kota telah memetakan / mengidentifikasi tenaga kesehatan yang siap untuk dimobilisasi pada saat bencana</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_memetakan_petugas ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="25"><li>SOP mekanisme mobilitasi tim PKK</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_sop ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="26"><li>Memiliki petugas yang terlatih manajemen Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_petugas_managemen ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="27"><li>Memiliki petugas yang terlatih teknis medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_petugas_medis ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="28"><li>Memiliki Petugas yang terlatih terkait teknis non medis Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_petugas_non_medis ?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td><ol start="29"><li>Perencanaan peningkatan kapasitas SDM terkait PKK yang rutin dan berkesinambungan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->penguatan_peningkatan ?></td>
                                        </tr>
                                        <tr>
                                            <td>3. </td>
                                            <td>Peringatan Dini</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="30"><li>Sistem Peringatan Dini</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->peringatan_sistem ?></td>
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
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_fasilitas_kepada_masyarakat ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>b. Kapasitas untuk memetakan risiko Krisis Kesehatan</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="32"><li>Peta/pemetaan kapasitas atau data kapasitas sumber daya yang dapat digunakan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_peta_kapasitas ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="33"><li>Peta/ pemetaan kelompok rentan per kabupaten kota</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_peta_kelompok_rentan ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="34"><li>Peta/ pemetaan jenis ancaman bencana per kabupaten/kota</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_peta_ancaman ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>c. Anggaran pengurangan risiko kesehatan</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="35"><li>Dinas Kesehatan mengalokasikan anggaran kegiatan pengurangan risiko Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_alokasi_anggaran ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>d. Sistem Informasi</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="36"><li>Data kejadian Krisis Kesehatah 5 tahun terakhir</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_data_kejadian ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="37"><li>Daftar kontak person lintas program dan lintas sektor terkait Penanggulangan Krisis Kesehatan Akibat Bencana baik di tingkat Kabupaten/Kota maupun Provinsi</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_kontak_person ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="38"><li>Media informasi yang dapat diakses oleh seluruh masyarakat untuk meningkatkan kesadaran dalam kesiapsiagaan bencana</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_media_informasi ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="39"><li>Sarana pengumpulan, pengelolaan data dan penyampaian informasi terkait Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_sarana_pengumpulan_data ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="40"><li>Sistem Pemantauan 24 jam</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->mitigasi_sistem_pemantauan ?></td>
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
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_menyusun_rencana ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="42"><li>Dinas Kesehatan melakukan TTX, Simulasi, Geladi Bencana Bidang Kesehatan berdasarkan rencana kontijensi yang disusun</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_melakukan_simulasi ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="43"><li>SOP Penanganan Korban Bencana di Lapangan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_sop_penaganan ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="44"><li>SOP Pengelolaan obat dan logistik kesehatan bencana</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_sop_obat ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="45"><li>SOP pengelolaan bantuan relawan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_sop_bantuan_relawan ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="46"><li>SOP pemantauan kejadian Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_sop_pemantauan ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="47"><li>SOP pelaporan Kejadian Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_sop_pelaporan ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="48"><li>SOP sistem rujukan pada kondisi bencana</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_sop_pelayanan_rujukan ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="49"><li>SOP Pelayanan Kesehatan untuk Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_sop_pelayanan_kesehatan ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>b. Pembiayaan Tanggap Darurat Krisis Kesehatan</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="50"><li>Dinas Kesehatan memahami penggunaan Dana Tak Terduga di BPBD</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_dana_tak_terduga ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="51"><li>Dinas Kesehatan memahami DSP di BNPB</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_paham_dsp_bnpb ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>c. Sarana prasarana PKK</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="52"><li>Sarana prasarana Penanggulangan Krisis Kesehatan</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_sarana ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="53"><li>Penyediaan sarana prasarana telah menyesuaikan dengan jenis ancaman bencana di wilayahnya</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_sesuai_sarana ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="54"><li>Saran prasarana telah mencukupi</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_kecukupan_sarana ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>d. Public Safety Centre</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><ol start="55"><li>Pemerintah memiliki PSC 24 jam</li></ol></td>
                                            <td style="text-transform:capitalize;" class="text-center"><?= $input->kesiapsiaga_psc_24jam ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <a href="<?= base_url("kapasitas_kuesioner_kajian_resikos/edit/$input->id") ?>" class="btn btn-info">Edit</a>
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
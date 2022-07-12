<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_model extends MY_Model
{
    protected $table = 'penilaian_cepat';

    public function getDefaultValues()
    {
        return [
            'nama_dinas'                                            => '', //have required validation
            'jenis_bencana'                                         => '',
            'waktu_kejadian'                                        => '',
            'deskripsi_bencana'                                     => '',
            'id_prov'                                               => '',
            'id_kabkot'                                             => '',
            'nama_kec'                                              => '',
            'desa_dusun'                                            => '',
            'jumlah_penduduk_terancam'                              => '',
            'topografi'                                             => '',
            'jumlah_korban_meninggal'                               => '',
            'jumlah_korban_hilang'                                  => '',
            'jumlah_luka_berat_rawat_inap'                          => '',
            'jumlah_luka_ringan_rawat_jalan'                        => '',
            'jumlah_gangguan_jiwa'                                  => '',
            'jenis_penyakit_klb'                                    => '',
            'jumlah_pengungsi_penduduk_rentan'                      => '',
            'fasilitas_umum_akses'                                  => '',
            'fasilitas_umum_jalur_komunikasi'                       => '',
            'fasilitas_umum_jaringan_listrik'                       => '',
            'fasilitas_umum_air_bersih'                             => '',
            'kondisi_sanitasi_jenis_tempat'                         => '',
            'kondisi_sanitasi_kapasitas_pengungsi'                  => '',
            'dinkes_perbekalan_kesehatan_obat'                      => '',
            'dinkes_perbekalan_kesehatan_alat'                      => '',
            'dinkes_perbekalan_kesehatan_sanitasi_kaporit'          => '',
            'dinkes_perbekalan_kesehatan_sanitasi_pac'              => '',
            'dinkes_perbekalan_kesehatan_sanitasi_aquatab'          => '',
            'dinkes_perbekalan_kesehatan_sanitasi_kantong_sampah'   => '',
            'dinkes_perbekalan_kesehatan_sanitasi_repellent_lalat'  => '',
            'dinkes_perbekalan_kesehatan_sanitasi_hygiene_kit'      => '',
            'dinkes_perbekalan_kesehatan_persalinan_kit'            => '',
            'dinkes_perbekalan_kesehatan_sdm_jumlah'                => '',
            'dinkes_perbekalan_kesehatan_sdm_kompetensi'            => '',
            'dinkes_sarana_pendukung_transportasi'                  => '',
            'dinkes_sarana_pendukung_alat_komunikasi'               => '',
            'dinkes_sarana_pendukung_sarana_listrik'                => '',
            'rs_perbekalan_kesehatan_obat'                          => '',
            'rs_perbekalan_kesehatan_alat'                          => '',
            'rs_perbekalan_kesehatan_sanitasi_kaporit'              => '',
            'rs_perbekalan_kesehatan_sanitasi_pac'                  => '',
            'rs_perbekalan_kesehatan_sanitasi_aquatab'              => '',
            'rs_perbekalan_kesehatan_sanitasi_kantong_sampah'       => '',
            'rs_perbekalan_kesehatan_sanitasi_repellent_lalat'      => '',
            'rs_perbekalan_kesehatan_persalinan_kit'                => '',
            'rs_perbekalan_kesehatan_air'                           => '',
            'rs_perbekalan_kesehatan_tempat_tidur'                  => '',
            'rs_tenaga_kesehatan'                                   => '',
            'rs_tenaga_kesehatan_jenis_penampungan'                 => '',
            'rs_tenaga_kesehatan_kapasitas_penampungan'             => '',
            'rs_tenaga_kesehatan_kapasitas_air'                     => '',
            'rs_tenaga_kesehatan_jamban'                            => '',
            'rs_tenaga_kesehatan_pembuangan_sampah'                 => '',
            'rs_tenaga_kesehatan_sarana_spal'                       => '',
            'rs_tenaga_kesehatan_penerangan'                        => '',
            'rs_sarana_pendukung_transportasi'                      => '',
            'rs_sarana_pendukung_alat_komunikasi'                   => '',
            'rs_sarana_pendukung_sarana_listrik'                    => '',
            'upaya_penanggulangan_pelayanan_kesehatan'              => '',
            'upaya_penanggulangan_pengendalian'                     => '',
            'upaya_penanggulangan_pelayanan_gizi'                   => '',
            'upaya_penanggulangan_pelayanan_kesehatan_jiwa'         => '',
            'upaya_penanggulangan_reproduksi_dan_kia'               => '',
            'upaya_penanggulangan_dvi'                              => '',
            'upaya_penanggulangan_logistik_kesehatan'               => '',
            'bantuan_yang_diperlukan'                               => '',
            'rekomendasi'                                           => ''

        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_dinas',
                'label' => 'Nama Dinas Kesehatan',
                'rules' => 'required',
                'errors' => [
                    'required' => '<h6>%s must be select</h6>'
                ]
            ]
        ];

        return $validationRules;
    }

    /**
     * Melakukan insert pelaporan baru ke db
     */
    public function run($input)
    {
        $data = [
            'nama_dinas'                                            => $input->nama_dinas, //have required validation
            'jenis_bencana'                                         => $input->jenis_bencana,
            'waktu_kejadian'                                        => $input->tanggal.' '.$input->waktu,
            'deskripsi_bencana'                                     => $input->deskripsi_bencana,
            'id_prov'                                               => $input->id_prov,
            'id_kabkot'                                             => $input->id_kabkot,
            'nama_kec'                                              => $input->nama_kec,
            'desa_dusun'                                            => $input->desa_dusun,
            'jumlah_penduduk_terancam'                              => $input->jumlah_penduduk_terancam,
            'topografi'                                             => $input->topografi,
            'jumlah_korban_meninggal'                               => $input->jumlah_korban_meninggal,
            'jumlah_korban_hilang'                                  => $input->jumlah_korban_hilang,
            'jumlah_luka_berat_rawat_inap'                          => $input->jumlah_luka_berat_rawat_inap,
            'jumlah_luka_ringan_rawat_jalan'                        => $input->jumlah_luka_ringan_rawat_jalan,
            'jumlah_gangguan_jiwa'                                  => $input->jumlah_gangguan_jiwa,
            'jenis_penyakit_klb'                                    => $input->jenis_penyakit_klb,
            'jumlah_pengungsi_penduduk_rentan'                      => $input->jumlah_pengungsi_penduduk_rentan,
            'fasilitas_umum_akses'                                  => $input->fasilitas_umum_akses,
            'fasilitas_umum_jalur_komunikasi'                       => $input->fasilitas_umum_jalur_komunikasi,
            'fasilitas_umum_jaringan_listrik'                       => $input->fasilitas_umum_jaringan_listrik,
            'fasilitas_umum_air_bersih'                             => $input->fasilitas_umum_air_bersih,
            'kondisi_sanitasi_jenis_tempat'                         => $input->kondisi_sanitasi_jenis_tempat,
            'kondisi_sanitasi_kapasitas_pengungsi'                  => $input->kondisi_sanitasi_kapasitas_pengungsi,
            'dinkes_perbekalan_kesehatan_obat'                      => $input->dinkes_perbekalan_kesehatan_obat,
            'dinkes_perbekalan_kesehatan_alat'                      => $input->dinkes_perbekalan_kesehatan_alat,
            'dinkes_perbekalan_kesehatan_sanitasi_kaporit'          => $input->dinkes_perbekalan_kesehatan_sanitasi_kaporit,
            'dinkes_perbekalan_kesehatan_sanitasi_pac'              => $input->dinkes_perbekalan_kesehatan_sanitasi_pac,
            'dinkes_perbekalan_kesehatan_sanitasi_aquatab'          => $input->dinkes_perbekalan_kesehatan_sanitasi_aquatab,
            'dinkes_perbekalan_kesehatan_sanitasi_kantong_sampah'   => $input->dinkes_perbekalan_kesehatan_sanitasi_kantong_sampah,
            'dinkes_perbekalan_kesehatan_sanitasi_repellent_lalat'  => $input->dinkes_perbekalan_kesehatan_sanitasi_repellent_lalat,
            'dinkes_perbekalan_kesehatan_sanitasi_hygiene_kit'      => $input->dinkes_perbekalan_kesehatan_sanitasi_hygiene_kit,
            'dinkes_perbekalan_kesehatan_persalinan_kit'            => $input->dinkes_perbekalan_kesehatan_persalinan_kit,
            'dinkes_perbekalan_kesehatan_sdm_jumlah'                => $input->dinkes_perbekalan_kesehatan_sdm_jumlah,
            'dinkes_perbekalan_kesehatan_sdm_kompetensi'            => $input->dinkes_perbekalan_kesehatan_sdm_kompetensi,
            'dinkes_sarana_pendukung_transportasi'                  => $input->dinkes_sarana_pendukung_transportasi,
            'dinkes_sarana_pendukung_alat_komunikasi'               => $input->dinkes_sarana_pendukung_alat_komunikasi,
            'dinkes_sarana_pendukung_sarana_listrik'                => $input->dinkes_sarana_pendukung_sarana_listrik,
            'rs_perbekalan_kesehatan_obat'                          => $input->rs_perbekalan_kesehatan_obat,
            'rs_perbekalan_kesehatan_alat'                          => $input->rs_perbekalan_kesehatan_alat,
            'rs_perbekalan_kesehatan_sanitasi_kaporit'              => $input->rs_perbekalan_kesehatan_sanitasi_kaporit,
            'rs_perbekalan_kesehatan_sanitasi_pac'                  => $input->rs_perbekalan_kesehatan_sanitasi_pac,
            'rs_perbekalan_kesehatan_sanitasi_aquatab'              => $input->rs_perbekalan_kesehatan_sanitasi_aquatab,
            'rs_perbekalan_kesehatan_sanitasi_kantong_sampah'       => $input->rs_perbekalan_kesehatan_sanitasi_kantong_sampah,
            'rs_perbekalan_kesehatan_sanitasi_repellent_lalat'      => $input->rs_perbekalan_kesehatan_sanitasi_repellent_lalat,
            'rs_perbekalan_kesehatan_persalinan_kit'                => $input->rs_perbekalan_kesehatan_persalinan_kit,
            'rs_perbekalan_kesehatan_air'                           => $input->rs_perbekalan_kesehatan_air,
            'rs_perbekalan_kesehatan_tempat_tidur'                  => $input->rs_perbekalan_kesehatan_tempat_tidur,
            'rs_tenaga_kesehatan'                                   => $input->rs_tenaga_kesehatan,
            'rs_tenaga_kesehatan_jenis_penampungan'                 => $input->rs_tenaga_kesehatan_jenis_penampungan,
            'rs_tenaga_kesehatan_kapasitas_penampungan'             => $input->rs_tenaga_kesehatan_kapasitas_penampungan,
            'rs_tenaga_kesehatan_kapasitas_air'                     => $input->rs_tenaga_kesehatan_kapasitas_air,
            'rs_tenaga_kesehatan_jamban'                            => $input->rs_tenaga_kesehatan_jamban,
            'rs_tenaga_kesehatan_pembuangan_sampah'                 => $input->rs_tenaga_kesehatan_pembuangan_sampah,
            'rs_tenaga_kesehatan_sarana_spal'                       => $input->rs_tenaga_kesehatan_sarana_spal,
            'rs_tenaga_kesehatan_penerangan'                        => $input->rs_tenaga_kesehatan_penerangan,
            'rs_sarana_pendukung_transportasi'                      => $input->rs_sarana_pendukung_transportasi,
            'rs_sarana_pendukung_alat_komunikasi'                   => $input->rs_sarana_pendukung_alat_komunikasi,
            'rs_sarana_pendukung_sarana_listrik'                    => $input->rs_sarana_pendukung_sarana_listrik,
            'upaya_penanggulangan_pelayanan_kesehatan'              => $input->upaya_penanggulangan_pelayanan_kesehatan,
            'upaya_penanggulangan_pengendalian'                     => $input->upaya_penanggulangan_pengendalian,
            'upaya_penanggulangan_pelayanan_gizi'                   => $input->upaya_penanggulangan_pelayanan_gizi,
            'upaya_penanggulangan_pelayanan_kesehatan_jiwa'         => $input->upaya_penanggulangan_pelayanan_kesehatan_jiwa,
            'upaya_penanggulangan_reproduksi_dan_kia'               => $input->upaya_penanggulangan_reproduksi_dan_kia,
            'upaya_penanggulangan_dvi'                              => $input->upaya_penanggulangan_dvi,
            'upaya_penanggulangan_logistik_kesehatan'               => $input->upaya_penanggulangan_logistik_kesehatan,
            'bantuan_yang_diperlukan'                               => $input->bantuan_yang_diperlukan,
            'rekomendasi'                                           => $input->rekomendasi
        ];

        $this->create($data);
        return true;
    }
}

/* End of file Pelaporan_model.php */
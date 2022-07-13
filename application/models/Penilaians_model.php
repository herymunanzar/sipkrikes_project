<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaians_model extends MY_Model 
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
}

/* End of file Penilaians_model.php */

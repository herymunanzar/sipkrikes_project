<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelaporan_model extends MY_Model
{
    protected $table = 'perkembangan_kejadian';
    
    public function getDefaultValues()
    {
        return [
            'nama_dinas'                                             => '', //have required validation
            'jenis_bencana'                                          => '',
            'waktu_kejadian'                                         => '',
            'waktu_pelaporan'                                        => '',
            'deskripsi_bencana'                                      => '',
            'id_prov'                                                => '',
            'id_kabkot'                                              => '',
            'nama_kec'                                               => '',
            'desa_dusun'                                             => '',
            'jumlah_penduduk_terancam'                               => '',
            'topografi'                                              => '',
            'jumlah_korban_meninggal'                                => '',
            'jumlah_korban_hilang'                                   => '',
            'jumlah_luka_berat_rawat_inap'                           => '',
            'jumlah_luka_ringan_rawat_jalan'                         => '',
            'jumlah_pengungsi_penduduk_rentan'                       => '',
            'jumlah_gangguan_jiwa'                                   => '',
            'jenis_penyakit_klb'                                     => '',
            'jumlah_gizi_sangat_kurus'                               => '',
            'jumlah_gizi_kurus'                                      => '',
            'jumlah_gizi_normal'                                     => '',
            'jumlah_gizi_gemuk'                                      => '',
            'fasilitas_kesehatan_kondisi'                            => '',
            'fasilitas_kesehatan_pelayanan'                          => '',
            'jumlah_perkembangan_kondisi_jenis_penyakit_rawat_jalan' => '',
            'jumlah_perkembangan_kondisi_jenis_penyakit_rawat_inap'  => '',
            'jumlah_perkembangan_kasus_spesifik'                     => '',
            'upaya_penanggulangan_pelayanan_kesehatan'               => '',
            'upaya_penanggulangan_pengendalian'                      => '',
            'upaya_penanggulangan_pelayanan_gizi'                    => '',
            'upaya_penanggulangan_pelayanan_kesehatan_jiwa'          => '',
            'upaya_penanggulangan_reproduksi_dan_kia'                => '',
            'upaya_penanggulangan_dvi'                               => '',
            'upaya_penanggulangan_logistik_kesehatan'                => '',
            'permasalahan'                                           => '',
            'bantuan_yang_diperlukan'                                => '',
            'rencana_tindak_lanjut'                                  => '',

        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'nama_dinas',
                'label' => 'Nama Dinas',
                'rules' => 'required',
                'errors' => [
                    'required' => '<h6>%s must be fill</h6>'
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
            'nama_dinas'                                             => $input->nama_dinas, //have required validation
            'jenis_bencana'                                          => $input->jenis_bencana,
            'waktu_kejadian'                                         => $input->tanggal.' '.$input->waktu,
            'waktu_pelaporan'                                        => $input->tanggal_pelaporan.' '.$input->waktu_pelaporan,
            'deskripsi_bencana'                                      => $input->deskripsi_bencana,
            'id_prov'                                                => $input->id_prov,
            'id_kabkot'                                              => $input->id_kabkot,
            'nama_kec'                                               => $input->nama_kec,
            'desa_dusun'                                             => $input->desa_dusun,
            'jumlah_penduduk_terancam'                               => $input->jumlah_penduduk_terancam,
            'topografi'                                              => $input->topografi,
            'jumlah_korban_meninggal'                                => $input->jumlah_korban_meninggal,
            'jumlah_korban_hilang'                                   => $input->jumlah_korban_hilang,
            'jumlah_luka_berat_rawat_inap'                           => $input->jumlah_luka_berat_rawat_inap,
            'jumlah_luka_ringan_rawat_jalan'                         => $input->jumlah_luka_ringan_rawat_jalan,
            'jumlah_gangguan_jiwa'                                   => $input->jumlah_gangguan_jiwa,
            'jenis_penyakit_klb'                                     => $input->jenis_penyakit_klb,
            'jumlah_gizi_sangat_kurus'                               => $input->jumlah_gizi_sangat_kurus,
            'jumlah_gizi_kurus'                                      => $input->jumlah_gizi_kurus,
            'jumlah_gizi_normal'                                     => $input->jumlah_gizi_normal,
            'jumlah_gizi_gemuk'                                      => $input->jumlah_gizi_gemuk,
            'fasilitas_kesehatan_kondisi'                            => $input->fasilitas_kesehatan_kondisi,
            'fasilitas_kesehatan_pelayanan'                          => $input->fasilitas_kesehatan_pelayanan,
            'jumlah_perkembangan_kondisi_jenis_penyakit_rawat_jalan' => $input->jumlah_perkembangan_kondisi_jenis_penyakit_rawat_jalan,
            'jumlah_perkembangan_kondisi_jenis_penyakit_rawat_inap'  => $input->jumlah_perkembangan_kondisi_jenis_penyakit_rawat_inap,
            'jumlah_perkembangan_kasus_spesifik'                     => $input->jumlah_perkembangan_kasus_spesifik,
            'upaya_penanggulangan_pelayanan_kesehatan'               => $input->upaya_penanggulangan_pelayanan_kesehatan,
            'upaya_penanggulangan_pengendalian'                      => $input->upaya_penanggulangan_pengendalian,
            'upaya_penanggulangan_pelayanan_gizi'                    => $input->upaya_penanggulangan_pelayanan_gizi,
            'upaya_penanggulangan_pelayanan_kesehatan_jiwa'          => $input->upaya_penanggulangan_pelayanan_kesehatan_jiwa,
            'upaya_penanggulangan_reproduksi_dan_kia'                => $input->upaya_penanggulangan_reproduksi_dan_kia,
            'upaya_penanggulangan_dvi'                               => $input->upaya_penanggulangan_dvi,
            'upaya_penanggulangan_logistik_kesehatan'                => $input->upaya_penanggulangan_logistik_kesehatan,
            'permasalahan'                                           => $input->permasalahan,
            'bantuan_yang_diperlukan'                                => $input->bantuan_yang_diperlukan,
            'rencana_tindak_lanjut'                                  => $input->rencana_tindak_lanjut
        ];

        $this->create($data);
        return true;
    }
}

/* End of file Pelaporan_model.php */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelaporan_model extends MY_Model
{
    protected $table = 'pelaporan_awal';
    
    public function getDefaultValues()
    {
        return [
            'nama_dinas'                                    => '', //have required validation
            'jenis_bencana'                                 => '',
            'waktu_kejadian'                                => '',
            'deskripsi_bencana'                             => '',
            'id_prov'                                       => '',
            'id_kabkot'                                     => '',
            'nama_kec'                                      => '',
            'desa_dusun'                                    => '',
            'jumlah_penduduk_terancam'                      => '',
            'topografi'                                     => '',
            'jumlah_korban_meninggal'                       => '',
            'jumlah_korban_hilang'                          => '',
            'jumlah_luka_berat_rawat_inap'                  => '',
            'jumlah_luka_ringan_rawat_jalan'                => '',
            'jumlah_pengungsi_penduduk_rentan'              => '',
            'fasilitas_umum_akses'                          => '',
            'fasilitas_umum_jalur_komunikasi'               => '',
            'fasilitas_umum_jaringan_listrik'               => '',
            'fasilitas_umum_air_bersih'                     => '',
            'kondisi_faskes_kondisi'                        => '',
            'kondisi_faskes_fungsi_pelayanan'               => '',
            'upaya_penanggulangan_pelayanan_kesehatan'      => '',
            'upaya_penanggulangan_pengendalian'             => '',
            'upaya_penanggulangan_pelayanan_gizi'           => '',
            'upaya_penanggulangan_pelayanan_kesehatan_jiwa' => '',
            'upaya_penanggulangan_reproduksi_dan_kia'       => '',
            'upaya_penanggulangan_dvi'                      => '',
            'upaya_penanggulangan_logistik_kesehatan'       => '',
            'hambatan'                                      => '',
            'bantuan_yang_diperlukan'                       => '',
            'rencana_tindak_lanjut'                         => '',

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
            'nama_dinas'                                    => $input->nama_dinas, //have required validation
            'jenis_bencana'                                 => $input->jenis_bencana,
            'waktu_kejadian'                                => $input->tanggal.' '.$input->waktu,
            'deskripsi_bencana'                             => $input->deskripsi_bencana,
            'id_prov'                                       => $input->id_prov,
            'id_kabkot'                                     => $input->id_kabkot,
            'nama_kec'                                      => $input->nama_kec,
            'desa_dusun'                                    => $input->desa_dusun,
            'jumlah_penduduk_terancam'                      => $input->jumlah_penduduk_terancam,
            'topografi'                                     => $input->topografi,
            'jumlah_korban_meninggal'                       => $input->jumlah_korban_meninggal,
            'jumlah_korban_hilang'                          => $input->jumlah_korban_hilang,
            'jumlah_luka_berat_rawat_inap'                  => $input->jumlah_luka_berat_rawat_inap,
            'jumlah_luka_ringan_rawat_jalan'                => $input->jumlah_luka_ringan_rawat_jalan,
            'jumlah_pengungsi_penduduk_rentan'              => $input->jumlah_pengungsi_penduduk_rentan,
            'fasilitas_umum_akses'                          => $input->fasilitas_umum_akses,
            'fasilitas_umum_jalur_komunikasi'               => $input->fasilitas_umum_jalur_komunikasi,
            'fasilitas_umum_jaringan_listrik'               => $input->fasilitas_umum_jaringan_listrik,
            'fasilitas_umum_air_bersih'                     => $input->fasilitas_umum_air_bersih,
            'kondisi_faskes_kondisi'                        => $input->kondisi_faskes_kondisi,
            'kondisi_faskes_fungsi_pelayanan'               => $input->kondisi_faskes_fungsi_pelayanan,
            'upaya_penanggulangan_pelayanan_kesehatan'      => $input->upaya_penanggulangan_pelayanan_kesehatan,
            'upaya_penanggulangan_pengendalian'             => $input->upaya_penanggulangan_pengendalian,
            'upaya_penanggulangan_pelayanan_gizi'           => $input->upaya_penanggulangan_pelayanan_gizi,
            'upaya_penanggulangan_pelayanan_kesehatan_jiwa' => $input->upaya_penanggulangan_pelayanan_kesehatan_jiwa,
            'upaya_penanggulangan_reproduksi_dan_kia'       => $input->upaya_penanggulangan_reproduksi_dan_kia,
            'upaya_penanggulangan_dvi'                      => $input->upaya_penanggulangan_dvi,
            'upaya_penanggulangan_logistik_kesehatan'       => $input->upaya_penanggulangan_logistik_kesehatan,
            'hambatan'                                      => $input->hambatan,
            'bantuan_yang_diperlukan'                       => $input->bantuan_yang_diperlukan,
            'rencana_tindak_lanjut'                         => $input->rencana_tindak_lanjut
        ];

        $this->create($data);
        return true;
    }
}

/* End of file Pelaporan_model.php */
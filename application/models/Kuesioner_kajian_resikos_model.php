<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner_kajian_resikos_model extends MY_Model
{
    protected $table = 'kuesioner_kajian_resiko_kabkot';

    public function getDefaultValues()
    {
        return [
            'id_prov'                          => '',
            'nama_kabkot'                      => '',
            'nama_dinas'                       => '',
            'alamat'                           => '',
            'telepon'                          => '',
            'fax'                              => '',
            'website'                          => '',
            'email'                            => '',
            'responder_nama_satu'              => '',
            'responder_jabatan_satu'           => '',
            'responder_no_hp_satu'             => '',
            'responder_nama_dua'               => '',
            'responder_jabatan_dua'            => '',
            'responder_no_hp_dua'              => '',
            'karakteristik_luas'               => '',
            'karakteristik_letak'              => '',
            'karakteristik_jumlah_kec'         => '',
            'karakteristik_topografi'          => '',
            'karakteristik_jumlah_penduduk'    => '',
            'karakteristik_alat_komunikasi'    => '',
            'karakteristik_akses_transportasi' => '',
            'ancam_jenis_ancaman'              => '',
            'ancam_riwayat'                    => '',
            'kerentanan_ipm'                   => '',
            'kerentanan_ipkm'                  => '',
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_prov',
                'label' => 'Provinsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '<h6>%s must be select</h6>'
                ]
            ],
            [
                'field' => 'nama_kabkot',
                'label' => 'Kabupaten / Kota',
                'rules' => 'required',
                'errors' => [
                    'required' => '<h6>%s must be select</h6>'
                ]
            ]
        ];

        return $validationRules;
    }

}
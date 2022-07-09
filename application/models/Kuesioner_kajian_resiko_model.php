<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner_kajian_resiko_model extends MY_Model
{
    protected $table = 'kuesioner_kajian_resiko_kabkot';

    public function getDefaultValues()
    {
        return [
            'id_prov'                          => '',
            'id_kabkot'                        => '',
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
                'field' => 'id_kabkot',
                'label' => 'Kabupaten / Kota',
                'rules' => 'required',
                'errors' => [
                    'required' => '<h6>%s must be select</h6>'
                ]
            ]
        ];

        return $validationRules;
    }

    /**
     * Melakukan insert kajian resiko baru ke db
     */
    public function run($input)
    {
        $data = [
            'id_prov'                          => $input->id_prov,
            'id_kabkot'                        => $input->id_kabkot,
            'nama_dinas'                       => $input->nama_dinas,
            'alamat'                           => $input->alamat,
            'telepon'                          => $input->telepon,
            'fax'                              => $input->fax,
            'website'                          => $input->website,
            'email'                            => $input->email,
            'responder_nama_satu'              => $input->responder_nama_satu,
            'responder_jabatan_satu'           => $input->responder_jabatan_satu,
            'responder_no_hp_satu'             => $input->responder_no_hp_satu,
            'responder_nama_dua'               => $input->responder_nama_dua,
            'responder_jabatan_dua'            => $input->responder_jabatan_dua,
            'responder_no_hp_dua'              => $input->responder_no_hp_dua,
            'karakteristik_luas'               => $input->karakteristik_luas,
            'karakteristik_letak'              => $input->karakteristik_letak,
            'karakteristik_jumlah_kec'         => $input->karakteristik_jumlah_kec,
            'karakteristik_topografi'          => $input->karakteristik_topografi,
            'karakteristik_jumlah_penduduk'    => $input->karakteristik_jumlah_penduduk,
            'karakteristik_alat_komunikasi'    => $input->karakteristik_alat_komunikasi,
            'karakteristik_akses_transportasi' => $input->karakteristik_akses_transportasi,
            'ancam_jenis_ancaman'              => $input->ancam_jenis_ancaman,
            'ancam_riwayat'                    => $input->ancam_riwayat,
            'kerentanan_ipm'                   => $input->kerentanan_ipm,
            'kerentanan_ipkm'                  => $input->kerentanan_ipkm
        ];

        $this->create($data);
        return true;

    }
}
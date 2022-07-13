<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_cepat_lokasi_bencana_model extends MY_Model
{
    protected $table = 'penilaian_cepat_lokasi_bencana';
    
    public function getDefaultValues()
    {
        return [
            'id_pelaporan_awal'         => '', //have required validation
            'id_kabkot'                 => '',
            'nama_kec'                  => '',
            'desa_dusun'                => '',
            'jumlah_penduduk_terancam'  => '',
            'topografi'                 => '',
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_pelaporan_awal',
                'label' => 'Data Pelaporan Awal',
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
            'id_pelaporan_awal'         => $input->id_pelaporan_awal, //have required validation
            'id_kabkot'                 => $input->id_kabkot,
            'nama_kec'                  => $input->nama_kec,
            'desa_dusun'                => $input->desa_dusun,
            'jumlah_penduduk_terancam'  => $input->jumlah_penduduk_terancam,
            'topografi'                 => $input->topografi
        ];

        $this->create($data);
        return true;
    }
}

/* End of file Pelaporan_model.php */
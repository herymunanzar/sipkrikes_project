<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_cepat_korban_meninggal_model extends MY_Model
{
    protected $table = 'penilaian_cepat_korban_meninggal';
    
    public function getDefaultValues()
    {
        return [
            'id_pelaporan_awal'     => '', //have required validation
            'nama'                  => '',
            'jenis_kelamin'         => '',
            'usia'                  => '',
            'kewarganegaraan'       => '',
            'alamat_korban'         => '',
            'tempat_meninggal'      => '',
            'penyebab_kematian'     => '',
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
            'id_pelaporan_awal' => $input->id_pelaporan_awal, //have required validation
            'nama'              => $input->nama,
            'jenis_kelamin'     => $input->jenis_kelamin,
            'usia'              => $input->usia,
            'kewarganegaraan'   => $input->kewarganegaraan,
            'alamat_korban'     => $input->alamat_korban,
            'tempat_meninggal'  => $input->tempat_meninggal,
            'penyebab_kematian' => $input->penyebab_kematian
        ];

        $this->create($data);
        return true;
    }
}

/* End of file */
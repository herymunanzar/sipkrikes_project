<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_cepat_fasilitas_kesehatan_model extends MY_Model
{
    protected $table = 'penilaian_cepat_fasilitas_kesehatan';
    
    public function getDefaultValues()
    {
        return [
            'id_pelaporan_awal'                       => '', //have required validation
            'nama_fasilitas_kesehatan'                => '',
            'kondisi'                                 => '',
            'fungsi_pelayanan'                        => '',
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
            'nama_fasilitas_kesehatan'  => $input->nama_fasilitas_kesehatan,
            'kondisi'                   => $input->kondisi,
            'fungsi_pelayanan'          => $input->fungsi_pelayanan
        ];

        $this->create($data);
        return true;
    }
}

/* End of file */
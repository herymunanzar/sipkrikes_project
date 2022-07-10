<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelaporan_awal_korban_hilang_model extends MY_Model
{
    protected $table = 'pelaporan_awal_korban_luka';
    
    public function getDefaultValues()
    {
        return [
            'id_pelaporan_awal'             => '', //have required validation
            'nama_fasilitas_kesehatan'      => '',
            'lokasi'                        => '',
            'jumlah_rawat_inap_laki'        => '',
            'jumlah_rawat_inap_perempuan'   => '',
            'jumlah_rawat_jalan_laki'       => '',
            'jumlah_rawat_jalan_perempuan'  => '',
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
            'id_pelaporan_awal'             => $input->id_pelaporan_awal, //have required validation
            'nama_fasilitas_kesehatan'      => $input->nama_fasilitas_kesehatan,
            'lokasi'                        => $input->lokasi,
            'jumlah_rawat_inap_laki'        => $input->jumlah_rawat_inap_laki,
            'jumlah_rawat_inap_perempuan'   => $input->jumlah_rawat_inap_perempuan,
            'jumlah_rawat_jalan_laki'       => $input->jumlah_rawat_jalan_laki,
            'jumlah_rawat_jalan_perempuan'  => $input->jumlah_rawat_jalan_perempuan
        ];

        $this->create($data);
        return true;
    }
}

/* End of file */
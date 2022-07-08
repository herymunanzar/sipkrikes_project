<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaians_model extends MY_Model 
{
    protected $table = 'penilaian';

    public function getDefaultValues()
    {
        return [
        'jenis'                 => '', //have required validation
        'deskripsi'             => '',
        'dusun'                 => '',
        'desa'                  => '',
        'kec'                   => '',
        'kab'                   => '',
        'prov'                  => '',
        'lainnya'               => '',
        'tanggal'               => '',
        'waktu'                 => '',
        'meninggal'             => '',
        'hilang'                => '',
        'luka_berat'            => '',
        'luka_ringan'           => '',
        'pengungsi'             => '',
        'lokasi_ungsi'          => '',
        'puskesmas'             => '',
        'puskesmas_jumlah'      => '',
        'rs'                    => '',
        'rs_jumlah'             => '',
        'rs_bangun_rusak'       => '',
        'rs_bangun_tidak'       => '',
        'rs_layan_rusak'        => '',
        'rs_layan_tidak'        => '',
        'puskesmas_bangun_rusak'=> '',
        'puskesmas_bangun_tidak'=> '',
        'puskesmas_layan_rusak' => '',
        'puskesmas_layan_tidak' => '',
        'pustu_bangun_rusak'    => '',
        'pustu_bangun_tidak'    => '',
        'pustu_layan_rusak'     => '',
        'pustu_layan_tidak'     => '',
        'farmasi_bangun_rusak'  => '',
        'farmasi_bangun_tidak'  => '',
        'farmasi_layan_rusak'   => '',
        'farmasi_layan_tidak'   => '',
        'polindes_bangun_rusak' => '',
        'polindes_bangun_tidak' => '',
        'polindes_layan_rusak'  => '',
        'polindes_layan_tidak'  => '',
        'akses_mudah'           => '',
        'akses_sukar'           => '',
        'jalur'                 => '',
        'listrik'               => '',
        'upaya'                 => '',
        'bantuan'               => '',
        'pangan'                => '',
        'pengungsi_kk'          => '',
        'user'                  => '',
        'air'                   => '',
        'letak'                 => '',

        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'jenis',
                'label' => 'Center',
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

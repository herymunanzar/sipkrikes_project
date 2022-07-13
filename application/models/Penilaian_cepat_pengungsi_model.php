<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_cepat_pengungsi_model extends MY_Model
{
    protected $table = 'penilaian_cepat_pengungsi';
    
    public function getDefaultValues()
    {
        return [
            'id_pelaporan_awal'                       => '', //have required validation
            'id_kabkot'                               => '',
            'nama_kec'                                => '',
            'lokasi_pengungsian'                      => '',
            'gangguan_jiwa_anak'                      => '',
            'gangguan_jiwa_dewasa'                    => '',
            'jumlah_pengungsi_laki'                   => '',
            'jumlah_pengungsi_perempuan'              => '',
            'jumlah_pengungsi_kk'                     => '',
            'jumlah_penduduk_rentan_bayi'             => '',
            'jumlah_penduduk_rentan_balita'           => '',
            'jumlah_penduduk_rentan_buteki'           => '',
            'jumlah_penduduk_rentan_cacat_laki'       => '',
            'jumlah_penduduk_rentan_cacat_perempuan'  => '',
            'jumlah_penduduk_rentan_lansia_laki'      => '',
            'jumlah_penduduk_rentan_lansia_perempuan' => '',
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
            'id_pelaporan_awal'                         => $input->id_pelaporan_awal, //have required validation
            'id_kabkot'                                 => $input->id_kabkot,
            'nama_kec'                                  => $input->nama_kec,
            'lokasi_pengungsian'                        => $input->lokasi_pengungsian,
            'gangguan_jiwa_anak'                        => $input->gangguan_jiwa_anak,
            'gangguan_jiwa_dewasa'                      => $input->gangguan_jiwa_dewasa,
            'jumlah_pengungsi_laki'                     => $input->jumlah_pengungsi_laki,
            'jumlah_pengungsi_perempuan'                => $input->jumlah_pengungsi_perempuan,
            'jumlah_pengungsi_kk'                       => $input->jumlah_pengungsi_kk,
            'jumlah_penduduk_rentan_bayi'               => $input->jumlah_penduduk_rentan_bayi,
            'jumlah_penduduk_rentan_balita'             => $input->jumlah_penduduk_rentan_balita,
            'jumlah_penduduk_rentan_buteki'             => $input->jumlah_penduduk_rentan_buteki,
            'jumlah_penduduk_rentan_cacat_laki'         => $input->jumlah_penduduk_rentan_cacat_laki,
            'jumlah_penduduk_rentan_cacat_perempuan'    => $input->jumlah_penduduk_rentan_cacat_perempuan,
            'jumlah_penduduk_rentan_lansia_laki'        => $input->jumlah_penduduk_rentan_lansia_laki,
            'jumlah_penduduk_rentan_lansia_perempuan'   => $input->jumlah_penduduk_rentan_lansia_perempuan,
        ];

        $this->create($data);
        return true;
    }
}

/* End of file */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_model extends MY_Model
{
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
            'ancam_jiwa'            => '',
            'ancam_kk'              => '',
            'meninggal'             => '',
            'hilang'                => '',
            'luka_berat'            => '',
            'luka_ringan'           => '',
            'pengungsi'             => '',
            'pengungsi_kk'          => '',
            'lokasi_ungsi'          => '',
            'bayi'                  => '',
            'balita'                => '',
            'ibu_hamil'             => '',
            'ibu_menyusui'          => '',
            'lansia'                => '',
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
            'sumur'                 => '',
            'spt'                   => '',
            'pma'                   => '',
            'pah'                   => '',
            'pah'                   => '',
            'pipa'                  => '',
            'sumber_lain'           => '',
            'jamban'                => '',
            'mck'                   => '',
            'sanitasi_lain'         => '',
            'akses_mudah'           => '',
            'akses_sukar'           => '',
            'jalur'                 => '',
            'listrik'               => '',
            'jenis_penampungan'     => '',
            'kapasitas_penampungan' => '',
            'air_bersih'            => '',
            'sarana_mck'            => '',
            'sampah'                => '',
            'spal'                  => '',
            'penerangan'            => '',
            'obat'                  => '',
            'alat_kesehatan'        => '',
            'kaporit'               => '',
            'pac'                   => '',
            'aquatab'               => '',
            'kantong'               => '',
            'lalat'                 => '',
            'pangan'                => '',
            'pelayanan_transport'   => '',
            'pelayanan_komunikasi'  => '',
            'pelayanan_listrik'     => '',
            'upaya'                 => '',
            'bantuan'               => '',
            'rencana'               => '',
            'user'                  => '',
            'letak'                 => ''

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

    /**
     * Melakukan insert pelaporan baru ke db
     */
    public function run($input)
    {
        $data = [
            'jenis'                 => $input->jenis, //have required validation
            'deskripsi'             => $input->deskripsi,
            'dusun'                 => $input->dusun,
            'desa'                  => $input->desa,
            'kec'                   => $input->kec,
            'kab'                   => $input->kab,
            'prov'                  => $input->prov,
            'lainnya'               => $input->lainnya,
            'tanggal'               => $input->tanggal,
            'waktu'                 => $input->waktu,
            'ancam_jiwa'            => $input->ancam_jiwa,
            'ancam_kk'              => $input->ancam_jiwa,
            'meninggal'             => $input->meninggal,
            'hilang'                => $input->hilang,
            'luka_berat'            => $input->luka_berat,
            'luka_ringan'           => $input->luka_ringan,
            'pengungsi'             => $input->pengungsi,
            'pengungsi_kk'          => $input->pengungsi_kk,
            'lokasi_ungsi'          => $input->lokasi_ungsi,
            'bayi'                  => $input->bayi,
            'balita'                => $input->balita,
            'ibu_hamil'             => $input->ibu_hamil,
            'ibu_menyusui'          => $input->ibu_menyusui,
            'lansia'                => $input->lansia,
            'puskesmas'             => $input->puskesmas,
            'puskesmas_jumlah'      => $input->puskesmas_jumlah,
            'rs'                    => $input->rs,
            'rs_jumlah'             => $input->rs_jumlah,
            'rs_bangun_rusak'       => $input->rs_bangun_rusak,
            'rs_bangun_tidak'       => $input->rs_bangun_tidak,
            'rs_layan_rusak'        => $input->rs_layan_rusak,
            'rs_layan_tidak'        => $input->rs_layan_tidak,
            'puskesmas_bangun_rusak'=> $input->puskesmas_bangun_rusak,
            'puskesmas_bangun_tidak'=> $input->puskesmas_bangun_tidak,
            'puskesmas_layan_rusak' => $input->puskesmas_layan_rusak,
            'puskesmas_layan_tidak' => $input->puskesmas_layan_tidak,
            'pustu_bangun_rusak'    => $input->pustu_bangun_rusak,
            'pustu_bangun_tidak'    => $input->pustu_bangun_tidak,
            'pustu_layan_rusak'     => $input->pustu_layan_rusak,
            'pustu_layan_tidak'     => $input->pustu_layan_tidak,
            'farmasi_bangun_rusak'  => $input->farmasi_bangun_rusak,
            'farmasi_bangun_tidak'  => $input->farmasi_bangun_tidak,
            'farmasi_layan_rusak'   => $input->farmasi_layan_rusak,
            'farmasi_layan_tidak'   => $input->farmasi_layan_tidak,
            'polindes_bangun_rusak' => $input->polindes_bangun_rusak,
            'polindes_bangun_tidak' => $input->polindes_bangun_tidak,
            'polindes_layan_rusak'  => $input->polindes_layan_rusak,
            'polindes_layan_tidak'  => $input->polindes_layan_tidak,
            'sumur'                 => $input->sumur,
            'spt'                   => $input->spt,
            'pma'                   => $input->pma,
            'pah'                   => $input->pah,
            'pipa'                  => $input->pipa,
            'sumber_lain'           => $input->sumber_lain,
            'jamban'                => $input->jamban,
            'mck'                   => $input->mck,
            'sanitasi_lain'         => $input->sanitasi_lain,
            'akses_mudah'           => $input->akses_mudah,
            'akses_sukar'           => $input->akses_sukar,
            'jalur'                 => $input->jalur,
            'listrik'               => $input->listrik,
            'jenis_penampungan'     => $input->jenis_penampungan,
            'kapasitas_penampungan' => $input->kapasitas_penampungan,
            'air_bersih'            => $input->air_bersih,
            'sarana_mck'            => $input->sarana_mck,
            'sampah'                => $input->sampah,
            'spal'                  => $input->spal,
            'penerangan'            => $input->penerangan,
            'obat'                  => $input->obat,
            'alat_kesehatan'        => $input->alat_kesehatan,
            'kaporit'               => $input->kaporit,
            'pac'                   => $input->pac,
            'aquatab'               => $input->aquatab,
            'kantong'               => $input->kantong,
            'lalat'                 => $input->lalat,
            'pangan'                => $input->pangan,
            'pelayanan_transport'   => $input->pelayanan_transport,
            'pelayanan_komunikasi'  => $input->pelayanan_komunikasi,
            'pelayanan_listrik'     => $input->listrik,
            'upaya'                 => $input->upaya,
            'bantuan'               => $input->bantuan,
            'rencana'               => $input->rencana,
            'user'                  => $this->session->userdata('nama'),
            'letak'                 => $input->letak
        ];

        $this->create($data);
        return true;
    }
}

/* End of file Pelaporan_model.php */
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kapasitas_kajian_resikos_model extends MY_Model
{
    protected $table = 'kapasitas_kajian_resiko_provinsi';

    public function getDefaultValues()
    {
        return [
            'id_kajian_resiko_provinsi'           => '',
            'kebijakan_peraturan'                 => '',
            'kebijakan_sk'                        => '',
            'kebijakan_sop'                       => '',
            'kebijakan_koordinasi'                => '',
            'kebijakan_unit'                      => '',
            'kebijakan_sk_klaster'                => '',
            'kebijakan_dinas_identifikasi'        => '',
            'kebijakan_dinas_mou_lembaga'         => '',
            'penguatan_bina_teknis'               => '',
            'penguatan_sdm'                       => '',
            'penguatan_tim_rha'                   => '',
            'penguatan_phrrt'                     => '',
            'penguatan_emt'                       => '',
            'penguatan_sop'                       => '',
            'penguatan_petugas_managemen'         => '',
            'penguatan_petugas_medis'             => '',
            'penguatan_petugas_non_medis'         => '',
            'penguatan_memetakan_petugas'         => '',
            'penguatan_peningkatan'               => '',
            'peringatan_sosialisasi'              => '',
            'peringatan_sistem'                   => '',
            'mitigasi_bina_teknis'                => '',
            'mitigasi_peningkatan'                => '',
            'mitigasi_peta_sdm'                   => '',
            'mitigasi_peta_kelompok_rentan'       => '',
            'mitigasi_peta_ancaman'               => '',
            'mitigasi_alokasi_anggaran'           => '',
            'mitigasi_data_kejadian'              => '',
            'mitigasi_kontak_person'              => '',
            'mitigasi_media_informasi'            => '',
            'mitigasi_sarana_pengumpulan_data'    => '',
            'mitigasi_sistem_pemantauan'          => '',
            'kesiapsiaga_fasilitas'               => '',
            'kesiapsiaga_dok_rekon'               => '',
            'kesiapsiaga_sop_obat'                => '',
            'kesiapsiaga_sop_bantuan_relawan'     => '',
            'kesiapsiaga_sop_pemantauan'          => '',
            'kesiapsiaga_sop_pelaporan'           => '',
            'kesiapsiaga_sop_pelayanan_rujukan'   => '',
            'kesiapsiaga_sop_pelayanan_kesehatan' => '',
            'kesiapsiaga_dana_tak_terduga'        => '',
            'kesiapsiaga_paham_dsp_bnpb'          => '',
            'kesiapsiaga_sarana_khusus'           => '',
            'kesiapsiaga_sesuai_sarana'           => '',
            'kesiapsiaga_kecukupan_sarana'        => '',
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_kajian_resiko_provinsi',
                'label' => 'Kajian Resiko Provinsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '<h6>%s must be fill</h6>'
                ]
            ]
        ];

        return $validationRules;
    }


    public function run($input)
    {
        $data = [
            'id_kajian_resiko_provinsi'           => $input->id_kajian_resiko_provinsi,
            'kebijakan_peraturan'                 => $input->kebijakan_peraturan,
            'kebijakan_sk'                        => $input->kebijakan_sk,
            'kebijakan_sop'                       => $input->kebijakan_sop,
            'kebijakan_koordinasi'                => $input->kebijakan_koordinasi,
            'kebijakan_unit'                      => $input->kebijakan_unit,
            'kebijakan_sk_klaster'                => $input->kebijakan_sk_klaster,
            'kebijakan_dinas_identifikasi'        => $input->kebijakan_dinas_identifikasi,
            'kebijakan_dinas_mou_lembaga'         => $input->kebijakan_dinas_mou_lembaga,
            'penguatan_bina_teknis'               => $input->penguatan_bina_teknis,
            'penguatan_sdm'                       => $input->penguatan_sdm,
            'penguatan_tim_rha'                   => $input->penguatan_tim_rha,
            'penguatan_phrrt'                     => $input->penguatan_phrrt,
            'penguatan_emt'                       => $input->penguatan_emt,
            'penguatan_sop'                       => $input->penguatan_sop,
            'penguatan_petugas_managemen'         => $input->penguatan_petugas_managemen,
            'penguatan_petugas_medis'             => $input->penguatan_petugas_medis,
            'penguatan_petugas_non_medis'         => $input->penguatan_petugas_non_medis,
            'penguatan_memetakan_petugas'         => $input->penguatan_memetakan_petugas,
            'penguatan_peningkatan'               => $input->penguatan_peningkatan,
            'peringatan_sosialisasi'              => $input->peringatan_sosialisasi,
            'peringatan_sistem'                   => $input->peringatan_sistem,
            'mitigasi_bina_teknis'                => $input->mitigasi_bina_teknis,
            'mitigasi_peningkatan'                => $input->mitigasi_peningkatan,
            'mitigasi_peta_sdm'                   => $input->mitigasi_peta_sdm,
            'mitigasi_peta_kelompok_rentan'       => $input->mitigasi_peta_kelompok_rentan,
            'mitigasi_peta_ancaman'               => $input->mitigasi_peta_ancaman,
            'mitigasi_alokasi_anggaran'           => $input->mitigasi_alokasi_anggaran,
            'mitigasi_data_kejadian'              => $input->mitigasi_data_kejadian,
            'mitigasi_kontak_person'              => $input->mitigasi_kontak_person,
            'mitigasi_media_informasi'            => $input->mitigasi_media_informasi,
            'mitigasi_sarana_pengumpulan_data'    => $input->mitigasi_sarana_pengumpulan_data,
            'mitigasi_sistem_pemantauan'          => $input->mitigasi_sistem_pemantauan,
            'kesiapsiaga_fasilitas'               => $input->kesiapsiaga_fasilitas,
            'kesiapsiaga_dok_rekon'               => $input->kesiapsiaga_dok_rekon,
            'kesiapsiaga_sop_obat'                => $input->kesiapsiaga_sop_obat,
            'kesiapsiaga_sop_bantuan_relawan'     => $input->kesiapsiaga_sop_bantuan_relawan,
            'kesiapsiaga_sop_pemantauan'          => $input->kesiapsiaga_sop_pemantauan,
            'kesiapsiaga_sop_pelaporan'           => $input->kesiapsiaga_sop_pelaporan,
            'kesiapsiaga_sop_pelayanan_rujukan'   => $input->kesiapsiaga_sop_pelayanan_rujukan,
            'kesiapsiaga_sop_pelayanan_kesehatan' => $input->kesiapsiaga_sop_pelayanan_kesehatan,
            'kesiapsiaga_dana_tak_terduga'        => $input->kesiapsiaga_dana_tak_terduga,
            'kesiapsiaga_paham_dsp_bnpb'          => $input->kesiapsiaga_paham_dsp_bnpb,
            'kesiapsiaga_sarana_khusus'           => $input->kesiapsiaga_sarana_khusus,
            'kesiapsiaga_sesuai_sarana'           => $input->kesiapsiaga_sesuai_sarana,
            'kesiapsiaga_kecukupan_sarana'        => $input->kesiapsiaga_kecukupan_sarana
        ];

        $this->create($data);
        return true;
    }


}
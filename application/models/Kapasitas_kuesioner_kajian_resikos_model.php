<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kapasitas_kuesioner_kajian_resikos_model extends MY_Model
{
    protected $table = 'kapasitas_kuesioner_kajian_resiko_kabkot';

    public function getDefaultValues()
    {
        return [
            'id_kuesioner_kajian_resiko_kabkot'             => '',
            'kebijakan_peraturan'                           => '',
            'kebijakan_sk'                                  => '',
            'kebijakan_sop'                                 => '',
            'kebijakan_koordinasi'                          => '',
            'kebijakan_unit'                                => '',
            'kebijakan_sk_klaster'                          => '',
            'kebijakan_dinas_identifikasi'                  => '',
            'kebijakan_dinas_mou_lembaga'                   => '',
            'penguatan_jumlah_seluruh_fas_pel_kes'          => '',
            'penguatan_jumlah_puskesmas'                    => '',
            'penguatan_jumlah_rs'                           => '',
            'penguatan_kapasitas_tempat_tidur_rs'           => '',
            'penguatan_proporsi_rs_memiliki_tim'            => '',
            'penguatan_dinkes_memiliki_program'             => '',
            'penguatan_dinkes_memfasilitasi'                => '',
            'penguatan_jumlah_dokter_spesialis'             => '',
            'penguatan_jumlah_dokter_umum'                  => '',
            'penguatan_jumlah_bidan'                        => '',
            'penguatan_jumlah_perawat'                      => '',
            'penguatan_ketenagaan_unit'                     => '',
            'penguatan_tim_rha'                             => '',
            'penguatan_tim_penyelidikan_epidemiologi'       => '',
            'penguatan_tim_reaksi_cepat'                    => '',
            'penguatan_memetakan_petugas'                   => '',
            'penguatan_sop'                                 => '',
            'penguatan_petugas_managemen'                   => '',
            'penguatan_petugas_medis'                       => '',
            'penguatan_petugas_non_medis'                   => '',
            'penguatan_peningkatan'                         => '',
            'peringatan_sistem'                             => '',
            'mitigasi_fasilitas_kepada_masyarakat'          => '',
            'mitigasi_peta_kapasitas'                       => '',
            'mitigasi_peta_kelompok_rentan'                 => '',
            'mitigasi_peta_ancaman'                         => '',
            'mitigasi_alokasi_anggaran'                     => '',
            'mitigasi_data_kejadian'                        => '',
            'mitigasi_kontak_person'                        => '',
            'mitigasi_media_informasi'                      => '',
            'mitigasi_sarana_pengumpulan_data'              => '',
            'mitigasi_sistem_pemantauan'                    => '',
            'kesiapsiaga_menyusun_rencana'                  => '',
            'kesiapsiaga_melakukan_simulasi'                => '',
            'kesiapsiaga_sop_penaganan'                     => '',
            'kesiapsiaga_sop_obat'                          => '',
            'kesiapsiaga_sop_bantuan_relawan'               => '',
            'kesiapsiaga_sop_pemantauan'                    => '',
            'kesiapsiaga_sop_pelaporan'                     => '',
            'kesiapsiaga_sop_pelayanan_rujukan'             => '',
            'kesiapsiaga_sop_pelayanan_kesehatan'           => '',
            'kesiapsiaga_dana_tak_terduga'                  => '',
            'kesiapsiaga_paham_dsp_bnpb'                    => '',
            'kesiapsiaga_sarana'                            => '',
            'kesiapsiaga_sesuai_sarana'                     => '',
            'kesiapsiaga_kecukupan_sarana'                  => '',
            'kesiapsiaga_psc_24jam'                         => '',
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_kuesioner_kajian_resiko_kabkot',
                'label' => 'Kuesioner Kajian Resiko Kabupaten / Kota',
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
            'id_kuesioner_kajian_resiko_kabkot'         => $input->id_kuesioner_kajian_resiko_kabkot,
            'kebijakan_peraturan'                       => $input->kebijakan_peraturan,
            'kebijakan_sk'                              => $input->kebijakan_sk,
            'kebijakan_sop'                             => $input->kebijakan_sop,
            'kebijakan_koordinasi'                      => $input->kebijakan_koordinasi,
            'kebijakan_unit'                            => $input->kebijakan_unit,
            'kebijakan_sk_klaster'                      => $input->kebijakan_sk_klaster,
            'kebijakan_dinas_identifikasi'              => $input->kebijakan_dinas_identifikasi,
            'kebijakan_dinas_mou_lembaga'               => $input->kebijakan_dinas_mou_lembaga,
            'penguatan_jumlah_seluruh_fas_pel_kes'      => $input->penguatan_jumlah_seluruh_fas_pel_kes,
            'penguatan_jumlah_puskesmas'                => $input->penguatan_jumlah_puskesmas,
            'penguatan_jumlah_rs'                       => $input->penguatan_jumlah_rs,
            'penguatan_kapasitas_tempat_tidur_rs'       => $input->penguatan_kapasitas_tempat_tidur_rs,
            'penguatan_proporsi_rs_memiliki_tim'        => $input->penguatan_proporsi_rs_memiliki_tim,
            'penguatan_dinkes_memiliki_program'         => $input->penguatan_dinkes_memiliki_program,
            'penguatan_dinkes_memfasilitasi'            => $input->penguatan_dinkes_memfasilitasi,
            'penguatan_jumlah_dokter_spesialis'         => $input->penguatan_jumlah_dokter_spesialis,
            'penguatan_jumlah_dokter_umum'              => $input->penguatan_jumlah_dokter_umum,
            'penguatan_jumlah_bidan'                    => $input->penguatan_jumlah_bidan,
            'penguatan_jumlah_perawat'                  => $input->penguatan_jumlah_perawat,
            'penguatan_ketenagaan_unit'                 => $input->penguatan_ketenagaan_unit,
            'penguatan_tim_rha'                         => $input->penguatan_tim_rha,
            'penguatan_tim_penyelidikan_epidemiologi'   => $input->penguatan_tim_penyelidikan_epidemiologi,
            'penguatan_tim_reaksi_cepat'                => $input->penguatan_tim_reaksi_cepat,
            'penguatan_memetakan_petugas'               => $input->penguatan_memetakan_petugas,
            'penguatan_sop'                             => $input->penguatan_sop,
            'penguatan_petugas_managemen'               => $input->penguatan_petugas_managemen,
            'penguatan_petugas_medis'                   => $input->penguatan_petugas_medis,
            'penguatan_petugas_non_medis'               => $input->penguatan_petugas_non_medis,
            'penguatan_peningkatan'                     => $input->penguatan_peningkatan,
            'peringatan_sistem'                         => $input->peringatan_sistem,
            'mitigasi_fasilitas_kepada_masyarakat'      => $input->mitigasi_fasilitas_kepada_masyarakat,
            'mitigasi_peta_kapasitas'                   => $input->mitigasi_peta_kapasitas,
            'mitigasi_peta_kelompok_rentan'             => $input->mitigasi_peta_kelompok_rentan,
            'mitigasi_peta_ancaman'                     => $input->mitigasi_peta_ancaman,
            'mitigasi_alokasi_anggaran'                 => $input->mitigasi_alokasi_anggaran,
            'mitigasi_data_kejadian'                    => $input->mitigasi_data_kejadian,
            'mitigasi_kontak_person'                    => $input->mitigasi_kontak_person,
            'mitigasi_media_informasi'                  => $input->mitigasi_media_informasi,
            'mitigasi_sarana_pengumpulan_data'          => $input->mitigasi_sarana_pengumpulan_data,
            'mitigasi_sistem_pemantauan'                => $input->mitigasi_sistem_pemantauan,
            'kesiapsiaga_menyusun_rencana'              => $input->kesiapsiaga_menyusun_rencana,
            'kesiapsiaga_melakukan_simulasi'            => $input->kesiapsiaga_melakukan_simulasi,
            'kesiapsiaga_sop_penaganan'                 => $input->kesiapsiaga_sop_penaganan,
            'kesiapsiaga_sop_obat'                      => $input->kesiapsiaga_sop_obat,
            'kesiapsiaga_sop_bantuan_relawan'           => $input->kesiapsiaga_sop_bantuan_relawan,
            'kesiapsiaga_sop_pemantauan'                => $input->kesiapsiaga_sop_pemantauan,
            'kesiapsiaga_sop_pelaporan'                 => $input->kesiapsiaga_sop_pelaporan,
            'kesiapsiaga_sop_pelayanan_rujukan'         => $input->kesiapsiaga_sop_pelayanan_rujukan,
            'kesiapsiaga_sop_pelayanan_kesehatan'       => $input->kesiapsiaga_sop_pelayanan_kesehatan,
            'kesiapsiaga_dana_tak_terduga'              => $input->kesiapsiaga_dana_tak_terduga,
            'kesiapsiaga_paham_dsp_bnpb'                => $input->kesiapsiaga_paham_dsp_bnpb,
            'kesiapsiaga_sarana'                        => $input->kesiapsiaga_sarana,
            'kesiapsiaga_sesuai_sarana'                 => $input->kesiapsiaga_sesuai_sarana,
            'kesiapsiaga_kecukupan_sarana'              => $input->kesiapsiaga_kecukupan_sarana,
            'kesiapsiaga_psc_24jam'                     => $input->kesiapsiaga_psc_24jam

        ];

        $this->create($data);
        return true;
    }


}
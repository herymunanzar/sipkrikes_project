<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list tampil kuesioner kajian resiko
 */
class Kuesioner_kajian_resikos extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $is_login = $this->session->userdata('is_login');

        if (!$is_login) {
            $this->session->set_flashdata('warning', 'Anda belum login');
            redirect(base_url('login'));
            return;
        }
    }

    public function index($page = null)
    {
        $this->session->unset_userdata('keyword');

        $data['title']              = 'SIP Krisis Kesehatan';
        $data['breadcrumb_title']   = 'Kuesioner Kajian Risiko Krisis Kesehatan Kabupaten / Kota';
        $data['breadcrumb_path']    = 'Kuesioner Kajian Resiko / List Data';
        $data['content']            = $this->kuesioner_kajian_resikos->select([
                                        'kuesioner_kajian_resiko_kabkot.id AS id',
                                        'prov.nama_prov AS nama_prov',
                                        'kuesioner_kajian_resiko_kabkot.nama_kabkot AS nama_kabkot',
                                        'kuesioner_kajian_resiko_kabkot.nama_dinas AS nama_dinas',
                                        'kuesioner_kajian_resiko_kabkot.website AS website',
                                        'kapasitas_kuesioner_kajian_resiko_kabkot.id AS id_kapasitas'])
                                        ->join('prov')
                                        ->join_right('kapasitas_kuesioner_kajian_resiko_kabkot')
                                        ->get();
        $data['page']               = 'pages/kuesioner_kajian_resikos/index';
        //print_r($this->db->last_query());
        $this->view($data);
    }

    public function detail($id)
    {
        if($this->session->userdata('id_user') == 'id_user'){
            $this->session->set_flashdata('error', 'Edit Access Denied!');
            redirect(base_url('kuesioner_kajian_resikos'));
        }

         $data['content'] = $this->kuesioner_kajian_resikos->select([
                            'kuesioner_kajian_resiko_kabkot.id AS id',
                            'prov.nama_prov AS nama_prov',
                            'kuesioner_kajian_resiko_kabkot.nama_kabkot AS nama_kabkot',
                            'kuesioner_kajian_resiko_kabkot.nama_dinas AS nama_dinas',
                            'kuesioner_kajian_resiko_kabkot.alamat AS alamat',
                            'kuesioner_kajian_resiko_kabkot.telepon AS telepon',
                            'kuesioner_kajian_resiko_kabkot.fax AS fax',
                            'kuesioner_kajian_resiko_kabkot.website AS website',
                            'kuesioner_kajian_resiko_kabkot.email AS email',
                            'kuesioner_kajian_resiko_kabkot.responder_nama_satu AS responder_nama_satu',
                            'kuesioner_kajian_resiko_kabkot.responder_jabatan_satu AS responder_jabatan_satu',
                            'kuesioner_kajian_resiko_kabkot.responder_no_hp_satu AS responder_no_hp_satu',
                            'kuesioner_kajian_resiko_kabkot.responder_nama_dua AS responder_nama_dua',
                            'kuesioner_kajian_resiko_kabkot.responder_jabatan_dua AS responder_jabatan_dua',
                            'kuesioner_kajian_resiko_kabkot.responder_no_hp_dua AS responder_no_hp_dua',
                            'kuesioner_kajian_resiko_kabkot.karakteristik_luas AS karakteristik_luas',
                            'kuesioner_kajian_resiko_kabkot.karakteristik_letak AS karakteristik_letak',
                            'kuesioner_kajian_resiko_kabkot.karakteristik_jumlah_kec AS karakteristik_jumlah_kec',
                            'kuesioner_kajian_resiko_kabkot.karakteristik_topografi AS karakteristik_topografi',
                            'kuesioner_kajian_resiko_kabkot.karakteristik_jumlah_penduduk AS karakteristik_jumlah_penduduk',
                            'kuesioner_kajian_resiko_kabkot.karakteristik_alat_komunikasi AS karakteristik_alat_komunikasi',
                            'kuesioner_kajian_resiko_kabkot.karakteristik_akses_transportasi AS karakteristik_akses_transportasi',
                            'kuesioner_kajian_resiko_kabkot.ancam_jenis_ancaman AS ancam_jenis_ancaman',
                            'kuesioner_kajian_resiko_kabkot.ancam_riwayat AS ancam_riwayat',
                            'kuesioner_kajian_resiko_kabkot.kerentanan_ipm AS kerentanan_ipm',
                            'kuesioner_kajian_resiko_kabkot.kerentanan_ipkm AS kerentanan_ipkm'])
                            ->join('prov')
                            ->where('kuesioner_kajian_resiko_kabkot.id', $id)
                            ->first();

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Not Found');
            redirect(base_url('kajian_resikos'));
        }

        if(!$_POST){
            $data['input'] = $data['content'];
        }else{
            $data['input'] = (object) $this->input->post(null, true);
        }

        if(!$this->kuesioner_kajian_resikos->validate()){
            $data['title']              = 'SIP Krisis Kesehatan';
            $data['page']               = 'pages/kuesioner_kajian_resikos/detail';
            $data['breadcrumb_title']   = 'Detail Kuesioner Kajian Risiko Krisis Kesehatan Kabupaten / Kota';
            $data['breadcrumb_path']    = 'Kuesioner Kajian Resiko / Detail / Kuesioner Kajian Resiko Id : '.$data['input']->id ;

            return $this->view($data);
        }
    }

    public function edit($id)
    {
        if($this->session->userdata('id_user') == 'id_user' && $this->session->userdata('role') == 'admin'){
            $this->session->set_flashdata('error', 'Edit Access Denied!');
            redirect(base_url('kuesioner_kajian_resikos'));
        }

        $data['content'] = $this->kuesioner_kajian_resikos->where('id', $id)->first();

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Mot Found');
            redirect(base_url('kajian_resikos'));
        }

        if(!$_POST){
            $data['input'] = $data['content'];
        }else{
            $data['input'] = (object) $this->input->post(null, true);
        }

        if(!$this->kuesioner_kajian_resikos->validate()){
            $data['title']              = 'SIP Krisis Kesehatan';
            $data['page']               = 'pages/kuesioner_kajian_resikos/edit';
            $data['breadcrumb_title']   = 'Edit Kuesioner Kajian Risiko Krisis Kesehatan Kabupaten / Kota';
            $data['breadcrumb_path']    = 'Kuesioner Kajian Resiko / Detail / Edit Data / Kuesioner Kajian Resiko Id : '.$data['input']->id ;

            return $this->view($data);
        }

        if($this->kuesioner_kajian_resikos->where('id', $id)->update($data['input'])) {
            $this->session->set_flashdata('success', 'Data Change Successfully');
        }else{
            $this->session->set_flashdata('error', 'Oops! An Error Occurred');
        }

        redirect(base_url('kuesioner_kajian_resikos'));
    }

    public function kesimpulan($id)
    {
        if($this->session->userdata('id_user') == 'id_user'){
            $this->session->set_flashdata('error', 'Kesimpulan Access Denied!');
            redirect(base_url('kuesioner_kajian_resikos'));
        }

        //$data['content'] = $this->kajian_resikos->where('id', $id)->first();
         $data['content'] = $this->kuesioner_kajian_resikos->select([
                        'kuesioner_kajian_resiko_kabkot.id AS id',
                        'prov.nama_prov AS nama_prov',
                        'kuesioner_kajian_resiko_kabkot.nama_kabkot AS nama_kabkot',
                        'kuesioner_kajian_resiko_kabkot.nama_dinas AS nama_dinas',
                        'kuesioner_kajian_resiko_kabkot.ancam_jenis_ancaman AS ancam_jenis_ancaman',
                        'kuesioner_kajian_resiko_kabkot.kerentanan_ipm AS kerentanan_ipm',
                        'kuesioner_kajian_resiko_kabkot.kerentanan_ipkm AS kerentanan_ipkm',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.id AS id_kapasitas',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kebijakan_peraturan AS kebijakan_peraturan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kebijakan_sk AS kebijakan_sk',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kebijakan_sop AS kebijakan_sop',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kebijakan_koordinasi AS kebijakan_koordinasi',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kebijakan_unit AS kebijakan_unit',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kebijakan_sk_klaster AS kebijakan_sk_klaster',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kebijakan_dinas_identifikasi AS kebijakan_dinas_identifikasi',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kebijakan_dinas_mou_lembaga AS kebijakan_dinas_mou_lembaga',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_jumlah_seluruh_fas_pel_kes AS penguatan_jumlah_seluruh_fas_pel_kes',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_jumlah_puskesmas AS penguatan_jumlah_puskesmas',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_jumlah_rs AS penguatan_jumlah_rs',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_kapasitas_tempat_tidur_rs AS penguatan_kapasitas_tempat_tidur_rs',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_proporsi_rs_memiliki_tim AS penguatan_proporsi_rs_memiliki_tim',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_dinkes_memiliki_program AS penguatan_dinkes_memiliki_program',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_dinkes_memfasilitasi AS penguatan_dinkes_memfasilitasi',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_jumlah_dokter_spesialis AS penguatan_jumlah_dokter_spesialis',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_jumlah_dokter_umum AS penguatan_jumlah_dokter_umum',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_jumlah_bidan AS penguatan_jumlah_bidan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_jumlah_perawat AS penguatan_jumlah_perawat',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_ketenagaan_unit AS penguatan_ketenagaan_unit',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_tim_rha AS penguatan_tim_rha',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_tim_penyelidikan_epidemiologi AS penguatan_tim_penyelidikan_epidemiologi',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_tim_reaksi_cepat AS penguatan_tim_reaksi_cepat',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_memetakan_petugas AS penguatan_memetakan_petugas',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_sop AS penguatan_sop',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_petugas_managemen AS penguatan_petugas_managemen',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_petugas_medis AS penguatan_petugas_medis',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_petugas_non_medis AS penguatan_petugas_non_medis',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.penguatan_peningkatan AS penguatan_peningkatan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.peringatan_sistem AS peringatan_sistem',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_fasilitas_kepada_masyarakat AS mitigasi_fasilitas_kepada_masyarakat',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_peta_kapasitas AS mitigasi_peta_kapasitas',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_peta_kelompok_rentan AS mitigasi_peta_kelompok_rentan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_peta_ancaman AS mitigasi_peta_ancaman',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_alokasi_anggaran AS mitigasi_alokasi_anggaran',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_data_kejadian AS mitigasi_data_kejadian',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_kontak_person AS mitigasi_kontak_person',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_media_informasi AS mitigasi_media_informasi',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_sarana_pengumpulan_data AS mitigasi_sarana_pengumpulan_data',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.mitigasi_sistem_pemantauan AS mitigasi_sistem_pemantauan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_menyusun_rencana AS kesiapsiaga_menyusun_rencana',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_melakukan_simulasi AS kesiapsiaga_melakukan_simulasi',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_sop_penaganan AS kesiapsiaga_sop_penaganan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_sop_obat AS kesiapsiaga_sop_obat',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_sop_bantuan_relawan AS kesiapsiaga_sop_bantuan_relawan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_sop_pemantauan AS kesiapsiaga_sop_pemantauan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_sop_pelaporan AS kesiapsiaga_sop_pelaporan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_sop_pelayanan_rujukan AS kesiapsiaga_sop_pelayanan_rujukan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_sop_pelayanan_kesehatan AS kesiapsiaga_sop_pelayanan_kesehatan',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_dana_tak_terduga AS kesiapsiaga_dana_tak_terduga',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_paham_dsp_bnpb AS kesiapsiaga_paham_dsp_bnpb',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_sarana AS kesiapsiaga_sarana',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_sesuai_sarana AS kesiapsiaga_sesuai_sarana',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_kecukupan_sarana AS kesiapsiaga_kecukupan_sarana',
                        'kapasitas_kuesioner_kajian_resiko_kabkot.kesiapsiaga_psc_24jam AS kesiapsiaga_psc_24jam'
                        ])
                        ->join('prov')
                        ->join_right('kapasitas_kuesioner_kajian_resiko_kabkot')
                        ->where('kuesioner_kajian_resiko_kabkot.id', $id)
                        ->first();
        //print_r($data['content']);

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Not Found');
            redirect(base_url('kuesioner_kajian_resikos'));
        }

        if(!$_POST){
            $data['input'] = $data['content'];
        }else{
            $data['input'] = (object) $this->input->post(null, true);
        }

        if(!$this->kuesioner_kajian_resikos->validate()){
            $data['title']              = 'SIP Krisis Kesehatan';
            $data['page']               = 'pages/kuesioner_kajian_resikos/kesimpulan';
            $data['breadcrumb_title']   = 'Kesimpulan Kuesioner Kajian Risiko Krisis Kesehatan Kabupaten / Kota';
            $data['breadcrumb_path']    = 'Kuesioner Kajian Resiko / Kesimpulan / Kuesioner Kajian Resiko Id : '.$data['input']->id ;

            // Nilai awal kesimpulan
            $kebijakan = 8;
            $penguatan = 21;
            $peringatan_dini = 1;
            $mitigasi = 10;
            $kesiapsiagaan = 15;

            //Pengecekan Kebijakan
            if($data['input']->kebijakan_peraturan == "tidak ada"){
                $kebijakan = $kebijakan - 1;
            }
            if($data['input']->kebijakan_sk == "tidak ada"){
                $kebijakan = $kebijakan - 1;
            }
            if($data['input']->kebijakan_sop == "tidak ada"){
                $kebijakan = $kebijakan - 1;
            }
            if($data['input']->kebijakan_koordinasi == "tidak pernah"){
                $kebijakan = $kebijakan - 1;
            }
            if($data['input']->kebijakan_unit == "tidak ada"){
                $kebijakan = $kebijakan - 1;
            }
            if($data['input']->kebijakan_sk_klaster == "tidak ada"){
                $kebijakan = $kebijakan - 1;
            }
            if($data['input']->kebijakan_dinas_identifikasi == "tidak melakukan"){
                $kebijakan = $kebijakan - 1;
            }
            if($data['input']->kebijakan_dinas_mou_lembaga == "tidak"){
                $kebijakan = $kebijakan - 1;
            }

            //Pengecekan penguatan
            if($data['input']->penguatan_jumlah_seluruh_fas_pel_kes == ""){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_jumlah_puskesmas == ""){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_jumlah_rs == ""){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_kapasitas_tempat_tidur_rs == ""){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_proporsi_rs_memiliki_tim == ""){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_dinkes_memiliki_program == "tidak memiliki"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_dinkes_memfasilitasi == "belum ada"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_jumlah_dokter_spesialis == ""){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_jumlah_dokter_umum == ""){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_jumlah_bidan == ""){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_jumlah_perawat == ""){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_ketenagaan_unit == "tidak ada"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_tim_rha == "tidak memiliki"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_tim_penyelidikan_epidemiologi == "tidak memiliki"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_tim_reaksi_cepat == "tidak memiliki"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_memetakan_petugas == "tidak melakukan"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_sop == "tidak ada"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_petugas_managemen == "tidak memiliki"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_petugas_medis == "tidak memiliki"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_petugas_non_medis == "tidak memiliki"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_peningkatan == "tidak ada"){
                $penguatan = $penguatan - 1;
            }

            //pengecekan peringatan dini
            if($data['input']->peringatan_sistem == "tidak ada"){
                $peringatan_dini = $peringatan_dini - 1;
            }

            //pengecekan mitigasi
            if($data['input']->mitigasi_fasilitas_kepada_masyarakat == "tidak melakukan"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_peta_kapasitas == "tidak memiliki"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_peta_kelompok_rentan == "tidak memiliki"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_peta_ancaman == "tidak memiliki"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_alokasi_anggaran == "tidak"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_data_kejadian == "tidak ada"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_kontak_person == "tidak ada"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_media_informasi == "tidak ada"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_sarana_pengumpulan_data == "tidak ada"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_sistem_pemantauan == "tidak ada"){
                $mitigasi = $mitigasi - 1;
            }

            //pengecekan kesiapsiagaan
            if($data['input']->kesiapsiaga_menyusun_rencana == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_melakukan_simulasi == "tidak melakukan"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_penaganan == "tidak memiliki"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_obat == "tidak memiliki"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_bantuan_relawan == "tidak memiliki"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_pemantauan == "tidak memiliki"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_pelaporan == "tidak memiliki"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_pelayanan_rujukan == "tidak memiliki"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_pelayanan_kesehatan == "tidak memiliki"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_dana_tak_terduga == "tidak"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_paham_dsp_bnpb == "tidak"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sarana == "tidak memiliki"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sesuai_sarana == "tidak"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_kecukupan_sarana == "tidak"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_psc_24jam == "tidak memiliki"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }

            $total = $kebijakan + $penguatan + $peringatan_dini + $mitigasi + $kesiapsiagaan;
            $persentase = (100/55)*$total;
            $kategori = null;

            if($persentase >= 67 && $persentase <= 100 ){
                $kategori = "Tinggi";
            }elseif($persentase >= 34 && $persentase <= 66){
                $kategori = "Sedang";
            }elseif($persentase >= 1 && $persentase <= 33){
                $kategori = "Rendah";
            }else{
                $kategori = "Tidak masuk kategori";
            }

            //HASIL
            $data['kebijakan'] = $kebijakan;
            $data['penguatan'] = $penguatan;
            $data['peringatan_dini'] = $peringatan_dini;
            $data['mitigasi'] = $mitigasi;
            $data['kesiapsiagaan'] = $kesiapsiagaan;
            $data['total'] = $total;
            $data['persentase'] = $persentase;
            $data['kategori'] = $kategori;



            return $this->view($data);
        }
    }
}
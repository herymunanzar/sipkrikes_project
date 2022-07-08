<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list tampil kajian resiko
 */
class Kajian_resikos extends MY_Controller
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
        $data['breadcrumb_title']   = 'Kajian Risiko Krisis Kesehatan Provinsi';
        $data['breadcrumb_path']    = 'Kajian Resiko / List Data';
        $data['content']            = $this->kajian_resikos->select([
                                        'kajian_resiko_provinsi.id AS id',
                                        'prov.nama_prov AS nama_prov',
                                        'kajian_resiko_provinsi.nama_dinas AS nama_dinas',
                                        'kajian_resiko_provinsi.website AS website',
                                        'kapasitas_kajian_resiko_provinsi.id AS id_kapasitas'])
                                        ->join('prov')
                                        ->join_right('kapasitas_kajian_resiko_provinsi')
                                        ->get();
        $data['page']               = 'pages/kajian_resikos/index';
        //print_r($this->db->last_query());
        $this->view($data);
    }

    public function detail($id)
    {
        if($this->session->userdata('id_user') == 'id_user'){
            $this->session->set_flashdata('error', 'Edit Access Denied!');
            redirect(base_url('kajian_resikos'));
        }

        //$data['content'] = $this->kajian_resikos->where('id', $id)->first();
         $data['content'] = $this->kajian_resikos->select([
                            'kajian_resiko_provinsi.id AS id',
                            'prov.nama_prov AS nama_prov',
                            'kajian_resiko_provinsi.nama_dinas AS nama_dinas',
                            'kajian_resiko_provinsi.alamat AS alamat',
                            'kajian_resiko_provinsi.telepon AS telepon',
                            'kajian_resiko_provinsi.fax AS fax',
                            'kajian_resiko_provinsi.website AS website',
                            'kajian_resiko_provinsi.email AS email',
                            'kajian_resiko_provinsi.responder_nama_satu AS responder_nama_satu',
                            'kajian_resiko_provinsi.responder_jabatan_satu AS responder_jabatan_satu',
                            'kajian_resiko_provinsi.responder_no_hp_satu AS responder_no_hp_satu',
                            'kajian_resiko_provinsi.responder_nama_dua AS responder_nama_dua',
                            'kajian_resiko_provinsi.responder_jabatan_dua AS responder_jabatan_dua',
                            'kajian_resiko_provinsi.responder_no_hp_dua AS responder_no_hp_dua',
                            'kajian_resiko_provinsi.karakteristik_luas AS karakteristik_luas',
                            'kajian_resiko_provinsi.karakteristik_letak AS karakteristik_letak',
                            'kajian_resiko_provinsi.karakteristik_jumlah_kab_kot AS karakteristik_jumlah_kab_kot',
                            'kajian_resiko_provinsi.karakteristik_topografi AS karakteristik_topografi',
                            'kajian_resiko_provinsi.karakteristik_jumlah_penduduk AS karakteristik_jumlah_penduduk',
                            'kajian_resiko_provinsi.karakteristik_alat_komunikasi AS karakteristik_alat_komunikasi',
                            'kajian_resiko_provinsi.karakteristik_akses_transportasi AS karakteristik_akses_transportasi',
                            'kajian_resiko_provinsi.ancam_jenis_ancaman AS ancam_jenis_ancaman',
                            'kajian_resiko_provinsi.ancam_riwayat AS ancam_riwayat',
                            'kajian_resiko_provinsi.kerentanan_ipm AS kerentanan_ipm',
                            'kajian_resiko_provinsi.kerentanan_ipkm AS kerentanan_ipkm'])
                            ->join('prov')
                            ->where('kajian_resiko_provinsi.id', $id)
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

        if(!$this->kajian_resikos->validate()){
            $data['title']              = 'SIP Krisis Kesehatan';
            $data['page']               = 'pages/kajian_resikos/detail';
            $data['breadcrumb_title']   = 'Detail Kajian Risiko Krisis Kesehatan Provinsi';
            $data['breadcrumb_path']    = 'Kajian Resiko / Detail / Kajian Resiko Id : '.$data['input']->id ;

            return $this->view($data);
        }
    }

    public function edit($id)
    {
        if($this->session->userdata('id_user') == 'id_user' && $this->session->userdata('role') == 'admin'){
            $this->session->set_flashdata('error', 'Edit Access Denied!');
            redirect(base_url('kajian_resikos'));
        }

        $data['content'] = $this->kajian_resikos->where('id', $id)->first();

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Mot Found');
            redirect(base_url('kajian_resikos'));
        }

        if(!$_POST){
            $data['input'] = $data['content'];
        }else{
            $data['input'] = (object) $this->input->post(null, true);
        }

        if(!$this->kajian_resikos->validate()){
            $data['title']              = 'SIP Krisis Kesehatan';
            $data['page']               = 'pages/kajian_resikos/edit';
            $data['breadcrumb_title']   = 'Edit Kajian Risiko Krisis Kesehatan Provinsi';
            $data['breadcrumb_path']    = 'Kajian Resiko / Detail / Edit Data / Kajian Resiko Id : '.$data['input']->id ;

            return $this->view($data);
        }

        if($this->kajian_resikos->where('id', $id)->update($data['input'])) {
            $this->session->set_flashdata('success', 'Data Change Successfully');
        }else{
            $this->session->set_flashdata('error', 'Oops! An Error Occurred');
        }

        redirect(base_url('kajian_resikos'));
    }

    public function kesimpulan($id)
    {
        if($this->session->userdata('id_user') == 'id_user'){
            $this->session->set_flashdata('error', 'Kesimpulan Access Denied!');
            redirect(base_url('kajian_resikos'));
        }

        //$data['content'] = $this->kajian_resikos->where('id', $id)->first();
         $data['content'] = $this->kajian_resikos->select([
                        'kajian_resiko_provinsi.id AS id',
                        'prov.nama_prov AS nama_prov',
                        'kajian_resiko_provinsi.nama_dinas AS nama_dinas',
                        'kajian_resiko_provinsi.ancam_jenis_ancaman AS ancam_jenis_ancaman',
                        'kajian_resiko_provinsi.kerentanan_ipm AS kerentanan_ipm',
                        'kajian_resiko_provinsi.kerentanan_ipkm AS kerentanan_ipkm',
                        'kapasitas_kajian_resiko_provinsi.id AS id_kapasitas',
                        'kapasitas_kajian_resiko_provinsi.kebijakan_peraturan AS kebijakan_peraturan',
                        'kapasitas_kajian_resiko_provinsi.kebijakan_sk AS kebijakan_sk',
                        'kapasitas_kajian_resiko_provinsi.kebijakan_sop AS kebijakan_sop',
                        'kapasitas_kajian_resiko_provinsi.kebijakan_koordinasi AS kebijakan_koordinasi',
                        'kapasitas_kajian_resiko_provinsi.kebijakan_unit AS kebijakan_unit',
                        'kapasitas_kajian_resiko_provinsi.kebijakan_sk_klaster AS kebijakan_sk_klaster',
                        'kapasitas_kajian_resiko_provinsi.kebijakan_dinas_identifikasi AS kebijakan_dinas_identifikasi',
                        'kapasitas_kajian_resiko_provinsi.kebijakan_dinas_mou_lembaga AS kebijakan_dinas_mou_lembaga',
                        'kapasitas_kajian_resiko_provinsi.penguatan_bina_teknis AS penguatan_bina_teknis',
                        'kapasitas_kajian_resiko_provinsi.penguatan_sdm AS penguatan_sdm',
                        'kapasitas_kajian_resiko_provinsi.penguatan_tim_rha AS penguatan_tim_rha',
                        'kapasitas_kajian_resiko_provinsi.penguatan_phrrt AS penguatan_phrrt',
                        'kapasitas_kajian_resiko_provinsi.penguatan_emt AS penguatan_emt',
                        'kapasitas_kajian_resiko_provinsi.penguatan_sop AS penguatan_sop',
                        'kapasitas_kajian_resiko_provinsi.penguatan_petugas_managemen AS penguatan_petugas_managemen',
                        'kapasitas_kajian_resiko_provinsi.penguatan_petugas_medis AS penguatan_petugas_medis',
                        'kapasitas_kajian_resiko_provinsi.penguatan_petugas_non_medis AS penguatan_petugas_non_medis',
                        'kapasitas_kajian_resiko_provinsi.penguatan_memetakan_petugas AS penguatan_memetakan_petugas',
                        'kapasitas_kajian_resiko_provinsi.penguatan_peningkatan AS penguatan_peningkatan',
                        'kapasitas_kajian_resiko_provinsi.peringatan_sosialisasi AS peringatan_sosialisasi',
                        'kapasitas_kajian_resiko_provinsi.peringatan_sistem AS peringatan_sistem',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_bina_teknis AS mitigasi_bina_teknis',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_peningkatan AS mitigasi_peningkatan',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_peta_sdm AS mitigasi_peta_sdm',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_peta_kelompok_rentan AS mitigasi_peta_kelompok_rentan',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_peta_ancaman AS mitigasi_peta_ancaman',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_alokasi_anggaran AS mitigasi_alokasi_anggaran',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_data_kejadian AS mitigasi_data_kejadian',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_kontak_person AS mitigasi_kontak_person',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_media_informasi AS mitigasi_media_informasi',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_sarana_pengumpulan_data AS mitigasi_sarana_pengumpulan_data',
                        'kapasitas_kajian_resiko_provinsi.mitigasi_sistem_pemantauan AS mitigasi_sistem_pemantauan',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_fasilitas AS kesiapsiaga_fasilitas',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_dok_rekon AS kesiapsiaga_dok_rekon',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_sop_obat AS kesiapsiaga_sop_obat',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_sop_bantuan_relawan AS kesiapsiaga_sop_bantuan_relawan',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_sop_pemantauan AS kesiapsiaga_sop_pemantauan',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_sop_pelaporan AS kesiapsiaga_sop_pelaporan',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_sop_pelayanan_rujukan AS kesiapsiaga_sop_pelayanan_rujukan',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_sop_pelayanan_kesehatan AS kesiapsiaga_sop_pelayanan_kesehatan',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_dana_tak_terduga AS kesiapsiaga_dana_tak_terduga',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_paham_dsp_bnpb AS kesiapsiaga_paham_dsp_bnpb',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_sarana_khusus AS kesiapsiaga_sarana_khusus',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_sesuai_sarana AS kesiapsiaga_sesuai_sarana',
                        'kapasitas_kajian_resiko_provinsi.kesiapsiaga_kecukupan_sarana AS kesiapsiaga_kecukupan_sarana'
                        ])
                        ->join('prov')
                        ->join_right('kapasitas_kajian_resiko_provinsi')
                        ->where('kajian_resiko_provinsi.id', $id)
                        ->first();
        //print_r($data['content']);

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Not Found');
            redirect(base_url('kajian_resikos'));
        }

        if(!$_POST){
            $data['input'] = $data['content'];
        }else{
            $data['input'] = (object) $this->input->post(null, true);
        }

        if(!$this->kajian_resikos->validate()){
            $data['title']              = 'SIP Krisis Kesehatan';
            $data['page']               = 'pages/kajian_resikos/kesimpulan';
            $data['breadcrumb_title']   = 'Kesimpulan Kajian Risiko Krisis Kesehatan Provinsi';
            $data['breadcrumb_path']    = 'Kajian Resiko / Kesimpulan / Kajian Resiko Id : '.$data['input']->id ;

            // Nilai awal kesimpulan
            $kebijakan = 8;
            $penguatan = 11;
            $peringatan_dini = 2;
            $mitigasi = 11;
            $kesiapsiagaan = 13;

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
            if($data['input']->kebijakan_dinas_identifikasi == "tidak"){
                $kebijakan = $kebijakan - 1;
            }
            if($data['input']->kebijakan_dinas_mou_lembaga == "tidak"){
                $kebijakan = $kebijakan - 1;
            }

            //Pengecekan penguatan
            if($data['input']->penguatan_bina_teknis == "tidak melakukan"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_sdm == "tidak ada"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_tim_rha == "tidak memiliki"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_phrrt == "tidak memiliki"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_emt == "tidak memiliki"){
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
            if($data['input']->penguatan_memetakan_petugas == "tidak melakukan"){
                $penguatan = $penguatan - 1;
            }
            if($data['input']->penguatan_peningkatan == "tidak melakukan"){
                $penguatan = $penguatan - 1;
            }

            //pengecekan peringatan dini
            if($data['input']->penguatan_peningkatan == "tidak melakukan"){
                $peringatan_dini = $peringatan_dini - 1;
            }
            if($data['input']->peringatan_sosialisasi == "tidak melakukan"){
                $peringatan_dini = $peringatan_dini - 1;
            }

            //pengecekan mitigasi
            if($data['input']->mitigasi_bina_teknis == "tidak melakukan"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_peningkatan == "tidak melakukan"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_peta_sdm == "tidak ada"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_peta_kelompok_rentan == "tidak ada"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_peta_ancaman == "tidak ada"){
                $mitigasi = $mitigasi - 1;
            }
            if($data['input']->mitigasi_alokasi_anggaran == "tidak ada"){
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
            if($data['input']->kesiapsiaga_fasilitas == "tidak melakukan"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_dok_rekon == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_obat == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_bantuan_relawan == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_pemantauan == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_pelaporan == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_pelayanan_rujukan == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sop_pelayanan_kesehatan == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_dana_tak_terduga == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_paham_dsp_bnpb == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sarana_khusus == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_sesuai_sarana == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }
            if($data['input']->kesiapsiaga_kecukupan_sarana == "tidak ada"){
                $kesiapsiagaan = $kesiapsiagaan - 1;
            }

            $total = $kebijakan + $penguatan + $peringatan_dini + $mitigasi + $kesiapsiagaan;
            $persentase = (100/45)*$total;
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
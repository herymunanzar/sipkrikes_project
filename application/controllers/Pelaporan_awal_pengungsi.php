<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list Pelaporans
 */
class Pelaporan_awal_pengungsi extends MY_Controller
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

    public function lihat_pengungsi($id)
    {
        $this->session->unset_userdata('keyword');

        $data['title']              = 'SIP Krisis Kesehatan';
        $data['breadcrumb_title']   = 'Pelaporan Awal Lokasi Bencana';
        $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / List Pengungsi';
        $data['content']            = $this->pelaporan_awal_pengungsi->select([
                                        'pelaporan_awal_pengungsi.id AS id',
                                        'kabkot.nama_kabkot AS nama_kabkot',
                                        'pelaporan_awal_pengungsi.nama_kec AS nama_kec',
                                        'pelaporan_awal_pengungsi.lokasi_pengungsian AS lokasi_pengungsian',
                                        'pelaporan_awal_pengungsi.gangguan_jiwa_anak AS gangguan_jiwa_anak',
                                        'pelaporan_awal_pengungsi.gangguan_jiwa_dewasa AS gangguan_jiwa_dewasa',
                                        'pelaporan_awal_pengungsi.jumlah_pengungsi_laki AS jumlah_pengungsi_laki',
                                        'pelaporan_awal_pengungsi.jumlah_pengungsi_perempuan AS jumlah_pengungsi_perempuan',
                                        'pelaporan_awal_pengungsi.jumlah_pengungsi_kk AS jumlah_pengungsi_kk',
                                        'pelaporan_awal_pengungsi.jumlah_penduduk_rentan_bayi AS jumlah_penduduk_rentan_bayi',
                                        'pelaporan_awal_pengungsi.jumlah_penduduk_rentan_balita AS jumlah_penduduk_rentan_balita',
                                        'pelaporan_awal_pengungsi.jumlah_penduduk_rentan_bumil AS jumlah_penduduk_rentan_bumil',
                                        'pelaporan_awal_pengungsi.jumlah_penduduk_rentan_buteki AS jumlah_penduduk_rentan_buteki',
                                        'pelaporan_awal_pengungsi.jumlah_penduduk_rentan_cacat_laki AS jumlah_penduduk_rentan_cacat_laki',
                                        'pelaporan_awal_pengungsi.jumlah_penduduk_rentan_cacat_perempuan AS jumlah_penduduk_rentan_cacat_perempuan',
                                        'pelaporan_awal_pengungsi.jumlah_penduduk_rentan_lansia_laki AS jumlah_penduduk_rentan_lansia_laki',
                                        'pelaporan_awal_pengungsi.jumlah_penduduk_rentan_lansia_perempuan AS jumlah_penduduk_rentan_lansia_perempuan'])
                                        ->join('pelaporan_awal')
                                        ->join('kabkot')
                                        ->where('pelaporan_awal_pengungsi.id_pelaporan_awal', $id)
                                        ->get();
        $data['page']               = 'pages/pelaporan_awal_pengungsi/lihat_pengungsi';

        $this->view($data);
    }

    public function input_pengungsi($id)
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('warning', 'You do not have access to the registration menu');
            redirect(base_url('home'));
            return;
        }

        //select data pelaporan_awal untuk mengambil id_prov where $id
        $this->load->model('pelaporans_model');
        $data['data'] = $this->pelaporans_model->where('id', $id)->first();

        //select data listkabkot where id_prov pelaporan awal
        $this->load->model('listkabkot_model');
        $data['kabkot'] = $this->listkabkot_model->where('id_prov', $data['data']->id_prov)->get();

        if (!$_POST) {
            $input = (object) $this->pelaporan_awal_pengungsi->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }
        
        if (!$this->pelaporan_awal_pengungsi->validate()) {     // Jika validasi gagal maka arahkan ke form register lagi
            $data['title'] = 'SIP Krisis Kesehatan';
            $data['breadcrumb_title']   = 'Pelaporan Awal Kejadian Krisis Kesehatan';
            $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / Input Pengungsi';
            $data['page']  = 'pages/pelaporan_awal_pengungsi/input_pengungsi';
            $data['input'] = $input;

            return $this->view($data);
        }
        
        //Input data
        //$this->pelaporan->table = 'pelaporan_awal';
        if ($this->pelaporan_awal_pengungsi->run($input)) {
            $this->session->set_flashdata('success', 'Successfully input pengungsi');
            redirect(base_url('pelaporan_awal_pengungsi/lihat_pengungsi/'.$id));
        } else {
            $this->session->set_flashdata('error', 'Oops something went wrong');
            redirect(base_url('pelaporan_awal_pengungsi/lihat_pengungsi/'.$id));
        }
    }


}
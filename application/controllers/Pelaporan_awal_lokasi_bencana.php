<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list Pelaporans
 */
class Pelaporan_awal_lokasi_bencana extends MY_Controller
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

    public function lihat_lokasi_bencana($id)
    {
        $this->session->unset_userdata('keyword');

        $data['title']              = 'SIP Krisis Kesehatan';
        $data['breadcrumb_title']   = 'Pelaporan Awal Lokasi Bencana';
        $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / List Lokasi Bencana';
        $data['content']            = $this->pelaporan_awal_lokasi_bencana->select([
                                        'pelaporan_awal_lokasi_bencana.id AS id',
                                        'kabkot.nama_kabkot AS nama_kabkot',
                                        'pelaporan_awal_lokasi_bencana.nama_kec AS nama_kec',
                                        'pelaporan_awal_lokasi_bencana.desa_dusun AS desa_dusun',
                                        'pelaporan_awal_lokasi_bencana.jumlah_penduduk_terancam AS jumlah_penduduk_terancam',
                                        'pelaporan_awal_lokasi_bencana.topografi AS topografi'])
                                        ->join('pelaporan_awal')
                                        ->join('kabkot')
                                        ->where('pelaporan_awal_lokasi_bencana.id_pelaporan_awal', $id)
                                        ->get();
        $data['page']               = 'pages/pelaporan_awal_lokasi_bencana/lihat_lokasi_bencana';

        $this->view($data);
    }

    public function input_lokasi_bencana($id)
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
            $input = (object) $this->pelaporan_awal_lokasi_bencana->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }
        
        if (!$this->pelaporan_awal_lokasi_bencana->validate()) {     // Jika validasi gagal maka arahkan ke form register lagi
            $data['title'] = 'SIP Krisis Kesehatan';
            $data['breadcrumb_title']   = 'Pelaporan Awal Kejadian Krisis Kesehatan';
            $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / Input Lokasi Bencana';
            $data['page']  = 'pages/pelaporan_awal_lokasi_bencana/input_lokasi_bencana';
            $data['input'] = $input;

            return $this->view($data);
        }
        
        //Input data
        $this->pelaporan->table = 'pelaporan_awal';
        if ($this->pelaporan_awal_lokasi_bencana->run($input)) {
            $this->session->set_flashdata('success', 'Successfully input lokasi bencana');
            redirect(base_url('pelaporan_awal_lokasi_bencana/lihat_lokasi_bencana/'.$id));
        } else {
            $this->session->set_flashdata('error', 'Oops something went wrong');
            redirect(base_url('pelaporan_awal_lokasi_bencana/lihat_lokasi_bencana/'.$id));
        }
    }


}
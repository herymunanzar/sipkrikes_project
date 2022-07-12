<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list Pelaporans
 */
class Pelaporan_awal_fasilitas_kesehatan extends MY_Controller
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

    public function lihat_fasilitas_kesehatan($id)
    {
        $this->session->unset_userdata('keyword');

        $data['title']              = 'SIP Krisis Kesehatan';
        $data['breadcrumb_title']   = 'Pelaporan Awal Fasilitas Kesehatan';
        $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / List Fasilitas Kesehatan';
        $data['content']            = $this->pelaporan_awal_fasilitas_kesehatan->get();
        $data['page']               = 'pages/pelaporan_awal_fasilitas_kesehatan/lihat_fasilitas_kesehatan';

        $this->view($data);
    }

    public function input_fasilitas_kesehatan($id)
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('warning', 'You do not have access to the registration menu');
            redirect(base_url('home'));
            return;
        }

        //select data pelaporan_awal untuk mengambil id_prov where $id
        $this->load->model('pelaporans_model');
        $data['data'] = $this->pelaporans_model->where('id', $id)->first();

        if (!$_POST) {
            $input = (object) $this->pelaporan_awal_fasilitas_kesehatan->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }
        
        if (!$this->pelaporan_awal_fasilitas_kesehatan->validate()) {     // Jika validasi gagal maka arahkan ke form register lagi
            $data['title'] = 'SIP Krisis Kesehatan';
            $data['breadcrumb_title']   = 'Pelaporan Awal Kejadian Krisis Kesehatan';
            $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / Input Fasilitas Kesehatan';
            $data['page']  = 'pages/pelaporan_awal_fasilitas_kesehatan/input_fasilitas_kesehatan';
            $data['input'] = $input;

            return $this->view($data);
        }
        
        //Input data
        //$this->pelaporan->table = 'pelaporan_awal';
        if ($this->pelaporan_awal_fasilitas_kesehatan->run($input)) {
            $this->session->set_flashdata('success', 'Successfully input korban luka');
            redirect(base_url('pelaporan_awal_fasilitas_kesehatan/lihat_fasilitas_kesehatan/'.$id));
        } else {
            $this->session->set_flashdata('error', 'Oops something went wrong');
            redirect(base_url('pelaporan_awal_fasilitas_kesehatan/lihat_fasilitas_kesehatan/'.$id));
        }
    }


}
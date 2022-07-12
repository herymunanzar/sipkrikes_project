<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list Pelaporans
 */
class Pelaporan_awal_korban_meninggal extends MY_Controller
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

    public function lihat_korban_meninggal($id)
    {
        $this->session->unset_userdata('keyword');

        $data['title']              = 'SIP Krisis Kesehatan';
        $data['breadcrumb_title']   = 'Pelaporan Awal Lokasi Bencana';
        $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / List Korban Meninggal';
        $data['content']            = $this->pelaporan_awal_korban_meninggal->get();
        $data['page']               = 'pages/pelaporan_awal_korban_meninggal/lihat_korban_meninggal';

        $this->view($data);
    }

    public function input_korban_meninggal($id)
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
            $input = (object) $this->pelaporan_awal_korban_meninggal->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }
        
        if (!$this->pelaporan_awal_korban_meninggal->validate()) {     // Jika validasi gagal maka arahkan ke form register lagi
            $data['title'] = 'SIP Krisis Kesehatan';
            $data['breadcrumb_title']   = 'Pelaporan Awal Kejadian Krisis Kesehatan';
            $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / Input Korban Meninggal';
            $data['page']  = 'pages/pelaporan_awal_korban_meninggal/input_korban_meninggal';
            $data['input'] = $input;

            return $this->view($data);
        }
        
        //Input data
        //$this->pelaporan->table = 'pelaporan_awal';
        if ($this->pelaporan_awal_korban_meninggal->run($input)) {
            $this->session->set_flashdata('success', 'Successfully input korban meninggal');
            redirect(base_url('pelaporan_awal_korban_meninggal/lihat_korban_meninggal/'.$id));
        } else {
            $this->session->set_flashdata('error', 'Oops something went wrong');
            redirect(base_url('pelaporan_awal_korban_meninggal/lihat_korban_meninggal/'.$id));
        }
    }


}
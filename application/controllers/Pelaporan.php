<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller tambah pelaporan
 */
class Pelaporan extends MY_Controller
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

    public function index()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('warning', 'You do not have access to the registration menu');
            redirect(base_url('home'));
            return;
        }

        if (!$_POST) {
            $input = (object) $this->pelaporan->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->pelaporan->validate()) {     // Jika validasi gagal maka arahkan ke form register lagi
            $data['title'] = 'SIP Krisis Kesehatan';
            $data['input'] = $input;
            $data['page']  = 'pages/pelaporan/index';
            $data['breadcrumb_title']   = 'Pelaporan Awal Kejadian Krisis Kesehatan';
            $data['breadcrumb_path']    = 'Pelaporan Awal / Tambah Data';

            return $this->view($data);
        }

        // Input data
        if ($this->pelaporan->run($input)) {
            $this->session->set_flashdata('success', 'Successfully input pelaporan awal');
            redirect(base_url('pelaporan'));
        } else {
            $this->session->set_flashdata('error', 'Oops something went wrong');
            redirect(base_url('pelaporan'));
        }
    }

    public function reset()
    {
        redirect(base_url('pelaporan'));
    }

}

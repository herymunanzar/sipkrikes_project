<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller tambah penilaian
 */
class Penilaian extends MY_Controller
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
            $input = (object) $this->penilaian->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->penilaian->validate()) {     // Jika validasi gagal maka arahkan ke form register lagi
            $data['title'] = 'Rapid Health Assesment';
            $data['input'] = $input;
            $data['page']  = 'pages/penilaian/index';
            $data['breadcrumb_title']   = 'Register Penilaian';
            $data['breadcrumb_path']    = 'Penilaian / Tambah Data';

            return $this->view($data);
        }

        // Input data
        if ($this->penilaian->run($input)) {
            $this->session->set_flashdata('success', 'Successfully register assets');
            redirect(base_url('penilaian'));
        } else {
            $this->session->set_flashdata('error', 'Oops something went wrong');
            redirect(base_url('penilaian'));
        }
    }

    public function reset()
    {
        redirect(base_url('penilaian'));
    }

}

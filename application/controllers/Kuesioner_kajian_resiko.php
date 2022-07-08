<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller tambah kuesioner kajian resiko
 */
class Kuesioner_kajian_resiko extends MY_Controller
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
            $input = (object) $this->kuesioner_kajian_resiko->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->kuesioner_kajian_resiko->validate()) {     // Jika validasi gagal maka arahkan ke form register lagi
            $data['title'] = 'SIP Krisis Kesehatan';
            $data['input'] = $input;
            $data['page']  = 'pages/kuesioner_kajian_resiko/index';
            $data['breadcrumb_title']   = 'Kuesioner Kajian Risiko Krisis Kesehatan Kabupaten / Kota';
            $data['breadcrumb_path']    = 'Kuesioner Kajian Resiko / Tambah Data';

            return $this->view($data);
        }

        // Input data
        if ($this->kuesioner_kajian_resiko->run($input)) {
            //  print_r($this->db->last_query());
            $this->session->set_flashdata('success', 'Successfully input data kajian resiko');
            redirect(base_url('kajian_resiko'));
        } else {
            $this->session->set_flashdata('error', 'Oops something went wrong');
            redirect(base_url('kajian_resiko'));
        }
    }
}
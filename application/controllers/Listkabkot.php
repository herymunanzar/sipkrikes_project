<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list memunculkan list kabupaten kota
 */
class Listkabkot extends MY_Controller
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

    // get sub kabupaten/kota by provinsi
    public function index()
    {
        $prov_id = $this->input->post('id',TRUE);
        $data = $this->listkabkot->like('id_prov', $prov_id)->get();
        echo json_encode($data);
    }
}

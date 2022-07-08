<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list tampil Kapasitas Kuesioner Kajian Resiko
 */
class Kapasitas_kuesioner_kajian_resikos extends MY_Controller
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
        $data['content']            = $this->kapasitas_kuesioner_kajian_resikos->select([
                                        'kuesioner_kajian_resiko_kabkot.id AS id',
                                        'prov.nama_prov AS nama_prov',
                                        'kuesioner_kajian_resiko_kabkot.nama_kabkot AS nama_kabkot',
                                        'kuesioner_kajian_resiko_kabkot.nama_dinas AS nama_dinas',
                                        'kuesioner_kajian_resiko_kabkot.website AS website'])
                                        ->join('prov')
                                        ->get();
        $data['page']               = 'pages/kuesioner_kajian_resikos/index';
        //print_r($this->db->last_query());
        $this->view($data);
    }

    public function input_kapasitas($id_kuesioner_kajian_resiko_kabkot)
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('warning', 'You do not have access to the registration menu');
            redirect(base_url('home'));
            return;
        }

        if (!$_POST) {
            $input = (object) $this->kapasitas_kuesioner_kajian_resikos->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if(!$this->kapasitas_kuesioner_kajian_resikos->validate()){
            
            $data['title'] = 'SIP Krisis Kesehatan';
            $data['input'] = $input;
            $data['id'] = $id_kuesioner_kajian_resiko_kabkot;
            $data['page']  = 'pages/kuesioner_kajian_resikos/input_kapasitas';
            $data['breadcrumb_title']   = 'Kapasitas kuesioner Kajian Risiko Krisis Kesehatan Kabupaten / Kota';
            $data['breadcrumb_path']    = 'Kuesioner Kajian Resiko / List Data / Tambah Kapasitas';

            return $this->view($data);
        }

        // Input data
        //$this->kapasitas_kuesioner_kajian_resikos->table = 'kapasitas_kuesioner_kajian_resiko_kabkot';
        if ($this->kapasitas_kuesioner_kajian_resikos->run($input)) {
            //print_r($this->db->last_query());
            $this->session->set_flashdata('success', 'Successfully input data kapasitas kuesioner kajian resiko');
            redirect(base_url('kuesioner_kajian_resikos'));
        } else {
            $this->session->set_flashdata('error', 'Oops something went wrong');
            redirect(base_url('kuesioner_kajian_resikos'));
        }
    }

    public function detail($id)
    {
        if($this->session->userdata('id_user') == 'id_user'){
            $this->session->set_flashdata('error', 'Edit Access Denied!');
            redirect(base_url('kuesioner_kajian_resikos'));
        }

        $data['content'] = $this->kapasitas_kuesioner_kajian_resikos->where('id_kuesioner_kajian_resiko_kabkot', $id)->first();

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Not Found');
            redirect(base_url('kuesioner_kajian_resikos'));
        }

        if(!$_POST){
            $data['input'] = $data['content'];
        }else{
            $data['input'] = (object) $this->input->post(null, true);
        }

        if(!$this->kapasitas_kuesioner_kajian_resikos->validate()){
            $data['title']              = 'SIP Krisis Kesehatan';
            $data['page']               = 'pages/kuesioner_kajian_resikos/detail_kapasitas';
            $data['breadcrumb_title']   = 'Detail Kapasitas Kuesioner Kajian Risiko Krisis Kesehatan Kabupaten / Kota';
            $data['breadcrumb_path']    = 'Kuesioner Kajian Resiko / Detail Kapasitas / Kuesioner Kajian Resiko Id : '.$data['input']->id ;

            return $this->view($data);
        }
    }

    public function edit($id)
    {
        if($this->session->userdata('id_user') == 'id_user' && $this->session->userdata('role') == 'admin'){
            $this->session->set_flashdata('error', 'Edit Access Denied!');
            redirect(base_url('kuesioner_kajian_resikos'));
        }

        $data['content'] = $this->kapasitas_kuesioner_kajian_resikos->where('id', $id)->first();

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Mot Found');
            redirect(base_url('kuesioner_kajian_resikos'));
        }

        if(!$_POST){
            $data['input'] = $data['content'];
        }else{
            $data['input'] = (object) $this->input->post(null, true);
        }

        if(!$this->kapasitas_kuesioner_kajian_resikos->validate()){
            $data['title']              = 'SIP Krisis Kesehatan';
            $data['page']               = 'pages/kuesioner_kajian_resikos/edit_kapasitas';
            $data['breadcrumb_title']   = 'Edit Kapasitas Kuesioner Kajian Risiko Krisis Kesehatan Kabupaten / Kota';
            $data['breadcrumb_path']    = 'Kuesioner Kajian Resiko / Detail / Edit Data / Kapasitas Kueisioner Kajian Resiko Id : '.$data['input']->id ;

            return $this->view($data);
        }

        if($this->kapasitas_kuesioner_kajian_resikos->where('id', $id)->update($data['input'])) {
            $this->session->set_flashdata('success', 'Data Change Successfully');
        }else{
            $this->session->set_flashdata('error', 'Oops! An Error Occurred');
        }

        redirect(base_url('kuesioner_kajian_resikos'));
    }
}
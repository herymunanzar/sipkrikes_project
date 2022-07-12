<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list Pelaporans
 */
class Pelaporan_awal_korban_luka extends MY_Controller
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

    public function lihat_korban_luka($id)
    {
        $this->session->unset_userdata('keyword');

        $data['title']              = 'SIP Krisis Kesehatan';
        $data['breadcrumb_title']   = 'Pelaporan Awal Lokasi Bencana';
        $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / List Korban Luka';
        $data['content']            = $this->pelaporan_awal_korban_luka->select([
                                        'pelaporan_awal_korban_luka.id AS id',
                                        'pelaporan_awal_korban_luka.nama_fasilitas_pelayanan AS nama_fasilitas_pelayanan',
                                        'kabkot.nama_kabkot AS nama_kabkot',
                                        'pelaporan_awal_korban_luka.jumlah_rawat_inap_laki AS jumlah_rawat_inap_laki',
                                        'pelaporan_awal_korban_luka.jumlah_rawat_inap_perempuan AS jumlah_rawat_inap_perempuan',
                                        'pelaporan_awal_korban_luka.jumlah_rawat_jalan_laki AS jumlah_rawat_jalan_laki',
                                        'pelaporan_awal_korban_luka.jumlah_rawat_jalan_perempuan AS jumlah_rawat_jalan_perempuan'])
                                        ->join('pelaporan_awal')
                                        ->join('kabkot')
                                        ->where('pelaporan_awal_korban_luka.id_pelaporan_awal', $id)
                                        ->get();
        $data['page']               = 'pages/pelaporan_awal_korban_luka/lihat_korban_luka';

        $this->view($data);
    }

    public function input_korban_luka($id)
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
            $input = (object) $this->pelaporan_awal_korban_luka->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }
        
        if (!$this->pelaporan_awal_korban_luka->validate()) {     // Jika validasi gagal maka arahkan ke form register lagi
            $data['title'] = 'SIP Krisis Kesehatan';
            $data['breadcrumb_title']   = 'Pelaporan Awal Kejadian Krisis Kesehatan';
            $data['breadcrumb_path']    = 'Pelaporan Awal / List Data / Input Korban Luka';
            $data['page']  = 'pages/pelaporan_awal_korban_luka/input_korban_luka';
            $data['input'] = $input;

            return $this->view($data);
        }
        
        //Input data
        //$this->pelaporan->table = 'pelaporan_awal';
        if ($this->pelaporan_awal_korban_luka->run($input)) {
            $this->session->set_flashdata('success', 'Successfully input korban luka');
            redirect(base_url('pelaporan_awal_korban_luka/lihat_korban_luka/'.$id));
        } else {
            $this->session->set_flashdata('error', 'Oops something went wrong');
            redirect(base_url('pelaporan_awal_korban_luka/lihat_korban_luka/'.$id));
        }
    }


}
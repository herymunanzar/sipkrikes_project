<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Kontroller list Pelaporans
 */
class Pelaporans extends MY_Controller
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
        $data['breadcrumb_title']   = 'Pelaporan Awal Kejadian Krisis Kesehatan';
        $data['breadcrumb_path']    = 'Pelaporan Awal / List Data';
        $data['content']            = $this->pelaporans->select([
                                        'pelaporan_awal.id AS id',
                                        'pelaporan_awal.nama_dinas AS nama_dinas',
                                        'pelaporan_awal.jenis_bencana AS jenis_bencana',
                                        'prov.nama_prov AS nama_prov'])
                                        ->join('prov')
                                        ->get();
        $data['page']               = 'pages/pelaporans/index';

        $this->view($data);
    }

    public function detail($id)
    {
        if($this->session->userdata('id_user') == 'id_user'){
            $this->session->set_flashdata('error', 'Edit Access Denied!');
            redirect(base_url('pelaporans'));
        }

        //$data['content'] = $this->pelaporans->where('id', $id)->first();

        $data['content'] = $this->pelaporans->select([
                                'pelaporan_awal.id AS id',
                                'pelaporan_awal.nama_dinas AS nama_dinas',
                                'pelaporan_awal.jenis_bencana AS jenis_bencana',
                                'pelaporan_awal.waktu_kejadian AS waktu_kejadian',
                                'pelaporan_awal.deskripsi_bencana AS deskripsi_bencana',
                                'prov.nama_prov AS nama_prov',
                                'kabkot.nama_kabkot AS nama_kabkot',
                                'pelaporan_awal.nama_kec AS nama_kec',
                                'pelaporan_awal.desa_dusun AS desa_dusun',
                                'pelaporan_awal.jumlah_penduduk_terancam AS jumlah_penduduk_terancam',
                                'pelaporan_awal.topografi AS topografi',
                                'pelaporan_awal.jumlah_korban_meninggal AS jumlah_korban_meninggal',
                                'pelaporan_awal.jumlah_korban_hilang AS jumlah_korban_hilang',
                                'pelaporan_awal.jumlah_luka_berat_rawat_inap AS jumlah_luka_berat_rawat_inap',
                                'pelaporan_awal.jumlah_luka_ringan_rawat_jalan AS jumlah_luka_ringan_rawat_jalan',
                                'pelaporan_awal.jumlah_pengungsi_penduduk_rentan AS jumlah_pengungsi_penduduk_rentan',
                                'pelaporan_awal.fasilitas_umum_akses AS fasilitas_umum_akses',
                                'pelaporan_awal.fasilitas_umum_jalur_komunikasi AS fasilitas_umum_jalur_komunikasi',
                                'pelaporan_awal.fasilitas_umum_jaringan_listrik AS fasilitas_umum_jaringan_listrik',
                                'pelaporan_awal.fasilitas_umum_air_bersih AS fasilitas_umum_air_bersih',
                                'pelaporan_awal.kondisi_faskes_kondisi AS kondisi_faskes_kondisi',
                                'pelaporan_awal.kondisi_faskes_fungsi_pelayanan AS kondisi_faskes_fungsi_pelayanan',
                                'pelaporan_awal.upaya_penanggulangan_pelayanan_kesehatan AS upaya_penanggulangan_pelayanan_kesehatan',
                                'pelaporan_awal.upaya_penanggulangan_pengendalian AS upaya_penanggulangan_pengendalian',
                                'pelaporan_awal.upaya_penanggulangan_pelayanan_gizi AS upaya_penanggulangan_pelayanan_gizi',
                                'pelaporan_awal.upaya_penanggulangan_pelayanan_kesehatan_jiwa AS upaya_penanggulangan_pelayanan_kesehatan_jiwa',
                                'pelaporan_awal.upaya_penanggulangan_reproduksi_dan_kia AS upaya_penanggulangan_reproduksi_dan_kia',
                                'pelaporan_awal.upaya_penanggulangan_dvi AS upaya_penanggulangan_dvi',
                                'pelaporan_awal.upaya_penanggulangan_logistik_kesehatan AS upaya_penanggulangan_logistik_kesehatan',
                                'pelaporan_awal.hambatan AS hambatan',
                                'pelaporan_awal.bantuan_yang_diperlukan AS bantuan_yang_diperlukan',
                                'pelaporan_awal.rencana_tindak_lanjut AS rencana_tindak_lanjut'
                            ])
                            ->join('prov')
                            ->join('kabkot')
                            ->where('pelaporan_awal.id', $id)
                            ->first();

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Not Found');
            redirect(base_url('pelaporans'));
        }

        if(!$_POST){
            $data['input'] = $data['content'];
        }else{
            $data['input'] = (object) $this->input->post(null, true);
        }

        if(!$this->pelaporans->validate()){
            $data['title']              = 'Rapid Health Assesment';
            $data['page']               = 'pages/pelaporans/detail';
            $data['breadcrumb_title']   = 'Detail Pelaporan Awal Kejadian Bencana';
            $data['breadcrumb_path']    = 'Pelaporan / Detail Data / Laporan Id : '.$data['input']->id ;

            return $this->view($data);
        }
    }

    // Edit data pelaporan

    public function edit($id)
    {
        if($this->session->userdata('id_user') == 'id_user' && $this->session->userdata('role') == 'admin'){
            $this->session->set_flashdata('error', 'Edit Access Denied!');
            redirect(base_url('pelaporans'));
        }

        $data['content'] = $this->pelaporans->where('id', $id)->first();

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Mot Found');
            redirect(base_url('pelaporans'));
        }

        if(!$_POST){
            $data['input'] = $data['content'];
        }else{
            $data['input'] = (object) $this->input->post(null, true);
        }

        if(!$this->pelaporans->validate()){
            $data['title']              = 'Rapid Health Assesment';
            $data['page']               = 'pages/pelaporans/edit';
            $data['breadcrumb_title']   = 'Edit Pelaporan Awal Kejadian Bencana';
            $data['breadcrumb_path']    = 'Pelaporan / Edit Data / Laporan Id : '.$data['input']->id ;

            return $this->view($data);
        }

        if($this->pelaporans->where('id', $id)->update($data['input'])) {
            $this->session->set_flashdata('success', 'Data Change Successfully');
        }else{
            $this->session->set_flashdata('error', 'Oops! An Error Occurred');
        }

        redirect(base_url('pelaporans'));
    }

    public function hapus($id)
    {
        if($this->session->userdata('id_user') == 'id_user' && $this->session->userdata('role') == 'admin'){
            $this->session->set_flashdata('error', 'Delete Access Denied!');
            redirect(base_url('pelaporans'));
        }

        $data['content'] = $this->pelaporans->where('id', $id)->first();

        if(!$data['content']){
            $this->session->set_flashdata('warning', 'Sorry, Data Not Found');
            redirect(base_url('pelaporans'));
        }

        if($this->pelaporans->where('id', $id)->drop_data_pelaporan()) {
            $this->session->set_flashdata('success', 'Data Delete Successfully');
        }else{
            $this->session->set_flashdata('error', 'Oops! An Error Occurred');
        }
        redirect(base_url('pelaporans'));
    }

    public function cetak($id)
    {

        $data = $this->pelaporans->where('id', $id)->first();
        //print_r($data);
        $pdf = new TCPDF('P', 'cm', 'A4', 'true');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->setMargins(2, 2, 2);

        $pdf->AddPage();
        $pdf->SetFont('times', '', 14);
        $pdf->SetHeaderMargin(false);
        $pdf->SetFooterMargin(false);
        $pdf->Ln(1);
        $pdf->Ln(0);
        $html = '<h4 style="text-align:center">FORMULIR PELAPORAN AWAL KEJADIAN BENCANA</h4>
                 <h4 style="text-align:center">RHA-FORM B1</h4>
                    <br>
                    <table>
                        <tr>
                            <th width="65%"></th>
                            <th width="5%"></th>
                            <th width="35%"></th>
                        </tr>
                        <tr>
                            <td><b>A. Jenis Bencana</b></td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->jenis.'</td>
                        </tr>
                        <tr>
                            <td><b>B. Deskripsi Bencana</b></td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->deskripsi.'</td>
                        </tr>
                        <tr>
                            <td><b>C. Lokasi Bencana</b></td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 1. Provinsi</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->nama_prov.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 2. Kabupaten / Kota</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->nama_kabkot.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 3. Kecamatan</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->kec.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 4. Desa/Kelurahan</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->desa.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 5. Dusun</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->dusun.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 6. letak Geografis</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->letak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 6. letak Geografis</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->letak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; Lain - Lain</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->lainnya.'</td>
                        </tr>
                        <tr>
                            <td><b>D. Waktu Kejadian Bencana</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 1. Waktu</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->waktu.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 2. Tanggal</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->tanggal.'</td>
                        </tr>
                        <tr>
                            <td><b>E. Jumlah Korban</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 1. Meninggal</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->meninggal.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 2. Hilang</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->hilang.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 3. Luka Berat</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->luka_berat.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 4. Luka Ringan</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->luka_ringan.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 5. Pengungsi</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jiwa</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->pengungsi.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; KK</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->pengungsi_kk.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lokasi Pengungsian</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->lokasi_ungsi.'</td>
                        </tr>
                        <tr>
                            <td><b>F. Fasilitas Umum</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 1. Akses ke Lokasi</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mudah dengan</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->akses_mudah.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sulit karena</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->akses_sukar.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 2. Jalur Komunikasi Yang Masih Dapat Digunakan</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->jalur.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 3. Jalur Listrik</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->listrik.'</td>
                        </tr>
                        <tr>
                            <td><b>G. Sarana Kesehatan yang Rusak</b></td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 1. Jumlah berdasarkan Jenis Fasilitas Kesehatan</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A. Rumah Sakit</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->rs_bangun_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->rs_bangun_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->rs_layan_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->rs_layan_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; B. Puskesmas</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->puskesmas_bangun_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->puskesmas_bangun_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->puskesmas_layan_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->puskesmas_layan_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C. Pustu</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->pustu_bangun_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->pustu_bangun_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->pustu_layan_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->pustu_layan_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; D. Gudang Farmasi</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->farmasi_bangun_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->farmasi_bangun_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->farmasi_layan_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->farmasi_layan_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E. Polindes</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->polindes_bangun_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bangunan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->polindes_bangun_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->polindes_layan_rusak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fungsi Pelayanan Tidak Rusak</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->polindes_layan_tidak.'</td>
                        </tr>
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; 2. Sumber Air Bersih</td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->air.'</td>
                        </tr>
                        <tr>
                            <td><b> H. Upaya Penanggulangan </b></td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->upaya.'</td>
                        </tr>
                        <tr>
                            <td><b> I. Bantuan Yang Diperlukan </b></td>
                            <td align="right">:&nbsp;&nbsp;</td>
                            <td>'.$data->bantuan.'</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>...............'.date('d-M-Y').'</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Mengetahui</td>
                        </tr>
                        <tr>
                            <td> Petugas Yang Melaporkan</td>
                            <td></td>
                            <td> Kepala Puskesmas ............</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> Kabupaten / Kota ............</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>'.$this->session->userdata('nama').'</td>
                            <td></td>
                            <td>.........................</td>
                        </tr>
                    </table>';

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, 2);
        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        $pdf->Output('cetak_pelaporan.pdf', 'I');

    }

}

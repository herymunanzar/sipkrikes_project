<?php

defined('BASEPATH') or exit('No direct script access allowed');


class MY_Controller extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $model = strtolower(get_class($this));  // This mewakili file2 yang ada di folder Controllers
        // Apakah terdapat file model yang namanya sama dengan controller saat ini?
        if (file_exists(APPPATH . 'models/' . ucfirst($model) . '_model.php')) {
            // Param 1: load model, 2: nama controller - pasang model pada controller saat ini
            $this->load->model(ucfirst($model) . '_model', $model, true);
        }
    }

    /**
     * Load view with default layouts
     */
    public function view($data, $openLoginPage = false)
    {
        if ($openLoginPage) {
            $this->load->view('pages/auth/login', $data);
        } else {
            $this->load->view('layouts/dashboard', $data);
        }
    }

    // public function download()
    // {
    //     $spreadsheet = new Spreadsheet();

    //     $sheet = $spreadsheet->getActiveSheet(0);
    //     $sheet->setCellValue('A1', 'Centers');
    //     $sheet->setCellValue('B1', 'Purchase Date');
    //     $sheet->setCellValue('C1', 'IT Aset Type');
    //     $sheet->setCellValue('D1', 'IT Aset Name');
    //     $sheet->setCellValue('E1', 'Serial Number');
    //     $sheet->setCellValue('F1', 'IMEI Device');
    //     $sheet->setCellValue('G1', 'License Software/Device');
    //     $sheet->setCellValue('H1', 'Type Device');
    //     $sheet->setCellValue('I1', 'Model Device');
    //     $sheet->setCellValue('J1', 'Os / Fimware');
    //     $sheet->setCellValue('K1', 'Processor');
    //     $sheet->setCellValue('L1', 'Memory Capacity');
    //     $sheet->setCellValue('M1', 'Memory Type');
    //     $sheet->setCellValue('N1', 'Storage Capacity');
    //     $sheet->setCellValue('O1', 'Storage Type');
    //     $sheet->setCellValue('P1', 'License Expiration Date');
    //     $sheet->setCellValue('Q1', 'Purchase Number');
    //     $sheet->setCellValue('R1', 'Device / License Price');
    //     $sheet->setCellValue('S1', 'Status Aset');
        
    //     $column = 2;

    //     $sheet = $spreadsheet->getActiveSheet(0);
    //     $sheet->setCellValue('A1' . $column, 'Centers');
    //     $sheet->setCellValue('B1' . $column, 'Purchase Date');
    //     $sheet->setCellValue('C1' . $column, 'IT Aset Type');
    //     $sheet->setCellValue('D1' . $column, 'IT Aset Name');
    //     $sheet->setCellValue('E1' . $column, 'Serial Number');
    //     $sheet->setCellValue('F1' . $column, 'IMEI Device');
    //     $sheet->setCellValue('G1' . $column, 'License Software/Device');
    //     $sheet->setCellValue('H1' . $column, 'Type Device');
    //     $sheet->setCellValue('I1' . $column, 'Model Device');
    //     $sheet->setCellValue('J1' . $column, 'Os / Fimware');
    //     $sheet->setCellValue('K1' . $column, 'Processor');
    //     $sheet->setCellValue('L1' . $column, 'Memory Capacity');
    //     $sheet->setCellValue('M1' . $column, 'Memory Type');
    //     $sheet->setCellValue('N1' . $column, 'Storage Capacity');
    //     $sheet->setCellValue('O1' . $column, 'Storage Type');
    //     $sheet->setCellValue('P1' . $column, 'License Expiration Date');
    //     $sheet->setCellValue('Q1' . $column, 'Purchase Number');
    //     $sheet->setCellValue('R1' . $column, 'Device / License Price');
    //     $sheet->setCellValue('S1' . $column, 'Status Aset');

    //     $writer = new Xlsx($spreadsheet);
        
    //     $filename = 'Data Aset';
        
    //     header('Content-Type: application/vnd.ms-excel');
    //     header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
    //     header('Cache-Control: max-age=0');
        
    //     $writer->save('php://output'); // download file 
    
    // }
}

/* End of file MY_Controller.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $is_login = $this->session->userdata('is_login');

        if ($is_login) {
            redirect(base_url('home'));
            return;
        }
    }
    
    public function index()
    {
        if (!$_POST) {
            $input = (object) $this->login->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->login->validate()) {
            $data['title'] = 'SIP Krisis Kesehatan';
            $data['input'] = $input;

            return $this->view($data, true);
        }

        if ($this->login->run($input)) {
            $this->session->set_flashdata('success', 'Successfully logged in');
            redirect(base_url('home'));
        } else {
            $this->session->set_flashdata('error', 'Invalid e-mail/Password or your account is not active');
            redirect(base_url('login'));
        }
    }
}

/* End of file Login.php */

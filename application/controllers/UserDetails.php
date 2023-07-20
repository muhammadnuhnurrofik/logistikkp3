<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserDetails extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    function index()
    {

        $this->load->library('user_agent');

        $data['browser'] = $this->agent->browser();

        $data['browser_version'] = $this->agent->version();

        $data['os'] = $this->agent->platform();

        $data['ip_address'] = $this->input->ip_address();

        $this->load->view('user_details', $data);
    }
}

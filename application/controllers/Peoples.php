<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peoples extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'List of peoples';

        //load library
        $this->load->model('Peoples_model', 'peoples');

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // PAGINATION
        $this->load->library('pagination');


        //config
        $this->db->like('name', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 8;

        //initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);




        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}

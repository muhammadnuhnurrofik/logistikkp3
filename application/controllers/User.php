<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Import_model', 'import');
        $this->load->model('Lokal_model', 'lokal');
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated!!
          </div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong current password!!
          </div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                New password cannot be the same as current password!!
              </div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password changed!!
          </div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    public function statusMaterial()
    {


        $data['nama'] = 'Status Material';
        $data['title'] = 'Status Material';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['start'] = $this->uri->segment(3);
        $data['tubemk'] = $this->lokal->getTubemk();
        $data['tuberd'] = $this->lokal->getTuberd();
        $data['propmk'] = $this->lokal->getPropmk();
        $data['proprd'] = $this->lokal->getProprd();
        $data['ignmk'] = $this->lokal->getIgnmk();
        $data['ignrd'] = $this->lokal->getIgnrd();
        $data['n7010'] = $this->lokal->getNozzleRD7010();
        $data['n701'] = $this->lokal->getNozzleRD701();
        $data['n702'] = $this->lokal->getNozzleRD702();
        $data['stbmk'] = $this->lokal->getStbmk();
        $data['stbrd'] = $this->lokal->getStbrd();

        $this->load->view('templates/headerS', $data);
        $this->load->view('user/allow/statusmaterial', $data);
        $this->load->view('templates/footerS');
    }

    public function raw()
    {

        $data['title'] = 'Status Material';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Peoples_model', 'peoples');


        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getAllPeoples();

        $this->load->view('templates/headerS', $data);
        $this->load->view('user/allow/raw', $data);
        $this->load->view('templates/footerS');
    }

    public function materialImport()
    {

        $data['nama'] = 'Import';
        $data['title'] = 'Material Import';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // PAGINATION
        $this->load->library('pagination');

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->import->getAllKomponen();

        $this->load->view('templates/headerS', $data);
        $this->load->view('user/allow/materialImport', $data);
        $this->load->view('templates/footerS');
    }
    public function materialLokal()
    {

        $data['nama'] = 'Lokal';
        $data['title'] = 'Material Lokal';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // PAGINATION
        $this->load->library('pagination');

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->lokal->getAllKomponen();

        $this->load->view('templates/headerS', $data);
        $this->load->view('user/allow/materialLokal', $data);
        $this->load->view('templates/footerS');
    }
    public function RD702()
    {

        $data['nama'] = 'RD-702';
        $data['title'] = 'Material Lokal';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // PAGINATION
        $this->load->library('pagination');

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->lokal->RD702();

        $this->load->view('templates/headerS', $data);
        $this->load->view('user/allow/RD702', $data);
        $this->load->view('templates/footerS');
    }

    public function RD7010()
    {

        $data['nama'] = 'RD-7010';
        $data['title'] = 'Material Lokal';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // PAGINATION
        $this->load->library('pagination');

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->lokal->RD7010();

        $this->load->view('templates/headerS', $data);
        $this->load->view('user/allow/RD7010', $data);
        $this->load->view('templates/footerS');
    }
    public function RD701()
    {

        $data['nama'] = 'RD-701';
        $data['title'] = 'Material Lokal';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // PAGINATION
        $this->load->library('pagination');

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->lokal->RD701();

        $this->load->view('templates/headerS', $data);
        $this->load->view('user/allow/RD701', $data);
        $this->load->view('templates/footerS');
    }
    public function FZ32()
    {

        $data['nama'] = 'FZ-32';
        $data['title'] = 'Material Lokal';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // PAGINATION
        $this->load->library('pagination');

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->lokal->FZ32();

        $this->load->view('templates/headerS', $data);
        $this->load->view('user/allow/FZ32', $data);
        $this->load->view('templates/footerS');
    }
    public function Innert()
    {

        $data['nama'] = 'Innert';
        $data['title'] = 'Material Lokal';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // PAGINATION
        $this->load->library('pagination');

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->lokal->Innert();

        $this->load->view('templates/headerS', $data);
        $this->load->view('user/allow/innert', $data);
        $this->load->view('templates/footerS');
    }
}

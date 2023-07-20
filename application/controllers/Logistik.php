<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logistik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // url controller ($this->load->helper('url');) tidak cocok disimpan di sini, lebih baik di autoload
        $this->load->library('form_validation');
        $this->load->model('Keluar_model', 'keluar');
        $this->load->model('Masuk_model', 'masuk');
        $this->load->model('Peoples_model', 'peoples');
        $this->load->model('Tkeluar_model', 'tkeluar');
        $this->load->model('Tmasuk_model', 'tmasuk');
        $this->load->model('Komponen_model', 'komponen');
    }

    public function index()
    {
        $data['title'] = 'Logistik KP3';
        $this->load->view('templates/headerL', $data);
        $this->load->view('logistik/index', $data);
        $this->load->view('templates/footerL');
    }

    public function keluar()
    {
        $data['name'] = "Logistik KP.3";
        $data['title'] = 'Transaksi Material Keluar';
        $data['metu'] = $this->tkeluar->join();
        $data['keluar'] = $this->db->get('tkeluar')->result_array();

        // ambil data keyword

        // PAGINATION
        $this->load->library('pagination');

        $data['start'] = $this->uri->segment(3);
        $data['tkeluar'] = $this->tkeluar->getAllPeoples();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/mkeluar/keluar', $data);
        $this->load->view('templates/footerT');
    }
    public function detailKeluar($id)
    {
        $data['title'] = 'Detail Data Material';
        $data['peoples'] = $this->keluar->getPeoplesById($id);
        $this->load->view('templates/headerL', $data);
        $this->load->view('logistik/mkeluar/detailKeluar', $data);
        $this->load->view('templates/footerL');
    }

    public function tambahKeluar()
    {
        $data['title'] = 'Form Tambah Data Material';
        $this->form_validation->set_rules('idno', 'IDNO', 'required|numeric');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('program', 'Program', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('qty', 'Qty', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerL', $data);
            $this->load->view('logistik//mkeluarkeluar/tambah');
            $this->load->view('templates/footerL');
        } else {
            $this->Keluar_model->tambahDataMaterial();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('logistik/keluar');
        }
    }

    public function ubahKeluar($id)
    {
        $data['title'] = 'Form Transaksi Material Keluar';
        $data['tkeluar'] = $this->keluar->getPeoplesById($id);

        $this->form_validation->set_rules('idno', 'IDNO', 'required|numeric');
        $this->form_validation->set_rules('tgl', 'Tgl', 'required');
        $this->form_validation->set_rules('mt', 'Mt', 'required');
        $this->form_validation->set_rules('reff', 'Reff', 'required');
        $this->form_validation->set_rules('user', 'User', 'required');
        $this->form_validation->set_rules('jml_k', 'Jml', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerL', $data);
            $this->load->view('logistik/mkeluar/ubahKeluar', $data);
            $this->load->view('templates/footerL');
        } else {
            $this->keluar->ubahDataMaterial();
            $this->session->set_flashdata('flash', 'Di input');
            redirect('logistik/keluar');
        }
    }

    public function masuk()
    {

        $data['title'] = 'Transaksi Material Masuk';
        $data['row'] = $this->tmasuk->join();
        $data['masuk'] = $this->db->get('tmasuk')->result_array();

        $this->load->library('pagination');
        $data['start'] = $this->uri->segment(3);
        $data['tmasuk'] = $this->tmasuk->getAllPeoples();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/mmasuk/masuk', $data);
        $this->load->view('templates/footerT');
    }
    public function detailMasuk($id)
    {
        $data['title'] = 'Detail Data Material';
        $data['peoples'] = $this->masuk->getPeoplesById($id);
        $this->load->view('templates/headerL', $data);
        $this->load->view('logistik/mmasuk/detailMasuk', $data);
        $this->load->view('templates/footerL');
    }

    public function ubahMasuk($id)
    {
        $data['title'] = 'Form Ubah Data Material';
        $data['tmasuk'] = $this->masuk->getPeoplesById($id);

        $this->form_validation->set_rules('idno', 'IDNO', 'required|numeric');
        $this->form_validation->set_rules('tgl', 'Tgl', 'required');
        $this->form_validation->set_rules('reff', 'Reff', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('jml', 'Jml', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerL', $data);
            $this->load->view('logistik/mmasuk/ubahMasuk', $data);
            $this->load->view('templates/footerL');
        } else {
            $this->masuk->ubahDataMaterial();
            $this->session->set_flashdata('flash', 'di input');
            redirect('logistik/masuk');
        }
    }

    public function form()
    {
        $data['name'] = "Logistik KP.3";
        $data['title'] = 'Material Masuk';
        $data['peoples'] = $this->masuk->join();
        $data['masuk'] = $this->db->get('tmasuk')->result_array();

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
        $data['peoples'] = $this->masuk->getAllPeoples();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/mmasuk/form', $data);
        $this->load->view('templates/footerT');
    }

    public function material()
    {

        $data['name'] = "Logistik KP.3";
        $data['title'] = 'Material';
        $data['peoples'] = $this->masuk->join();
        $data['masuk'] = $this->db->get('tmasuk')->result_array();

        $data['start'] = $this->uri->segment(4);
        $data['peoples'] = $this->peoples->getAllPeoples();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/material/material', $data);
        $this->load->view('templates/footerT');
    }

    public function detailMaterial($id)
    {
        $data['title'] = 'Detail Data Material';
        $data['peoples'] = $this->peoples->getPeoplesById($id);
        $this->load->view('templates/headerL', $data);
        $this->load->view('logistik/material/detailMaterial', $data);
        $this->load->view('templates/footerL');
    }

    public function tambahMaterial()
    {
        $data['title'] = 'Form Tambah Data Material';
        $this->form_validation->set_rules('idno', 'IDNO', 'required|numeric');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('tgl', 'Tgl', 'required');
        $this->form_validation->set_rules('reff', 'reff', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('program', 'Program', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('suppl', 'Suppl', 'required');
        $this->form_validation->set_rules('qty', 'Qty', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerL', $data);
            $this->load->view('logistik/material/tambahMaterial');
            $this->load->view('templates/footerL');
        } else {
            $this->peoples->tambahDataMaterial();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('logistik/material');
        }
    }

    public function ubahMaterial($id)
    {
        $data['title'] = 'Form Ubah Data Material';
        $data['peoples'] = $this->peoples->getPeoplesById($id);

        $this->form_validation->set_rules('idno', 'IDNO', 'required|numeric');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('program', 'Program', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('suppl', 'Suppl', 'required');
        $this->form_validation->set_rules('qty', 'Qty', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerL', $data);
            $this->load->view('logistik/material/ubahMaterial', $data);
            $this->load->view('templates/footerL');
        } else {
            $this->peoples->ubahDataMaterial();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('logistik/material');
        }
    }

    public function hapus($id)
    {
        $this->peoples->hapusDataMaterial($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('logistik/material/material');
    }

    public function formKeluar()
    {
        $data['name'] = "Logistik KP.3";
        $data['title'] = 'Material Keluar';
        $data['peoples'] = $this->keluar->join();
        $data['masuk'] = $this->db->get('tkeluar')->result_array();

        // ambil data keyword

        // PAGINATION
        $this->load->library('pagination');


        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->keluar->getAllPeoples();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/mkeluar/formKeluar', $data);
        $this->load->view('templates/footerT');
    }

    public function komponen()
    {

        $data['name'] = "Logistik KP.3";
        $data['title'] = 'Komponen';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        $data['user'] = [
            'date_created' => time()
        ];


        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->komponen->getAllkomponen();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/komponen/komponen', $data);
        $this->load->view('templates/footerT');
    }
    public function tambahKomponen()
    {
        $data['title'] = 'Form Tambah Data Komponen';
        $this->form_validation->set_rules('idno', 'IDNO', 'required|numeric');
        $this->form_validation->set_rules('tgl', 'Tgl', 'required');
        $this->form_validation->set_rules('reff', 'Reff', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('qou', 'QoU', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('source', 'Source', 'required');
        $this->form_validation->set_rules('qty', 'Qty', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerL', $data);
            $this->load->view('logistik/komponen/tambahKomponen');
            $this->load->view('templates/footerL');
        } else {
            $this->komponen->tambahDataKomponen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('logistik/komponen');
        }
    }
    public function detailKomponen($id)
    {
        $data['title'] = 'Detail Data Material';
        $data['komponen'] = $this->komponen->getKomponenById($id);
        $this->load->view('templates/headerL', $data);
        $this->load->view('logistik/komponen/detailKomponen', $data);
        $this->load->view('templates/footerL');
    }

    public function ubahKomponen($id)
    {
        $data['title'] = 'Form Ubah Data Komponen';
        $data['komponen'] = $this->komponen->getKomponenById($id);

        $this->form_validation->set_rules('idno', 'IDNO', 'required|numeric');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('spec', 'Spec', 'required');
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('qou', 'QoU', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('source', 'Source', 'required');
        $this->form_validation->set_rules('qty', 'Qty', 'required|numeric');
        $this->form_validation->set_rules('ket', 'Ket', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerL', $data);
            $this->load->view('logistik/komponen/ubahKomponen', $data);
            $this->load->view('templates/footerL');
        } else {
            $this->komponen->ubahDataKomponen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('logistik/komponen');
        }
    }

    public function hapusKomponen($id)
    {
        $this->komponen->hapusDataKomponen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('logistik/komponen');
    }

    public function formKomponenk()
    {
        $data['title'] = 'Komponen Keluar';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->komponen->getAllKomponen();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/kkeluar/formKomponenk', $data);
        $this->load->view('templates/footerT');
    }

    public function KomponenK()
    {
        $data['title'] = 'Transaksi Komponen Keluar';
        $data['metu'] = $this->komponen->joinK();
        $data['komponenk'] = $this->db->get('komponen')->result_array();

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->komponen->getAllKomponen();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/kkeluar/KomponenK', $data);
        $this->load->view('templates/footerT');
    }

    public function detailKomponenK($id)
    {
        $data['title'] = 'Detail Data Material';
        $data['komponen'] = $this->komponen->getKomponenById($id);
        $this->load->view('templates/headerL', $data);
        $this->load->view('logistik/kkeluar/detailKomponenK', $data);
        $this->load->view('templates/footerL');
    }

    public function ubahKomponenK($id)
    {
        $data['title'] = 'Form Transaksi Material Keluar';
        $data['kkeluar'] = $this->komponen->getKomponenById($id);

        $this->form_validation->set_rules('idno', 'IDNO', 'required|numeric');
        $this->form_validation->set_rules('tgl', 'Tgl', 'required');
        $this->form_validation->set_rules('mt', 'Mt', 'required');
        $this->form_validation->set_rules('reff', 'Reff', 'required');
        $this->form_validation->set_rules('user', 'User', 'required');
        $this->form_validation->set_rules('jml_k', 'Jml', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerL', $data);
            $this->load->view('logistik/kkeluar/ubahKomponenK', $data);
            $this->load->view('templates/footerL');
        } else {
            $this->komponen->ubahDataKomponenK();
            $this->session->set_flashdata('flash', 'Di input');
            redirect('logistik/Komponenk');
        }
    }
    public function formKomponenM()
    {
        $data['title'] = 'Komponen Masuk';
        $data['komponen'] = $this->db->get('komponen')->result_array();

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->komponen->getAllKomponen();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/kmasuk/formKomponenM', $data);
        $this->load->view('templates/footerT');
    }

    public function KomponenM()
    {
        $data['title'] = 'Transaksi Komponen Keluar';
        $data['metu'] = $this->komponen->joinM();
        $data['komponenm'] = $this->db->get('komponen')->result_array();

        $data['start'] = $this->uri->segment(3);
        $data['komponen'] = $this->komponen->getAllKomponen();

        $this->load->view('templates/headerT', $data);
        $this->load->view('logistik/kmasuk/KomponenM', $data);
        $this->load->view('templates/footerT');
    }

    public function detailKomponenM($id)
    {
        $data['title'] = 'Detail Data Material';
        $data['komponen'] = $this->komponen->getKomponenById($id);
        $this->load->view('templates/headerL', $data);
        $this->load->view('logistik/kmasuk/detailKomponenM', $data);
        $this->load->view('templates/footerL');
    }

    public function ubahKomponenM($id)
    {
        $data['title'] = 'Form Transaksi Material Keluar';
        $data['kmasuk'] = $this->komponen->getKomponenById($id);

        $this->form_validation->set_rules('idno', 'IDNO', 'required|numeric');
        $this->form_validation->set_rules('tgl', 'Tgl', 'required');
        $this->form_validation->set_rules('reff', 'Reff', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('jml', 'Jml', 'required|numeric');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headerL', $data);
            $this->load->view('logistik/kmasuk/ubahKomponenM', $data);
            $this->load->view('templates/footerL');
        } else {
            $this->komponen->ubahDataKomponenM();
            $this->session->set_flashdata('flash', 'Di input');
            redirect('logistik/Komponenm');
        }
    }
}

<?php

class Peoples_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function getPeoples($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->or_like('name', $keyword);
        }
        if ($keyword) {
            $this->db->or_like('spec', $keyword);
        }
        if ($keyword) {
            $this->db->or_like('idno', $keyword);
        }
        if ($keyword) {
            $this->db->or_like('location', $keyword);
        }
        if ($keyword) {
            $this->db->or_like('suppl', $keyword);
        }
        return $this->db->get('peoples', $limit, $start)->result_array();
    }

    public function countAllPeoples()
    {
        return $this->db->get('peoples')->num_rows();
    }

    public function getPeoplesById($id)
    {
        return $this->db->get_where('peoples', ['id' => $id])->row_array();
    }

    public function tambahDataMaterial()
    {
        $data = [
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'name' => $this->input->post('name', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'tgl' => $this->input->post('tgl', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'reff' => $this->input->post('reff', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'spec' => $this->input->post('spec', true), //menggunakan "true" untuk mengamankan dari injeksi atau hacker, sebagai pengganti "htmlspecialchars"
            'unit' => $this->input->post('unit', true),
            'program' => $this->input->post('program', true),
            'location' => $this->input->post('location', true),
            'suppl' => $this->input->post('suppl', true),
            'qty' => $this->input->post('qty', true),
        ];

        $this->db->insert('peoples', $data);
    }

    public function ubahDataMaterial()
    {
        $data = [
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'name' => $this->input->post('name', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'spec' => $this->input->post('spec', true), //menggunakan "true" untuk mengamankan dari injeksi atau hacker, sebagai pengganti "htmlspecialchars"
            'unit' => $this->input->post('unit', true),
            'program' => $this->input->post('program', true),
            'location' => $this->input->post('location', true),
            'suppl' => $this->input->post('suppl', true),
            'qty' => $this->input->post('qty', true),

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('peoples', $data);
    }

    public function hapusDataMaterial($id)
    {
        // $this->db->where('id', $id); kalo pakai ini, ['id' => $id] dihilangkan
        $this->db->delete('peoples', ['id' => $id]);
    }
}

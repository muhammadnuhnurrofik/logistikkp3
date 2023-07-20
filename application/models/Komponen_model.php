<?php

class Komponen_model extends CI_Model
{
    public function getAllKomponen()
    {
        return $this->db->get('komponen')->result_array();
    }

    public function tambahDataKomponen()
    {
        $data = [
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'tgl' => $this->input->post('tgl', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'reff' => $this->input->post('reff', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'name' => $this->input->post('name', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'spec' => $this->input->post('spec', true), //menggunakan "true" untuk mengamankan dari injeksi atau hacker, sebagai pengganti "htmlspecialchars"
            'unit' => $this->input->post('unit', true),
            'qou' => $this->input->post('qou', true),
            'model' => $this->input->post('model', true),
            'source' => $this->input->post('source', true),
            'qty' => $this->input->post('qty', true),
        ];

        $this->db->insert('komponen', $data);
    }

    public function hapusDataMaterial($id)
    {
        $this->db->delete('peoples', ['id' => $id]);
    }

    public function joinK()
    {
        $query = "SELECT `kkeluar`.*, `komponen`.*
        FROM `kkeluar` JOIN `komponen`
        ON `komponen`.`idno` = `kkeluar`.`idno`
        ORDER BY `kkeluar`.`idtrx`ASC";
        return $this->db->query($query)->result_array();
    }

    public function getKomponenById($id)
    {
        return $this->db->get_where('komponen', ['id' => $id])->row_array();
    }

    public function ubahDataKomponen()
    {
        $data = [
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'name' => $this->input->post('name', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'spec' => $this->input->post('spec', true), //menggunakan "true" untuk mengamankan dari injeksi atau hacker, sebagai pengganti "htmlspecialchars"
            'unit' => $this->input->post('unit', true),
            'qou' => $this->input->post('qou', true),
            'model' => $this->input->post('model', true),
            'source' => $this->input->post('source', true),
            'qty' => $this->input->post('qty', true),
            'ket' => $this->input->post('ket', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('komponen', $data);
    }

    public function ubahDataKomponenK()
    {
        $data = [
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'tgl' => $this->input->post('tgl', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'mt' => $this->input->post('mt', true), //menggunakan "true" untuk mengamankan dari injeksi atau hacker, sebagai pengganti "htmlspecialchars"
            'reff' => $this->input->post('reff', true),
            'user' => $this->input->post('user', true),
            'jml_k' => $this->input->post('jml_k', true),
        ];

        $this->db->insert('kkeluar', $data);
    }

    public function hapusDataKomponen($id)
    {
        $this->db->delete('komponen', ['id' => $id]);
    }

    public function joinM()
    {
        $query = "SELECT `kmasuk`.*, `komponen`.*
        FROM `kmasuk` JOIN `komponen`
        ON `komponen`.`idno` = `kmasuk`.`idno`
        ORDER BY `kmasuk`.`idtrx`ASC";
        return $this->db->query($query)->result_array();
    }

    public function ubahDataKomponenM()
    {
        $data = [
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'tgl' => $this->input->post('tgl', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'reff' => $this->input->post('reff', true),
            'supplier' => $this->input->post('supplier', true),
            'jml' => $this->input->post('jml', true),
        ];

        $this->db->insert('kmasuk', $data);
    }
}

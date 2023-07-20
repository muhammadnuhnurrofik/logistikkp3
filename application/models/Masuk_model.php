<?php

class Masuk_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function getPeoples($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('idno', $keyword);
            $this->db->or_like('name', $keyword);
            $this->db->or_like('spec', $keyword);
            $this->db->or_like('location', $keyword);
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
            'tgl' => $this->input->post('tgl', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'idtrx' => $this->input->post('idtrx', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'name' => $this->input->post('name', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'spec' => $this->input->post('spec', true), //menggunakan "true" untuk mengamankan dari injeksi atau hacker, sebagai pengganti "htmlspecialchars"
            'm' => $this->input->post('m', true),
            'mt' => $this->input->post('mt', true),
            'reff' => $this->input->post('reff', true),
        ];

        $this->db->insert('join', $data);
    }

    public function ubahDataMaterial()
    {
        $data = [
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'tgl' => $this->input->post('tgl', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'reff' => $this->input->post('reff', true),
            'supplier' => $this->input->post('supplier', true),
            'jml' => $this->input->post('jml', true),

        ];
        $this->db->insert('tmasuk', $data);

        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('peoples', $data);
    }

    public function hapusDataMaterial($id)
    {
        // $this->db->where('id', $id); kalo pakai ini, ['id' => $id] dihilangkan
        $this->db->delete('peoples', ['id' => $id]);
    }

    // public function getTransaksi()
    // {
    //     $query = "SELECT `tmasuk.idtrx`, `tmasuk.tanggal`, `tmasuk.ket`, `dmasuk.idno`, `dmasuk.qty`, `people.name`, `peoples.unit`, `peoples.qty`, (`dmasuk.qty`)+(`peoples.qty`) AS `peoples.t`
    //     FROM `peoples` INNER JOIN (`tmasuk` INNER JOIN `dmasuk` ON `tmasuk.idtrx` = `dmasuk.idtrx`) 
    //     ON `peoples.idno` = `dmasuk.idno`";
    //     return $this->db->query($query)->result_array();
    // }

    public function join()
    {
        $query = "SELECT `tmasuk`.*, `peoples`.*
        FROM `tmasuk` JOIN `peoples`
        ON `tmasuk`.`idno` = `peoples`.`idno`
        ORDER BY `tmasuk`.`idtrx`ASC
";
        return $this->db->query($query)->result_array();

        // $this->db->select('tmasuk.*, peoples.*, dmasuk.*');
        // $this->db->from('tmasuk');
        // $this->db->join('peoples', 'peoples.idno=tmasuk.idno');
        // $this->db->join('dmasuk', 'dmasuk.idtrx=tmasuk.idtrx');
        // $this->db->where($aktif);
        // $query = $this->db->get();
        // return $query->result();

        // $this->db->query("SELECT 'tmasuk.*, peoples.idno, peoples.name, peoples.spec' FROM blogs JOIN comments ON comments.id = blogs.id");
    }
}

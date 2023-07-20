<?php

class Tmasuk_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('tmasuk')->result_array();
    }

    public function getPeoples($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('idno', $keyword);
            $this->db->or_like('tgl', $keyword);
            $this->db->or_like('idtrx', $keyword);
        }
        // if ($keyword) {
        //     $this->db->or_like('name', $keyword);
        // }
        // if ($keyword) {
        //     $this->db->or_like('spec', $keyword);
        // }
        // if ($keyword) {
        //     $this->db->or_like('location', $keyword);
        // }
        return $this->db->get('tmasuk', $limit, $start)->result_array();
    }

    public function countAllPeoples()
    {
        return $this->db->get('tmasuk')->num_rows();
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
            'mt' => $this->input->post('mt', true), //menggunakan "true" untuk mengamankan dari injeksi atau hacker, sebagai pengganti "htmlspecialchars"
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
        ON `peoples`.`idno` = `tmasuk`.`idno`
        ORDER BY `tmasuk`.`idtrx`ASC";
        return $this->db->query($query)->result_array();

        //contoh lain
        // $this->db->select('*');
        // $this->db->from('tmasuk');
        // $this->db->join('peoples', 'peoples.idno=tmasuk.idno');
        // $query = $this->db->get();
        // return $query->result();


        //contoh lain
        // $this->db->order_by('tmasuk.idno', 'ASC');
        // return $this->db->from('tmasuk')
        //     ->join('peoples', 'peoples.idno=tmasuk.idno')
        //     ->get()
        //     ->result();
    }
}

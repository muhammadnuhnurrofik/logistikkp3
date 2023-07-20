<?php

class Keluar_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function getPeoples($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->or_like('name', $keyword);
            $this->db->or_like('spec', $keyword);
            $this->db->or_like('idno', $keyword);
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
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'name' => $this->input->post('name', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'spec' => $this->input->post('spec', true), //menggunakan "true" untuk mengamankan dari injeksi atau hacker, sebagai pengganti "htmlspecialchars"
            'unit' => $this->input->post('unit', true),
            'program' => $this->input->post('program', true),
            'location' => $this->input->post('location', true),
            'qty' => $this->input->post('qty', true),
        ];

        $this->db->insert('peoples', $data);
    }

    public function ubahDataMaterial()
    {
        $data = [
            'idno' => $this->input->post('idno', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'tgl' => $this->input->post('tgl', true), //sebenernya pakai $_POST juga bisa (htmlspecialchars($_POST))
            'mt' => $this->input->post('mt', true), //menggunakan "true" untuk mengamankan dari injeksi atau hacker, sebagai pengganti "htmlspecialchars"
            'reff' => $this->input->post('reff', true),
            'user' => $this->input->post('user', true),
            'jml_k' => $this->input->post('jml_k', true),

        ];
        $this->db->insert('tkeluar', $data);


        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('peoples', $data);
    }

    public function hapusDataMaterial($id)
    {
        // $this->db->where('id', $id); kalo pakai ini, ['id' => $id] dihilangkan
        $this->db->delete('peoples', ['id' => $id]);
    }

    public function join()
    {
        $query = "SELECT `tkeluar`.*, `peoples`.*
                    FROM `tkeluar` JOIN `peoples`
                    ON `tkeluar`.`idno` = `peoples`.`idno`
                    ORDER BY `tkeluar`.`idtrx`ASC
        ";
        return $this->db->query($query)->result_array();
        // $this->db->select('peoples.*, tmasuk.*, dmasuk.*');
        // $this->db->from('dmasuk');
        // $this->db->join('peoples', 'peoples.idno=dmasuk.idno');
        // $this->db->join('tmasuk', 'tmasuk.idtrx=dmasuk.idtrx');
        // $this->db->where($aktif);
        // $query = $this->db->get();
        // return $query->result();
    }
}

<?php

class TKeluar_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function getPeoples($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('tgl', $keyword);
            $this->db->or_like('idno', $keyword);
            $this->db->or_like('mt', $keyword);
            $this->db->or_like('reff', $keyword);
            $this->db->or_like('name', $keyword);
        }
        return $this->db->get('tkeluar', $limit, $start)->result_array();
    }

    public function countAllPeoples()
    {
        return $this->db->get('tkeluar')->num_rows();
    }

    public function join()
    {
        $query = "SELECT `tkeluar`.*, `peoples`.*
                    FROM `tkeluar` JOIN `peoples`
                    ON `tkeluar`.`idno` = `peoples`.`idno`
                    ORDER BY `tkeluar`.`idtrx`ASC
        ";
        return $this->db->query($query)->result_array();
        // $this->db->select('peoples.*, tkeluar.*');
        // $this->db->from('peoples');
        // $this->db->join('tkeluar', 'tkeluar.idno=peoples.idno');
        // $query = $this->db->get();
        // return $query->result();
    }

    public function getMetu($table)
    {
        $data = $this->db->get($table);
        return $data->result_array();
    }
}

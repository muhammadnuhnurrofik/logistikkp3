<?php

class Import_model extends CI_Model
{
    public function getAllKomponen()
    {
        return $this->db->get_where('komponen', ['source' => 'import'])->result_array();
    }

    public function getKomponen($limit, $start, $keyword = null)
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
        return $this->db->get('komponen', $limit, $start)->result_array();
    }
}

<?php

class Lokal_model extends CI_Model
{
    public function getAllKomponen()
    {
        return $this->db->get_where('komponen', ['source' => 'lokal'])->result_array();
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
    public function RD702()
    {
        $where = "model='RD702' OR model='MK4/RD7010/RD702'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getRD702($limit, $start, $keyword = null)
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

    public function RD7010()
    {
        $where = "model='RD7010' OR model='MK4/RD7010' OR model='MK4/RD7010/RD702'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getRD7010($limit, $start, $keyword = null)
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
    public function RD701()
    {
        $where = "model='MK4' OR model='MK4/RD7010' OR model='MK4/RD7010/RD702'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getRD701($limit, $start, $keyword = null)
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
    public function FZ32()
    {
        $where = "model='FZ32'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getFZ32($limit, $start, $keyword = null)
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

    public function Innert()
    {
        $where = "model='Innert'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getInnert($limit, $start, $keyword = null)
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

    public function getTubemk()
    {

        $where = "idno='33333004'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getTuberd()
    {

        $where = "idno='33333013'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getPropmk()
    {

        $where = "idno='33333003'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getProprd()
    {

        $where = "idno='33333012'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getIgnmk()
    {

        $where = "idno='33333005'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getIgnrd()
    {

        $where = "idno='33333014'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getNozzleRD7010()
    {

        $where = "idno='33333002'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getNozzleRD701()
    {

        $where = "idno='33333001'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getNozzleRD702()
    {

        $where = "idno='33333011'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getStbmk()
    {

        $where = "idno='33333006'";
        return $this->db->get_where('komponen', $where)->result_array();
    }

    public function getStbrd()
    {

        $where = "idno='33333015'";
        return $this->db->get_where('komponen', $where)->result_array();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function qr($kodeqr)
    {
        if ($kodeqr) {
            $filename = 'qr/' . $kodeqr;
            if (!file_exists($filename)) {
                $this->load->library('ciqrcode');
                $params['data'] = $kodeqr;
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH . 'qr/' . $kodeqr . ".png";
                return  $this->ciqrcode->generate($params);
            }
        }
    }
}

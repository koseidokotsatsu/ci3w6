<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Umpan_balik extends CI_Controller
{
    public function index()
    {
        $data['umpan_balik'] = $this->m_umpan_balik->tampilkan_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('umpan_balik/umpan_balik_data', $data);
        $this->load->view('templates/footer');
    }
}

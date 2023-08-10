<?php

defined('BASEPATH') or exit('No direct script access allowed');

class antrian extends CI_Controller
{
    public function index()
    {
        $data['antrian'] = $this->m_antrian->tampilkan_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('antrian/antrian_data', $data);
        $this->load->view('templates/footer');
    }
}

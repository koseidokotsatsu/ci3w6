<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function index()
    {
        $data['jadwal'] = $this->m_jadwal->tampilkan_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('jadwal/jadwal_data', $data);
        $this->load->view('templates/footer');
    }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function index()
    {
        $data['layanan'] = $this->m_layanan->tampilkan_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('layanan/layanan_data', $data);
        $this->load->view('templates/footer');
    }
    function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('layanan/layanan_form');
        $this->load->view('templates/footer');
    }
    function insert()
    {
        $lay = $this->input->post('');
    }
}
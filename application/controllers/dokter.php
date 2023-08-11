<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function index()
    {
        // $data['dokter'] = $this->m_dokter->tampilkan_data()->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dokter/dokter_data');
        $this->load->view('templates/footer');
    }
    // function tambah()
    // {
    //     $data['jadwal'] = $this->m_dokter->ambilJadwal();

    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('dokter/dokter_form', $data);
    //     $this->load->view('templates/footer');
    // }
}
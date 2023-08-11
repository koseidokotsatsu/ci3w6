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
    function tambah()
    {
        $layanan = $this->m_layanan->tampilkan_data()->result();
        $dokter = $this->db->get('dokter')->result();
        $data = [
            'layanan' => $layanan,
            'dokter' => $dokter,
        ];

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('antrian/antrian_form', $data);
        $this->load->view('templates/footer');
    }
    function insert()
    {
        $data = [
            'id_layanan' => $this->input->post('layanan'),
            'id_dokter' => $this->input->post('dokter'),
            'tanggal_antrian' => $this->input->post('tanggal'),
            'jam_antrian' => $this->input->post('jam_antrian'),
            'status' => "dalam_antrian"

        ];
        $this->db->insert('antrian', $data);
        redirect('antrian');
    }
    function edit($id)
    {
        $where = ['id_antrian' => $id];
        $data['antrian'] = $this->m_antrian->edit($where)->row();
        $data['layanan'] = $this->m_layanan->tampilkan_data()->result();
        $data['dokter'] = $this->db->get('dokter')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('antrian/antrian_edit', $data);
        $this->load->view('templates/footer');
    }
    function update()
    {
        $id = $this->input->post('id');

        $data = [
            'id_layanan' => $this->input->post('layanan'),
            'id_dokter' => $this->input->post('dokter'),
            'tanggal_antrian' => $this->input->post('tanggal_antrian'),
            'jam_antrian' => $this->input->post('jam_antrian'),
            'status' => 'dalam_antrian',
        ];

        $where = ['id_antrian' => $id];
        $this->m_antrian->update_data($data, $where);
        redirect('antrian');
    }
    function hapus($id)
    {
        $where = ['id_antrian' => $id];
        $this->m_antrian->hapus_data($where);
        redirect('antrian');
    }
}

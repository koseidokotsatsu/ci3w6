<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function index()
    {
        $data['pengguna'] = $this->m_pengguna->tampilkan_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pengguna/pengguna_data', $data);
        $this->load->view('templates/footer');
    }
    function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pengguna/pengguna_form', );
        $this->load->view('templates/footer');
    }
    function insert()
    {
        $data = [
            'nama_pengguna' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('telpon'),
            'informasi' => $this->input->post('informasi')
        ];
        $this->db->insert('pengguna', $data);
        redirect('pengguna');
    }
    function edit($id)
    {

        $where = ['id_pengguna' => $id];
        $data['pengguna'] = $this->m_pengguna->edit_data($where)->row_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pengguna/pengguna_edit', $data);
        $this->load->view('templates/footer');
    }
    function update()
    {
        $id = $this->input->post('id');
        $data = [
            'nama_pengguna' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('telpon'),
            'informasi' => $this->input->post('informasi')
        ];
        $where = ['id_pengguna' => $id];
        $this->m_pengguna->update_data($data, $where);
        redirect('pengguna');
    }
    function hapus($id)
    {
        $where = ['id_pengguan' => $id];
        $this->m_pengguan->hapus_data($where);
        redirect('pengguan');
    }
}
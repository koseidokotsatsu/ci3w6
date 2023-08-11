<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function index()
    {
        $data['layanan'] = $this->m_layanan->tampilkan_data()->result();
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
        $this->load->view('layanan/layanan_form',);
        $this->load->view('templates/footer');
    }
    function insert()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

        if ($this->form_validation->run() == false) {
            redirect('layanan/layanan_form');
            $this->session->set_flashdata('pesan_layanan', '<div class="alert alert-danger" role="alert">Galat!</div>');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];

            $this->db->insert('layanan', $data);
            $this->session->set_flashdata('pesan_layanan', '<div class="alert alert-success" role="alert">Berhasil!</div>');
            redirect('layanan');
        }
    }
    function edit($id)
    {
        $where = ['id_layanan' => $id];
        $data['layanan'] = $this->m_layanan->edit_data($where, 'layanan')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('layanan/layanan_edit', $data);
        $this->load->view('templates/footer');
    }
    function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            redirect('layanan/layanan_edit');
            $this->session->set_flashdata('pesan_layanan', '<div class="alert alert-danger" role="alert">Galat!</div>');
        } else {
            $id = $this->input->post('id_layanan');

            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];

            $this->db->where('id_layanan', $this->input->post('id_layanan'));
            $this->db->update('layanan', $data);
            $this->session->set_flashdata('pesan_layanan', '<div class="alert alert-success" role="alert">Berhasil!</div>');
            redirect('layanan');
        }
    }
    function delete($id)
    {
        $where = ['id_layanan' => $id];
        $this->m_layanan->delete_data($where);
        redirect('layanan');
    }
}

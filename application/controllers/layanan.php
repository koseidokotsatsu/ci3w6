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
        $this->load->view('layanan/layanan_form', );
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
        $data['title'] = 'Edit Data Layanan';

        $where = ['id_layanan' => $id];
        $data['layan'] = $this->m_layanan->edit_data($where)->row_array();


        $this->load->view('header', $data);
        $this->load->view('layanan/layanan_edit', $data);
        $this->load->view('footer');
    }
    function update()
    {
        $id = $this->input->post('id_layanan');

        $data = [
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];

        $where = ['id_layanan' => $id];
        $this->m_layanan->update_data($data, $where);
        redirect('layanan');
    }
    function delete($id)
    {
        $where = ['id_layanan' => $id];
        $this->m_layanan->delete_data($where);
        redirect('layanan');
    }
}
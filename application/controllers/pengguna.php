<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function index()
    {
        $data['pengguna'] = $this->m_pengguna->tampilkan_data();
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
        $this->load->view('pengguna/pengguna_form',);
        $this->load->view('templates/footer');
    }
    function insert()
    {
        $np = $this->input->post('nama_pengguan');
        $j = $this->input->post('jenis_kelamin');
        $u = $this->input->post('umur');

        $data = [
            'nama_pengguan' => $np,
            'jenis_kelamin' => $j,
            'umur' => $u
        ];
        $this->m_pengguan->insert_data($data);
        redirect('pengguan');
    }
    function edit($id)
    {
        $data['title'] = 'Edit Data pengguan';

        $where = ['id_pengguan' => $id];
        $data['p'] = $this->m_pengguan->edit_data($where)->row_array();


        $this->load->view('v_header', $data);
        $this->load->view('pengguan/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    function update()
    {
        $id = $this->input->post('id_pengguan');
        $np = $this->input->post('nama_pengguan');
        $j = $this->input->post('jenis_kelamin');
        $u = $this->input->post('umur');

        $data = [
            'nama_pengguan' => $np,
            'jenis_kelamin' => $j,
            'umur' => $u
        ];
        $where = ['id_pengguan' => $id];
        $this->m_pengguan->update_data($data, $where);
        redirect('pengguan');
    }
    function hapus($id)
    {
        $where = ['id_pengguan' => $id];
        $this->m_pengguan->hapus_data($where);
        redirect('pengguan');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengguna extends CI_Model
{
    function tampilkan_data()
    {
        return $this->db->get('pengguna');
    }
    function edit($where)
    {
        return $this->db->get_where('pengguna', $where);
    }
    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('pengguna', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('pengguna');
    }
}
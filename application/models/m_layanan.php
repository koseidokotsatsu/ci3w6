<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_layanan extends CI_Model
{
    function tampilkan_data()
    {
        return $this->db->get('layanan');
    }
    function edit_data($where)
    {
        return $this->db->get_where('layanan', $where);
    }
    function update_data($data)
    {
        $this->db->update('layanan', $data);
    }
    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('antrian');
    }
}

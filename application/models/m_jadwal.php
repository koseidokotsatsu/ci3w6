<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_jadwal extends CI_Model
{
    function tampilkan_data()
    {
        return $this->db->get('jadwal');
    }
}

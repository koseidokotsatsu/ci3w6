<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_layanan extends CI_Model
{
    function tampilkan_layanan()
    {
        return $this->db->get('layanan');
    }
}

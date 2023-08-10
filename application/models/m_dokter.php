<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_dokter extends CI_Model
{
    public function ambilJadwal()
    {
        $query = "SELECT `dokter`.*,`jadwal`.`nama_jadwal`
                    FROM `dokter` JOIN `jadwal`
                      ON `dokter`.`id_jadwal` = `jadwal`.`id_jadwal`
                 ";
        return $this->db->query($query)->result_array();
    }
}

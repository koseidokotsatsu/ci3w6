<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_antrian extends CI_Model
{
    function tampilkan_data()
    {
        $query = "SELECT antrian.*, layanan.nama,dokter.nama_dokter,antrian.tanggal_antrian,antrian.jam_antrian 
                    FROM antrian
                    INNER JOIN layanan ON antrian.id_layanan=layanan.id_layanan
                    INNER JOIN dokter ON antrian.id_dokter=dokter.id_dokter";
        return $this->db->query($query);
    }
    function edit($where)
    {
        return $this->db->get_where('antrian', $where);
    }
    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('antrian', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('antrian');
    }
}

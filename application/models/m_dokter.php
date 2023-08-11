<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dokter extends CI_Model
{
    function tampilkan_data()
    {
        $query = "SELECT dokter.*,dokter.nama_dokter,dokter.spesialis,jadwal.jam_dokter 
                    FROM dokter
                    INNER JOIN layanan ON dokter.id_layanan=layanan.id_layanan
                    INNER JOIN dokter ON dokter.id_dokter=dokter.id_dokter";
        return $this->db->query($query);
    }
    function edit($where)
    {
        return $this->db->get_where('dokter', $where);
    }
    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('dokter', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('dokter');
    }
}
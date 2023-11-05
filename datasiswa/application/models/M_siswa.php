<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function SemuaData1()
    {
        return $this->db->get('guru')->result_array();
        return $this->db->get('mapel')->result_array();
    }
    public function SemuaData2()
    {
        return $this->db->get('nilai')->result_array();
    }
    public function showAllSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function showAllMapel()
    {
        return $this->db->get('mapel')->result_array();
    }
    public function ProsesTambahDataSiswa()
    {
        $data = [
            "nis" => $this->input->post('nis'),
            "nama_siswa" => $this->input->post('nama_siswa'),
            "kelas" => $this->input->post('kelas'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "tempat_lahir" => $this->input->post('tempat_lahir'),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "alamat" => $this->input->post('alamat'),
        ];
        $this->db->insert('siswa', $data);
    }
    public function ProsesTambahDataGuru()
    {
        $data = [
            "kd_mapel" => $this->input->post('kd_mapel'),
            "nama_mapel" => $this->input->post('nama_mapel'),
            "nip" => $this->input->post('nip'),
        ];
        $this->db->insert('mapel', $data);

        $data = [
            "nip" => $this->input->post('nip'),
            "nama_guru" => $this->input->post('nama_guru'),
            "wali_kelas" => $this->input->post('wali_kelas'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
        ];
        $this->db->insert('guru', $data);
    }
    public function ProsesTambahDataNilai()
    {
        $data = [
            "nis" => $this->input->post('nis'),
            "kd_mapel" => $this->input->post('kd_mapel'),
            "nilai_p" => $this->input->post('nilai_p'),
            "nilai_k" => $this->input->post('nilai_k'),
            "uts" => $this->input->post('uts'),
            "uas" => $this->input->post('uas'),
            "semester" => $this->input->post('semester'),
            "tapel" => $this->input->post('tapel'),
        ];
        $this->db->insert('nilai', $data);
    }
    public function Hapus($where, $value, $table)
    {
        $this->db->where($where, $value);
        $this->db->delete($table);
    }
    public function KelasI()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->like('kelas', '1');

        return $this->db->get()->num_rows();
    }
    public function KelasII()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->like('kelas', '2');

        return $this->db->get()->num_rows();
    }
    public function KelasIII()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->like('kelas', '3');

        return $this->db->get()->num_rows();
    }
    public function KelasIV()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->like('kelas', '4');

        return $this->db->get()->num_rows();
    }
    public function KelasV()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->like('kelas', '5');

        return $this->db->get()->num_rows();
    }
    public function KelasVI()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->like('kelas', '6');

        return $this->db->get()->num_rows();
    }
}

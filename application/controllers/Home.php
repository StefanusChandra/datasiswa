<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Sistem Penilaian Siswa';
        $data['siswa1'] = $this->M_siswa->KelasI();
        $data['siswa2'] = $this->M_siswa->KelasII();
        $data['siswa3'] = $this->M_siswa->KelasIII();
        $data['siswa4'] = $this->M_siswa->KelasIV();
        $data['siswa5'] = $this->M_siswa->KelasV();
        $data['siswa6'] = $this->M_siswa->KelasVI();
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/navbar');
        $this->load->view('home/dashboard', $data);
        $this->load->view('home/footer');
    }
    public function TampilSiswa()
    {

        $data['title'] = 'Sistem Penilaian Siswa';
        $data['siswa'] = $this->M_siswa->SemuaData();
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/navbar');
        $this->load->view('siswa/Tampil_siswa', $data);
        $this->load->view('home/footer');
    }
    public function TampilGuru()
    {
        $data['title'] = 'Sistem Penilaian Siswa';
        $data['mapel'] = $this->M_siswa->SemuaData1();
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/navbar');
        $this->load->view('guru/Tampil_guru', $data);
        $this->load->view('home/footer');
    }
    public function TampilNilai()
    {
        $data['title'] = 'Sistem Penilaian Siswa';
        $data['nilai'] = $this->M_siswa->SemuaData2();
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/navbar');
        $this->load->view('nilai/Tampil_nilai', $data);
        $this->load->view('home/footer');
    }
    public function TambahSiswa()
    {
        $data['title'] = 'Sistem Penilaian Siswa';
        $data['siswa'] = $this->M_siswa->SemuaData();
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/navbar');
        $this->load->view('siswa/Tambah_siswa', $data);
        $this->load->view('home/footer');
    }
    public function TambahGuru()
    {
        $data['title'] = 'Sistem Penilaian Siswa';
        $data['mapel'] = $this->M_siswa->SemuaData1();
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/navbar');
        $this->load->view('guru/Tambah_guru', $data);
        $this->load->view('home/footer');
    }
    public function TambahNilai()
    {
        $data['title'] = 'Sistem Penilaian Siswa';
        $data['showAllSiswa'] = $this->M_siswa->showAllSiswa();
        $data['showAllMapel'] = $this->M_siswa->showAllMapel();
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar');
        $this->load->view('home/navbar');
        $this->load->view('nilai/Tambah_nilai', $data);
        $this->load->view('home/footer');
    }
    public function ProsesTambahDataSiswa()
    {
        $this->M_siswa->ProsesTambahDataSiswa();
        redirect('Home/TampilSiswa');
    }
    public function ProsesTambahDataGuru()
    {
        $this->M_siswa->ProsesTambahDataGuru();
        redirect('Home/TampilGuru');
    }
    public function ProsesTambahDataNilai()
    {
        $this->M_siswa->ProsesTambahDataNilai();
        redirect('Home/TampilNilai');
    }
    public function Hapus($where, $value, $table)
    {
        $this->M_siswa->Hapus($where, $value, $table);

        if ($table == "siswa") {
            $page = "TampilSiswa";
        } else if ($table == "mapel") {
            $page = "TampilGuru";
        } else if ($table == "nilai") {
            $page = "TampilNilai";
        }

        redirect('Home/' . $page);
    }
}

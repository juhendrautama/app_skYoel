<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_data_kopetensi');
        $this->load->model('M_crud_data_pegawai');
        $this->load->model('M_crud_data_bidang');
    }

    public function index()
    {
        if (isset($_POST['proses'])) {
            $data['tampil_data_cari_laporan'] = $this->M_crud_data_kopetensi->tampil_data_cari_laporan();
            $this->load->view('admin/laporan', $data);
        } else {
            $this->load->view('admin/laporan');
        }
    }

    public function Cetak($tgl1, $tgl2)
    {
        $data['tampil_data_cari_laporan'] = $this->M_crud_data_kopetensi->tampil_data_cari_laporan_cetak($tgl1, $tgl2);
        $this->load->view('admin/laporan_cetak', $data);
    }
}





/* copy reg juhendra utama*/
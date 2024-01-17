<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Cek_data_kompetensi extends CI_Controller
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
            $data['tampil_cekdatakompetensi'] = $this->M_crud_data_kopetensi->tampil_cekdatakompetensi();
            $this->load->view('admin/cekdatakompetesi', $data);
        } else {
            $this->load->view('admin/cekdatakompetesi');
        }
    }

    public function Cetak()
    {
        $nip = $this->uri->segment(3);
        $data['cekdatakompetensi_cetak'] = $this->M_crud_data_kopetensi->tampil_cekdatakompetensi_cetak($nip);
        $this->load->view('admin/cekdatakompetesi_cetak', $data);
    }
}





/* copy reg juhendra utama*/
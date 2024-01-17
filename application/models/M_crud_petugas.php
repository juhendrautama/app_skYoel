<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_petugas extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //menu petugas
    function GetmobilAll()
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $hsl = $this->db->query("SELECT `idPmobil`, `idBandara`, `idMaskapai`, `namaPmobil`, `JumlahPenumpang`, `tgl`, `statusM` FROM `tbl_Pmobil` WHERE idBandara='$idBandara' and idMaskapai='$idMaskapai' ");
        return $hsl;
    }

    function GetkursiAll()
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $hsl = $this->db->query("SELECT `idPkursi`, `idBandara`, `idMaskapai`, `namaPkursi`, `tgl`, `statusK` FROM `tbl_Pkursi`WHERE idBandara='$idBandara' and idMaskapai='$idMaskapai' ");
        return $hsl;
    }

    function GetPetugasAll()
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $hsl = $this->db->query("SELECT `idPetugas`, `idBandara`, `idMaskapai`, `nama`, `jenisKelamin`, `email`, `kodePetugas`, `idPkursi`, `idPmobil`, `tgl`,`statusP` FROM `tbl_petugas`WHERE idBandara='$idBandara' and idMaskapai='$idMaskapai' ");
        return $hsl;
    }
    function SimpanData()
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $nama = $this->db->escape_str($this->input->post('nama'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $email = $this->db->escape_str($this->input->post('email'));
        $kodePetugas = $this->db->escape_str($this->input->post('kodePetugas'));
        if ($kodePetugas == 'kursi') {
            $idPkursi = $this->db->escape_str($this->input->post('idPkursi'));
            $idPmobil = '0';
        } else if ($kodePetugas == 'mobil') {
            $idPkursi = '0';
            $idPmobil = $this->db->escape_str($this->input->post('idPmobil'));
        }
        $statusP = $this->db->escape_str($this->input->post('statusP'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_petugas`(`idPetugas`, 
        `idBandara`, 
        `idMaskapai`, 
        `nama`, 
        `jenisKelamin`, 
        `email`, 
        `kodePetugas`, 
        `idPkursi`, 
        `idPmobil`, 
        `statusP`,
        `tgl`) 
        VALUES 
        (NULL,
        '$idBandara',
        '$idMaskapai',
        '$nama',
        '$jenisKelamin',
        '$email',
        '$kodePetugas',
        '$idPkursi',
        '$idPmobil',
        '$statusP',
        '$tgl')
		");
        return $sql;
    }
    function SimpanUbah()
    {
        $idPetugas = $this->db->escape_str($this->input->post('idPetugas'));
        $nama = $this->db->escape_str($this->input->post('nama'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $email = $this->db->escape_str($this->input->post('email'));
        $statusP = $this->db->escape_str($this->input->post('statusP'));
        $sql = $this->db->query("
        UPDATE `tbl_petugas` 
		SET 
        `nama`='$nama',
		`jenisKelamin`='$jenisKelamin',
		`email`='$email',
        `statusP`='$statusP'
		WHERE 
		`idPetugas`='$idPetugas'
		");
        return $sql;
    }

    function HapusData($idPetugas)
    {
        $hsl = $this->db->query("DELETE FROM `tbl_petugas` WHERE idPetugas='$idPetugas'");
        return $hsl;
    }
    //menu petugas



    //menu order
    function GetPetugasidPkursi($idPkursi)
    {
        $hsl = $this->db->query("SELECT `idPetugas`, `idBandara`, `idMaskapai`, `nama`, `jenisKelamin`, `email`, `kodePetugas`, `idPkursi`, `idPmobil`, `tgl`,`statusP` FROM `tbl_petugas` WHERE kodePetugas='kursi' and idPkursi='$idPkursi' and statusP='Aktip'");
        return $hsl;
    }

    function GetPetugasId($idPetugas)
    {
        $hsl = $this->db->query("SELECT `idPetugas`, `idBandara`, `idMaskapai`, `nama`, `jenisKelamin`, `email`, `kodePetugas`, `idPkursi`, `idPmobil`, `tgl`,`statusP` FROM `tbl_petugas` WHERE idPetugas='$idPetugas' ");
        return $hsl;
    }

    function GetPetugasidPmobil($idPmobil)
    {
        $hsl = $this->db->query("SELECT `idPetugas`, `idBandara`, `idMaskapai`, `nama`, `jenisKelamin`, `email`, `kodePetugas`, `idPkursi`, `idPmobil`, `tgl`,`statusP` FROM `tbl_petugas` WHERE kodePetugas='mobil' and idPmobil='$idPmobil' and statusP='Aktip'");
        return $hsl;
    }
    //menu order
}

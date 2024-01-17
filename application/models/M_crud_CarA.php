<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_CarA extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getCarAll()
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $hsl = $this->db->query("SELECT `idPmobil`, `idBandara`, `idMaskapai`, `namaPmobil`, `tgl`,`JumlahPenumpang`, `statusM` FROM `tbl_Pmobil` WHERE  idBandara='$idBandara' and idMaskapai='$idMaskapai' ");
        return $hsl;
    }

    function SimpanData()
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $namaPmobil = $this->db->escape_str($this->input->post('namaPmobil'));
        $JumlahPenumpang = $this->db->escape_str($this->input->post('JumlahPenumpang'));
        $tgl = Date("Y-m-d");
        $sql = $this->db->query("
        INSERT INTO `tbl_Pmobil`(`idPmobil`, `idBandara`, `idMaskapai`, `namaPmobil`, `JumlahPenumpang`, `tgl`, `statusM`) VALUES
         (NULL,'$idBandara','$idMaskapai','$namaPmobil','$JumlahPenumpang','$tgl','1')
		");
        return $sql;
    }

    function getCarid($id)
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $hsl = $this->db->query("SELECT `idPmobil`, `idBandara`, `idMaskapai`, `namaPmobil`, `tgl`,`JumlahPenumpang`, `statusM` FROM `tbl_Pmobil` WHERE idPmobil='$id' ");
        return $hsl;
    }

    function SimpanUbah()
    {
        $idPmobil = $this->db->escape_str($this->input->post('idPmobil'));
        $namaPmobil = $this->db->escape_str($this->input->post('namaPmobil'));
        $JumlahPenumpang = $this->db->escape_str($this->input->post('JumlahPenumpang'));
        $sql = $this->db->query("
        UPDATE `tbl_Pmobil` 
		SET 
        `namaPmobil`='$namaPmobil',
        `JumlahPenumpang`='$JumlahPenumpang'
		WHERE 
		`idPmobil`='$idPmobil'
		");
        return $sql;
    }

    function HapusData($idPmobil)
    {
        $hsl = $this->db->query("DELETE FROM `tbl_Pmobil` WHERE idPmobil='$idPmobil'");
        return $hsl;
    }



    ///////////////////////////////////////////////////////////////////////////////




}
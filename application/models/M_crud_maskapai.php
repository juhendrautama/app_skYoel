<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_maskapai extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



    function GetDataid($idMaskapai)
    {

        $hsl = $this->db->query("SELECT `idMaskapai`, `idBandara`, `namaMaskapai`, `ket`, `tgl` FROM `tbl_maskapai` WHERE idMaskapai='$idMaskapai'");
        return $hsl;
    }

    function GetDataAll()
    {

        $hsl = $this->db->query("SELECT `idMaskapai`, `idBandara`, `namaMaskapai`, `ket`, `status`, `tgl` FROM `tbl_maskapai` where status='Aktip' ");
        return $hsl;
    }
}

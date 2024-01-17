<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_bandara extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



    function GetDataid($idBandara)
    {

        $hsl = $this->db->query("SELECT `idBandara`, `namaBandara`, `alamat`, `ket`, `tgl` FROM `tbl_bandara` WHERE idBandara='$idBandara'");
        return $hsl;
    }
    function GetDataAll()
    {

        $hsl = $this->db->query("SELECT `idBandara`, `namaBandara`, `alamat`, `ket`, `tgl` FROM `tbl_bandara` ");
        return $hsl;
    }
}

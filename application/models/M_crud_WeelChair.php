<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_WeelChair extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	function getWeelChairAll()
	{
		$idBandara = $this->session->userdata('idBandara');
		$idMaskapai = $this->session->userdata('idMaskapai');
		$hsl = $this->db->query("SELECT `idPkursi`, `idBandara`, `idMaskapai`, `namaPkursi`, `tgl`, `statusK` FROM `tbl_Pkursi` where idBandara='$idBandara' and idMaskapai='$idMaskapai' and statusK='1' ");
		return $hsl;
	}

	function SimpanData()
	{
		$idBandara = $this->session->userdata('idBandara');
		$idMaskapai = $this->session->userdata('idMaskapai');
		$namaPkursi = $this->db->escape_str($this->input->post('namaPkursi'));
		$tgl = Date("Y-m-d");
		$sql = $this->db->query("
		INSERT INTO `tbl_Pkursi`(`idPkursi`, `idBandara`, `idMaskapai`, `namaPkursi`, `tgl`, `statusK`) 
		VALUES 
		(NULL,'$idBandara','$idMaskapai','$namaPkursi','$tgl','1')
		");
		return $sql;
	}

	function getWeelChairid($idPkursi)
	{
		$idBandara = $this->session->userdata('idBandara');
		$idMaskapai = $this->session->userdata('idMaskapai');
		$hsl = $this->db->query("SELECT `idPkursi`, `idBandara`, `idMaskapai`, `namaPkursi`, `tgl`, `statusK` FROM `tbl_Pkursi` where idPkursi='$idPkursi' ");
		return $hsl;
	}

	function SimpanUbah()
	{
		$idPkursi = $this->db->escape_str($this->input->post('idPkursi'));
		$namaPkursi = $this->db->escape_str($this->input->post('namaPkursi'));
		$sql = $this->db->query("
        UPDATE `tbl_Pkursi` 
		SET 
        `namaPkursi`='$namaPkursi'
		WHERE 
		`idPkursi`='$idPkursi'
		");
		return $sql;
	}

	function HapusData($idPkursi)
	{
		$hsl = $this->db->query("DELETE FROM `tbl_Pkursi` WHERE idPkursi='$idPkursi'");
		return $hsl;
	}






	///////////////////////////////////////////////////////////////////////////////




}

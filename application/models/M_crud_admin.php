<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_admin extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}



	function cek1()
	{
		$user = $this->db->escape_str($this->input->post('user'));
		$pass = md5($_POST['pass']);
		$hsl = $this->db->query("SELECT `id_admin`, `idBandara`, `idMaskapai`, `nama_admin`, `user`, `pass`, `alamat`, `no_tlpn`, `level`, `tgl` FROM `tbl_admin` WHERE  user='$user' and pass='$pass'");
		return $hsl;
	}



	function Ubah_data_user()
	{
		$id_pegawai = $this->db->escape_str($this->input->post('id_pegawai'));
		$user = $this->db->escape_str($this->input->post('user'));
		$pass = md5($_POST['pass']);
		$tgl_ubah = Date("Y-m-d");
		$sql = $this->db->query("
				UPDATE
				`tbl_pegawai`
				SET
				`user` = '$user',
				`pass` = '$pass',
				`tgl`='$tgl_ubah'
				WHERE `id_pegawai` = '$id_pegawai';
				");
		return $sql;
	}
}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Login_akses extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('M_crud_admin');
		$this->load->library("session");
		$this->load->library('user_agent');
	}






	function sessionku()

	{
		$berhasil = $this->session->userdata('login');
		if (!isset($berhasil) || $berhasil != true) {
			redirect('../Login_akses');
		}
	}

	function index()
	{
		$this->load->view('admin/login');
	}


	function keluar()
	{
		$this->load->view('home');
	}

	function Cek()
	{
		$user = $this->db->escape_str($this->input->post('user'));
		if ($user == '') {
			echo '<script type="text/javascript">
						//<![CDATA[
						alert("Form tidak boleh kosong ");
						window.location="../Login_akses";
						//]]>
					</script>';
		} else {
			$hsl = $this->M_crud_admin->cek1();
			if ($hsl->num_rows() > 0) { //jika salah satu pasword ada di di dalam table 
				$ok = $hsl->row();
				$data = array(
					'id_admin' => $ok->id_admin,
					'idBandara' => $ok->idBandara,
					'idMaskapai' => $ok->idMaskapai,
					'nama_admin' => $ok->nama_admin,
					'user' => $ok->user,
					'alamat' => $ok->alamat,
					'no_tlpn' => $ok->no_tlpn,
					'level' => $ok->level,
					'login' => true
				);
				$this->session->set_userdata($data);
				if ($ok->level == '1') {
					redirect('Home');
				} else if ($ok->level == '2') {
					redirect('Home');
				}
			} else {
				echo '<script type="text/javascript">
						//<![CDATA[
						alert("password salah silah kan login kembali ");
						window.location="../Login_akses";
						//]]>
					</script>';
			}
		}
	}




	function logout()
	{
		$this->session->sess_destroy();
		redirect('Halaman_utama');
		$this->keluar();
	}
}

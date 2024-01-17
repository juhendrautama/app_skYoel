<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Home extends CI_Controller
{

	function __construct()

	{

		parent::__construct();
		$this->load->model('M_crud_admin');
		$this->load->model('M_crud_bandara');
		$this->load->model('M_crud_maskapai');
		$this->load->library("session");
		$this->sessionku();
	}



	function sessionku()

	{

		$berhasil = $this->session->userdata('login');
		if (!isset($berhasil) || $berhasil != true) {

			redirect('Login_akses');
		}
	}

	public function index()
	{
		$this->load->view('admin/home');
	}


	public function Simpan_data()
	{
		$hasil = $this->M_crud_admin->Simpan_data_user_id();
		if ($hasil) { ?>
			<script type="text/javascript">
				alert('Akun Disimpan');
				window.location = "<?php echo base_url(); ?>Login_akses/logout";
			</script>
		<?php }
	}


	public function Ubah_data_user()
	{
		$hasil = $this->M_crud_admin->Ubah_data_user();
		if ($hasil) { ?>
			<script type="text/javascript">
				alert('Akun Disimpan');
				window.location = "<?php echo base_url(); ?>Login_akses/logout";
			</script>
<?php }
	}
}





/* copy reg juhendra utama*/
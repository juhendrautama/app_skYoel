<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Profil extends CI_Controller {

	function __construct()

		{

			parent::__construct();
			$this->load->model('M_crud_admin');
			$this->load->library("session");
			$this->sessionku();

		}

	

	function sessionku ()

		{

			$berhasil=$this->session->userdata('login');
			if (!isset($berhasil) || $berhasil !=true )

			{

				redirect('Login_akses');

			}
		}

	public function index(){
        $id_pegawai=$this->session->userdata('id_pegawai');
        $data['data_pegawai']=$this->M_crud_data_pegawai->tampil_data_pegawai($id_pegawai)->row();
		$this->load->view('admin/profil',$data);

	}

	public function Ubah_data_profil(){
		$hasil=$this->M_crud_data_pegawai->Ubah_data_profil();
		if ($hasil){ ?>
<script type="text/javascript">
alert('Profil Dirubah');
window.location = "<?php echo base_url(); ?>Profil";
</script>
<?php }
	}



	public function Ubah_foto_profil(){
		if(isset($_POST['proses'])){
		$nama_file=$this->M_crud_data_pegawai->upload_foto();	
		$hasil=$this->M_crud_data_pegawai->Ubah_foto_profil($nama_file);
		if ($hasil){ ?>
<script type="text/javascript">
alert('foto Dirubah ');
window.location = "<?php echo base_url() ?>Profil";
</script>
<?php }
			}else{
				redirect('/Profil');
			}
	}







}





/* copy reg juhendra utama*/
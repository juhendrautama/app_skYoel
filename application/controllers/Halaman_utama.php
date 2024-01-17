<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Halaman_utama extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('M_crud_admin');
		$this->load->model('M_crud_maskapai');
		$this->load->model('M_crud_bandara');
		$this->load->model('M_crud_order');
		$this->load->model('M_crud_petugas');
		$this->load->library('user_agent');
	}



	function index()
	{
		$idBandara = 1;
		$data['GetdataBandaraid'] = $this->M_crud_bandara->GetDataid($idBandara)->row();
		$data['kodeBoking'] = $this->M_crud_order->kodeBoking();
		$data['GetdataBandara'] = $this->M_crud_bandara->GetDataAll();
		$data['GetdataMaskapai'] = $this->M_crud_maskapai->GetDataAll();
		$this->load->view('dasboard/welcome', $data);
	}

	public function Simpan_order()
	{
		if (isset($_POST['proses'])) {
			$hasil = $this->M_crud_order->Simpan_order();
			if ($hasil) { ?>
				<script type="text/javascript">
					window.location = "<?php echo base_url() ?>Halaman_utama/CekPesanan";
				</script>
			<?php
			}
		} else {
			?>
			<script type="text/javascript">
				window.location = "<?php echo base_url() ?>Halaman_utama";
			</script>
<?php
		}
	}

	function CekPesanan()
	{
		if (isset($_POST['proses'])) {
			$data['getDataOrderEmail'] = $this->M_crud_order->getDataOrderEmail()->row();
			$this->load->view('dasboard/cekPesanan', $data);
		} else {
			$this->load->view('dasboard/cekPesanan');
		}
	}
}

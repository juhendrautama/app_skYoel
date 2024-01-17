<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class DataOrder extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_crud_admin');
		$this->load->model('M_crud_order');
		$this->load->model('M_crud_WeelChair');
		$this->load->model('M_crud_CarA');
		$this->load->model('M_crud_petugas');
	}

	public function index()
	{
		$this->load->view('admin/Homedataorder',);
	}

	public function WeelChair()
	{
		$data['getDataOrderIdadmin1'] = $this->M_crud_order->getDataOrderIdadmin1();
		$this->load->view('admin/dataorder1', $data);
	}

	public function CarAssistance()
	{
		$data['getDataOrderIdadmin2'] = $this->M_crud_order->getDataOrderIdadmin2();
		$this->load->view('admin/dataorder2', $data);
	}

	public function GetKonfir()
	{
		$data['getWeelChairAll'] = $this->M_crud_WeelChair->getWeelChairAll();
		$data['getCarAll'] = $this->M_crud_CarA->getCarAll();
		$id = $this->input->post('id');
		$data['getDataOrderidK'] = $this->M_crud_order->getDataOrderidK($id)->row();
		$this->load->view('admin/modal/isiKonfirmasi', $data);
	}

	public function GetPetugasK()
	{
		$idPkursi = $this->input->post('id');
		$data['GetPetugasidPkursi'] = $this->M_crud_petugas->GetPetugasidPkursi($idPkursi);
		$this->load->view('admin/GetPetugasidPkursi', $data);
	}

	public function GetPetugasM()
	{
		$idPmobil = $this->input->post('id');
		$data['GetPetugasidPmobil'] = $this->M_crud_petugas->GetPetugasidPmobil($idPmobil);
		$this->load->view('admin/GetPetugasidPmobil', $data);
	}

	public function JumOrder()
	{
		$idPmobil = $this->input->post('id');
		$tgl_brk = $this->input->post('tgl_brk');
		$waktu_brk = $this->input->post('waktu_brk');
		$JumlahPeM = $this->M_crud_order->JumlahPeM($idPmobil, $tgl_brk, $waktu_brk)->row();
		echo $JumlahPeM->jumdata;
	}

	public function Konfirmasi()
	{
		if (isset($_POST['proses'])) {
			$hasil1 = $this->M_crud_order->UbahTblOrder(); //buat queri
			if ($hasil1 == true) {
				$hasil2 = $this->M_crud_order->UbahTblPkursi(); //buat queri
				if ($hasil2 == true) { ?>
					<script type="text/javascript">
						window.location = "<?php echo base_url() ?>DataOrder/WeelChair";
					</script>
			<?php } else {
					echo "UbahTblPkursi gagal";
				}
			} else {
				echo "UbahTblOrder gagal";
			}
		} else {
			?>
			<script type="text/javascript">
				window.location = "<?php echo base_url() ?>Halaman_utama";
			</script>
			<?php
		}
	}

	public function KonfirmasiSelesai($id_order, $idPkursi)
	{

		$hasil1 = $this->M_crud_order->UbahTblOrderS($id_order); //buat queri
		if ($hasil1 == true) {
			$hasil2 = $this->M_crud_order->UbahTblPkursiS($idPkursi); //buat queri
			if ($hasil2 == true) { ?>
				<script type="text/javascript">
					window.location = "<?php echo base_url() ?>DataOrder/WeelChair";
				</script>
				<?php } else {
				echo "UbahTblPkursi gagal";
			}
		} else {
			echo "UbahTblOrder gagal";
		}
	}

	//konfirmasi Mobil
	public function KonfirmasiM()
	{
		if (isset($_POST['proses'])) {
			$hasil1 = $this->M_crud_order->UbahTblOrderM(); //buat queri
			if ($hasil1 == true) {
				$hasil2 = $this->M_crud_order->UbahTblPmobil(); //buat queri
				if ($hasil2 == true) { ?>
					<script type="text/javascript">
						window.location = "<?php echo base_url() ?>DataOrder/CarAssistance";
					</script>
			<?php } else {
					echo "UbahTblPkursi gagal";
				}
			} else {
				echo "UbahTblOrder gagal";
			}
		} else {
			?>
			<script type="text/javascript">
				window.location = "<?php echo base_url() ?>Halaman_utama";
			</script>
			<?php
		}
	}

	public function KonfirmasiSelesaiM($id_order, $idPkursi)
	{

		$hasil1 = $this->M_crud_order->UbahTblOrderSM($id_order); //buat queri
		if ($hasil1 == true) {
			$hasil2 = $this->M_crud_order->UbahTblPmobilS($idPkursi); //buat queri
			if ($hasil2 == true) { ?>
				<script type="text/javascript">
					window.location = "<?php echo base_url() ?>DataOrder/CarAssistance";
				</script>
<?php } else {
				echo "UbahTblPkursi gagal";
			}
		} else {
			echo "UbahTblOrder gagal";
		}
	}
	//konfirmasi Mobil
}





/* copy reg juhendra utama*/
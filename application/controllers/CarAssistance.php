<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class CarAssistance extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_CarA');
    }

    public function index()
    {
        $data['getCarAll'] = $this->M_crud_CarA->getCarAll();
        $this->load->view('admin/carassistance', $data);
    }
    public function SimpanData()
    {
        $hasil = $this->M_crud_CarA->SimpanData();
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>CarAssistance";
            </script>
        <?php
        }
    }
    public function GetmobilId()
    {
        $id = $this->input->post('id');
        $data['getCarid'] = $this->M_crud_CarA->getCarid($id)->row();
        $this->load->view('admin/modal/isiEditmobil', $data);
    }
    public function SimpanUbah()
    {
        $hasil = $this->M_crud_CarA->SimpanUbah();
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>CarAssistance";
            </script>
        <?php
        }
    }

    public function HapusData($idPmobil)
    {
        $hasil = $this->M_crud_CarA->HapusData($idPmobil);
        if ($hasil) {
        ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>CarAssistance";
            </script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
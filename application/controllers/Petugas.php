<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Petugas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_petugas');
    }

    public function index()
    {
        $data['GetmobilAll'] = $this->M_crud_petugas->GetmobilAll();
        $data['GetkursiAll'] = $this->M_crud_petugas->GetkursiAll();
        $data['GetPetugasAll'] = $this->M_crud_petugas->GetPetugasAll();
        $this->load->view('admin/petugas', $data);
    }

    public function SimpanData()
    {
        $hasil = $this->M_crud_petugas->SimpanData();
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>Petugas";
            </script>
        <?php
        }
    }

    public function GetPetugasId()
    {
        $id = $this->input->post('id');
        $data['GetPetugasid'] = $this->M_crud_petugas->GetPetugasid($id)->row();
        $data['GetmobilAll'] = $this->M_crud_petugas->GetmobilAll();
        $data['GetkursiAll'] = $this->M_crud_petugas->GetkursiAll();
        $this->load->view('admin/modal/isiEditPetugas', $data);
    }

    public function SimpanUbah()
    {
        $hasil = $this->M_crud_petugas->SimpanUbah();
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>Petugas";
            </script>
        <?php
        }
    }

    public function HapusData($idPetugas)
    {
        $hasil = $this->M_crud_petugas->HapusData($idPetugas);
        if ($hasil) {
        ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>Petugas";
            </script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
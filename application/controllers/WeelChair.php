<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class WeelChair extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_WeelChair');
    }

    public function index()
    {
        $data['getWeelChairAll'] = $this->M_crud_WeelChair->getWeelChairAll();
        $this->load->view('admin/weelchair', $data);
    }
    public function SimpanData()
    {
        $hasil = $this->M_crud_WeelChair->SimpanData();
        if ($hasil) { ?>
<script type="text/javascript">
window.location = "<?php echo base_url() ?>WeelChair";
</script>
<?php
        }
    }

    public function GetkursiId()
    {
        $id = $this->input->post('id');
        $data['getWeelChairid'] = $this->M_crud_WeelChair->getWeelChairid($id)->row();
        $this->load->view('admin/modal/isiEditkursi', $data);
    }

    public function SimpanUbah()
    {
        $hasil = $this->M_crud_WeelChair->SimpanUbah();
        if ($hasil) { ?>
<script type="text/javascript">
window.location = "<?php echo base_url() ?>WeelChair";
</script>
<?php
        }
    }

    public function HapusData($idPkursi)
    {
        $hasil = $this->M_crud_WeelChair->HapusData($idPkursi);
        if ($hasil) {
        ?>
<script type="text/javascript">
window.location = "<?php echo base_url() ?>WeelChair";
</script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
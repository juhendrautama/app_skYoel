<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Data_kompetensi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_crud_admin');
        $this->load->model('M_crud_data_kopetensi');
        $this->load->model('M_crud_data_pegawai');
        $this->load->model('M_crud_data_bidang');
    }

    public function index()
    {
        $data['tampil_data_bidang'] = $this->M_crud_data_bidang->tampil_data_bidang();
        $data['tampil_data_pegawai'] = $this->M_crud_data_pegawai->tampil_data_pegawai();
        $this->load->view('admin/data_kopetensi', $data);
    }

    public function Detail_data($id_pegawai)
    {
        $data['tampil_data_pegawai_id'] = $this->M_crud_data_pegawai->tampil_data_pegawai_id($id_pegawai);
        $data['data_kopetensi_id_pegawai'] = $this->M_crud_data_kopetensi->data_kopetensi_id_pegawai($id_pegawai);
        $this->load->view('admin/data_kopetensi_detail', $data);
    }



    public function Simpan_data_kopetensi()
    {

        $id_pegawai = $this->db->escape_str($this->input->post('id_pegawai'));
        $hasil = $this->M_crud_data_kopetensi->Simpan_data_kopetensi();
        if ($hasil) { ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>Data_kompetensi/Detail_data/<?php echo $id_pegawai; ?>";
            </script>
        <?php
        }
    }

    public function Hapus_data($id_kopetensi, $id_pegawai)
    {
        $hasil = $this->M_crud_data_kopetensi->Hapus_data($id_kopetensi);
        if ($hasil) {
        ?>
            <script type="text/javascript">
                window.location = "<?php echo base_url() ?>Data_kompetensi/Detail_data/<?php echo $id_pegawai; ?>";
            </script>
<?php
        }
    }
}





/* copy reg juhendra utama*/
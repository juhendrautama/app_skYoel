<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_crud_order extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //frame

    function kodeBoking()
    {
        $this->db->select('RIGHT(tbl_order.kodeBoking,2) as kode', FALSE);
        $this->db->order_by('id_order', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_order');      //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.      
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada      
            $kode = 1;
        }
        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodejadi = "0" . $kodemax;
        return $kodejadi;
    }

    function Simpan_order()
    {
        $kodeBoking = $this->db->escape_str($this->input->post('kodeBoking'));
        $nama = $this->db->escape_str($this->input->post('nama'));
        $alamat = $this->db->escape_str($this->input->post('alamat'));
        $usia = $this->db->escape_str($this->input->post('usia'));
        $jenisKelamin = $this->db->escape_str($this->input->post('jenisKelamin'));
        $email = $this->db->escape_str($this->input->post('email'));
        $idBandara = $this->db->escape_str($this->input->post('idBandara'));
        $idMaskapai = $this->db->escape_str($this->input->post('idMaskapai'));
        $KategoriBoking = $this->db->escape_str($this->input->post('KategoriBoking'));
        $boardingTime = $this->db->escape_str($this->input->post('boardingTime'));
        $tgl_berangkat = $this->db->escape_str($this->input->post('tgl_berangkat'));
        $waktuBerangkat = $this->db->escape_str($this->input->post('waktuBerangkat'));
        $alasanPeminjaman = $this->db->escape_str($this->input->post('alasanPeminjaman'));
        $tempatJemput = $this->db->escape_str($this->input->post('tempatJemput'));
        $tgl_daftar = Date("Y-m-d");
        $sql = $this->db->query("
		INSERT INTO `tbl_order`
        (`id_order`, 
        `kodeBoking`, 
        `nama`, 
        `usia`, 
        `jenisKelamin`, 
        `email`, 
        `alamat`, 
        `idBandara`, 
        `idMaskapai`, 
        `KategoriBoking`, 
        `boardingTime`, 
        `tgl_berangkat`,
        `waktuBerangkat`, 
        `alasanPeminjaman`, 
        `tempatJemput`, 
        `status`, 
        `tgl_daftar`) 
        VALUES 
        (NULL,
        '$kodeBoking',
        '$nama',
        '$usia',
        '$jenisKelamin',
        '$email',
        '$alamat',
        '$idBandara',
        '$idMaskapai',
        '$KategoriBoking',
        '$boardingTime',
        '$tgl_berangkat',
        '$waktuBerangkat',
        '$alasanPeminjaman',
        '$tempatJemput',
        '1',
        '$tgl_daftar')
		");
        return $sql;
    }
    function getDataOrder()
    {
        $hsl = $this->db->query("SELECT `id_order`, `kodeBoking`, `nama`, `usia`, `jenisKelamin`, `email`, `alamat`, `idBandara`, `idMaskapai`, `KategoriBoking`, `boardingTime`, `tgl_berangkat`, `waktuBerangkat`, `tempatJemput`, `alasanPeminjaman`, `status`, `tgl_daftar` FROM `tbl_order` ");
        return $hsl;
    }

    function getDataOrderEmail()
    {
        $email = $this->db->escape_str($this->input->post('email'));
        $hsl = $this->db->query("SELECT `id_order`, `kodeBoking`, `nama`, `usia`, `jenisKelamin`, `email`, `alamat`, `idBandara`, `idMaskapai`, `KategoriBoking`, `boardingTime`, `tgl_berangkat`, `waktuBerangkat`, `tempatJemput`, `alasanPeminjaman`, `status`, `tgl_daftar`,`idPetugas`   FROM `tbl_order` where email='$email' ");
        return $hsl;
    }


    //admin

    // wilscher
    function getDataOrderIdadmin1()
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $hsl = $this->db->query("SELECT `id_order`, `kodeBoking`, `nama`, `usia`, `jenisKelamin`, `email`, `alamat`, `idBandara`, `idMaskapai`, `KategoriBoking`, `boardingTime`, `tgl_berangkat`, `waktuBerangkat`, `tempatJemput`, `alasanPeminjaman`, `status`, `tgl_daftar`,`idPkursi` FROM `tbl_order` where idBandara='$idBandara' and idMaskapai='$idMaskapai'and KategoriBoking='1' ");
        return $hsl;
    }
    // wilscher
    //mobil
    function getDataOrderIdadmin2()
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $hsl = $this->db->query("SELECT `id_order`, `kodeBoking`, `nama`, `usia`, `jenisKelamin`, `email`, `alamat`, `idBandara`, `idMaskapai`, `KategoriBoking`, `boardingTime`, `tgl_berangkat`, `waktuBerangkat`, `tempatJemput`, `alasanPeminjaman`, `status`, `tgl_daftar`,`idPkursi`  FROM `tbl_order` where idBandara='$idBandara' and idMaskapai='$idMaskapai'and KategoriBoking='2' ");
        return $hsl;
    }
    //mobil
    function getDataOrderidK($id)
    {
        $hsl = $this->db->query("SELECT `id_order`, `kodeBoking`, `nama`, `usia`, `jenisKelamin`, `email`, `alamat`, `idBandara`, `idMaskapai`, `KategoriBoking`, `boardingTime`, `tgl_berangkat`, `waktuBerangkat`, `tempatJemput`, `alasanPeminjaman`, `status`, `tgl_daftar` FROM `tbl_order` where id_order='$id' ");
        return $hsl;
    }
    //konfirmasi terima
    function UbahTblOrder()
    {
        $id_order = $this->db->escape_str($this->input->post('id_order'));
        $idPkursi = $this->db->escape_str($this->input->post('idPkursi'));
        $idPetugas = $this->db->escape_str($this->input->post('idPetugas'));
        $sql = $this->db->query("
        UPDATE `tbl_order` 
		SET 
        `status`='2',
		`idPkursi`='$idPkursi',
		`idPetugas`='$idPetugas'
		WHERE 
		`id_order`='$id_order'
		");
        return $sql;
    }
    function UbahTblPkursi()
    {
        $idPkursi = $this->db->escape_str($this->input->post('idPkursi'));
        $sql = $this->db->query("
        UPDATE `tbl_Pkursi` 
		SET 
		`statusK`='2'
		WHERE 
		`idPkursi`='$idPkursi'
		");
        return $sql;
    }

    //konfirmasi terima

    //konfirmasi selesai
    function UbahTblOrderS($id_order)
    {
        $sql = $this->db->query("
        UPDATE `tbl_order` 
		SET 
        `status`='3'
		WHERE 
		`id_order`='$id_order'
		");
        return $sql;
    }
    function UbahTblPkursiS($idPkursi)
    {
        $sql = $this->db->query("
        UPDATE `tbl_Pkursi` 
		SET 
		`statusK`='1'
		WHERE 
		`idPkursi`='$idPkursi'
		");
        return $sql;
    }
    //konfirmasi selesai


    //Konfirmasi Mobil
    function JumlahPeM($idPmobil, $tgl_brk, $waktu_brk)
    {
        $idBandara = $this->session->userdata('idBandara');
        $idMaskapai = $this->session->userdata('idMaskapai');
        $hsl = $this->db->query("SELECT COUNT(id_order) as jumdata FROM `tbl_order` WHERE  idBandara='$idBandara' and idMaskapai='$idMaskapai' and tgl_berangkat='$tgl_brk' and waktuBerangkat='$waktu_brk' and KategoriBoking='2'  and idPmobil='$idPmobil' ");
        return $hsl;
    }


    function UbahTblOrderM()
    {
        $id_order = $this->db->escape_str($this->input->post('id_order'));
        $idPmobil = $this->db->escape_str($this->input->post('idPmobil'));
        $idPetugas = $this->db->escape_str($this->input->post('idPetugas'));
        $sql = $this->db->query("
        UPDATE `tbl_order` 
		SET 
        `status`='2',
		`idPmobil`='$idPmobil',
		`idPetugas`='$idPetugas'
		WHERE 
		`id_order`='$id_order'
		");
        return $sql;
    }
    function UbahTblPmobil()
    {
        $idPmobil = $this->db->escape_str($this->input->post('idPmobil'));
        $sql = $this->db->query("
        UPDATE `tbl_Pmobil` 
		SET 
		`statusM`='2'
		WHERE 
		`idPmobil`='$idPmobil'
		");
        return $sql;
    }

    //konfirmasi selesai
    function UbahTblOrderSM($id_order)
    {
        $sql = $this->db->query("
         UPDATE `tbl_order` 
         SET 
         `status`='3'
         WHERE 
         `id_order`='$id_order'
         ");
        return $sql;
    }
    function UbahTblPmobilS($idPmobil)
    {
        $sql = $this->db->query("
         UPDATE `tbl_Pmobil` 
         SET 
         `statusM`='1'
         WHERE 
         `idPmobil`='$idPmobil'
         ");
        return $sql;
    }
    //konfirmasi selesai
    ///////////////////////////////////////////////////////////////////////////////

}

<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_obat extends Panada {

    public function __construct(){
        parent::__construct();
		$this->db = new library_db();
		$this->session = new Library_session();
                $this->obat = new Model_obat();
                $this->date = new Model_history();
    }

    public function index(){
        $this->date->cek_history_harian(date('Y-m-d'));
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Obat - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['verify'] = $this->session->get('verify_update');
        $this->session->remove('verify_update');
        $list = $this->obat->ambil();
        $views['list'] = $list;
        $views['jumlah'] = $this->obat->jumlah();

        $this->view_obat($views);
    }

    public function kadaluarsa(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Kadaluarsa Obat - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $this->view_kadaluarsa($views);
    }

    public function pemakaian_narkotik(){
        $this->date->cek_history_harian(date('Y-m-d'));
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Pemakaian Narkotik - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $list = $this->obat->ambil_narkotik();
        $views['narkotik'] = $list;
        $this->view_pemakaian_narkotik($views);
    }

    public function pemakaian_obat(){
        $this->date->cek_history_harian(date('Y-m-d'));
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Pemakaian Obat - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['verify']    = NULL;
        $views['list_nama_obat'] = $this->obat->ambil_nama_obat();
        $n='1';
        if($_POST){
            $tanggal2 = $_POST['tanggal'];
            $tanggal = $this->date->reverse($tanggal2);
            $intern = $_POST['unit_layanan'];
            $id_obat = $_POST['id_obat'];
            $jumlah = $_POST['jumlah'];
            $keterangan = $_POST['keterangan'];
            $this->obat->tambah_isi_pemakaian($intern, $tanggal, $id_obat, $jumlah, $keterangan);
            $views['verify']='pemakaian obat pada unit layanan '.$intern.' berhasil dimasukan.';
        }
        $this->view_pemakaian_obat($views);
    }

    public function tambah_jenis_obat(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Tambah Jenis Obat - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['verify'] = NULL;
        if($_POST){
            $nbk_obat = $_POST['nbk_obat'];
            $satuan_obat = $_POST['satuan_obat'];
            $narkotik = $_POST['narkotik'];
            $jumlah = $_POST['jumlah'];
            $this->obat->tambah_jenis_obat($nbk_obat, $satuan_obat, $narkotik, $jumlah);
            $views['verify']='Obat '.$nbk_obat.' telah berhasil dimasukan.';
        }
        $this->view_tambah_jenis_obat($views);
    }

    public function update($id){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Obat - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['daftar'] = $this->obat->ambil_obat($id);
        if($_POST){
            $nbk_obat = $_POST['nbk_obat'];
            $satuan_obat = $_POST['satuan_obat'];
            $stok_obat = $_POST['stok_obat'];
            $this->obat->update_jenis_obat($id, $nbk_obat, $satuan_obat, $stok_obat);
            $verify='Obat dengan ID '.$id.' berhasil di Update.';
            $this->session->set('verify_update',$verify);
            $this->redirect('index.php/obat');
        }
        $this->view_obat_update($views);
    }
}

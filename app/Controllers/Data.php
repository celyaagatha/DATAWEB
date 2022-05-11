<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Data_M;

class Data extends BaseController
{
    protected $datalist;
    protected $table = 'list_data';

    public function __construct()
    {
        $this->datalist = new Data_M();
    }

    public function index()
    {
        $getdata1 = $this->datalist->getdata_divisi1();
        $jumlah_divisi1 = count($getdata1);

        $getdata2 = $this->datalist->getdata_divisi2();
        $jumlah_divisi2 = count($getdata2);

        $getdata3 = $this->datalist->getdata_divisi3();
        $jumlah_divisi3 = count($getdata3);

        $getdata4 = $this->datalist->getdata_divisi4();
        $jumlah_divisi4 = count($getdata4);

        $data = array(
            'jumlah_divisi1' => $jumlah_divisi1,
            'jumlah_divisi2' => $jumlah_divisi2,
            'jumlah_divisi3' => $jumlah_divisi3,
            'jumlah_divisi4' => $jumlah_divisi4,
        );
        return view ('welcome_message', $data);
    }

    public function index_divisi1()
    {
        $db = \Config\Database::connect();
        $pager = \Config\Services::pager();
        $getdata = $this->datalist->getdata_divisi1();
        $total = count($getdata);
        $tampil = 10;
        $page = isset($_GET['page']);
        $keyword = $this->request->getVar("cari");

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
            if($keyword) {
                $sql = "SELECT * FROM list_data WHERE data_name LIKE '%$keyword%' AND divisi_id LIKE 1 ORDER BY tanggal DESC LIMIT $mulai,$tampil";
            } else {
                $sql = "SELECT * FROM list_data WHERE divisi_id LIKE 1 ORDER BY tanggal DESC LIMIT $mulai,$tampil";
            }
        } else {
            if($keyword){
                $sql = "SELECT * FROM list_data WHERE data_name LIKE '%$keyword%' AND divisi_id LIKE 1 ORDER BY tanggal DESC LIMIT 0,$tampil";
            } else {
                $sql = "SELECT * FROM list_data WHERE divisi_id LIKE 1 ORDER BY tanggal DESC LIMIT 0,$tampil";
            }
        }
        $row = [];
        $result = $db->query($sql);
        if ($result) {
            $row = $result->getResult();
        } 
        //$row = $result->getResult();
        $data = [
            'title' => "Divisi 1",
            'dataList' => $row,
            'pager' => $pager,
            'perPage' => $tampil,
            'total' => $total,
            'page' => $page,
            'keyword' => $keyword
        ];
        
        return view ('divisi1_view', $data);
    }

    public function index_divisi2()
    {
        $db = \Config\Database::connect();
        $pager = \Config\Services::pager();
        $getdata = $this->datalist->getdata_divisi2();
        $total = count($getdata);
        $tampil = 10;
        $page = isset($_GET['page']);
        $keyword = $this->request->getVar("cari");

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
            if($keyword) {
                $sql = "SELECT * FROM list_data WHERE data_name LIKE '%$keyword%' AND divisi_id LIKE 2 ORDER BY tanggal DESC LIMIT $mulai,$tampil";
            } else {
                $sql = "SELECT * FROM list_data WHERE divisi_id LIKE 2 ORDER BY tanggal DESC LIMIT $mulai,$tampil";
            }
        } else {
            if($keyword){
                $sql = "SELECT * FROM list_data WHERE data_name LIKE '%$keyword%' AND divisi_id LIKE 2 ORDER BY tanggal DESC LIMIT 0,$tampil";
            } else {
                $sql = "SELECT * FROM list_data WHERE divisi_id LIKE 2 ORDER BY tanggal DESC LIMIT 0,$tampil";
            }
        }
        $row = [];
        $result = $db->query($sql);
        if ($result) {
            $row = $result->getResult();
        } 
        //$row = $result->getResult();
        $data = [
            'title' => "Divisi 2",
            'dataList' => $row,
            'pager' => $pager,
            'perPage' => $tampil,
            'total' => $total,
            'page' => $page,
            'keyword' => $keyword
        ];
        
        return view ('divisi2_view', $data);
    }

    public function index_divisi3()
    {
        $db = \Config\Database::connect();
        $pager = \Config\Services::pager();
        $getdata = $this->datalist->getdata_divisi3();
        $total = count($getdata);
        $tampil = 10;
        $page = isset($_GET['page']);
        $keyword = $this->request->getVar("cari");

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
            if($keyword) {
                $sql = "SELECT * FROM list_data WHERE data_name LIKE '%$keyword%' AND divisi_id LIKE 3 ORDER BY tanggal DESC LIMIT $mulai,$tampil";
            } else {
                $sql = "SELECT * FROM list_data WHERE divisi_id LIKE 3 ORDER BY tanggal DESC LIMIT $mulai,$tampil";
            }
        } else {
            if($keyword){
                $sql = "SELECT * FROM list_data WHERE data_name LIKE '%$keyword%' AND divisi_id LIKE 3 ORDER BY tanggal DESC LIMIT 0,$tampil";
            } else {
                $sql = "SELECT * FROM list_data WHERE divisi_id LIKE 3 ORDER BY tanggal DESC LIMIT 0,$tampil";
            }
        }
        $row = [];
        $result = $db->query($sql);
        if ($result) {
            $row = $result->getResult();
        } 
        //$row = $result->getResult();
        $data = [
            'title' => "Divisi 3",
            'dataList' => $row,
            'pager' => $pager,
            'perPage' => $tampil,
            'total' => $total,
            'page' => $page,
            'keyword' => $keyword
        ];

        return view ('divisi3_view', $data);
    }
    public function index_divisi4()
    {
        $db = \Config\Database::connect();
        $pager = \Config\Services::pager();
        $getdata = $this->datalist->getdata_divisi2();
        $total = count($getdata);
        $tampil = 10;
        $page = isset($_GET['page']);
        $keyword = $this->request->getVar("cari");

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
            if($keyword) {
                $sql = "SELECT * FROM list_data WHERE data_name LIKE '%$keyword%' AND divisi_id LIKE 4 ORDER BY tanggal DESC LIMIT $mulai,$tampil";
            } else {
                $sql = "SELECT * FROM list_data WHERE divisi_id LIKE 4 ORDER BY tanggal DESC LIMIT $mulai,$tampil";
            }
        } else {
            if($keyword){
                $sql = "SELECT * FROM list_data WHERE data_name LIKE '%$keyword%' AND divisi_id LIKE 4 ORDER BY tanggal DESC LIMIT 0,$tampil";
            } else {
                $sql = "SELECT * FROM list_data WHERE divisi_id LIKE 4 ORDER BY tanggal DESC LIMIT 0,$tampil";
            }
        }
        $row = [];
        $result = $db->query($sql);
        if ($result) {
            $row = $result->getResult();
        } 
        //$row = $result->getResult();
        $data = [
            'title' => "Divisi 4",
            'dataList' => $row,
            'pager' => $pager,
            'perPage' => $tampil,
            'total' => $total,
            'page' => $page,
            'keyword' => $keyword
        ];
        
        return view ('divisi4_view', $data);
    }

    public function hapus($id)
    {

        $where = ['id' => $id];
        $hapusFile = $this->datalist->find($id);
        if ($hapusFile['file'] != "not-found.png") {
            unlink('files/'.$hapusFile['file']);
        } else {
            $hapusFile['file'] = "";
        }

        if ($hapusFile['divisi_id'] == 1) {
            try {
                $hapus = $this->datalist->hapusData($this->table,$where);
                if($hapus){
                    echo "<script>alert('Data berhasil dihapus'); window.location='".base_url('/Data/index_divisi1')."';</script>";
                } else {
                    echo "<script>alert('Data gagal dihapus'); window.location='".base_url('/Data/index_divisi1')."';</script>";
                }
            }
            catch (\Exception $e){
                echo "<script>alert('Data tidak ditemukan'); window.location='".base_url('/Data/index_divisi1')."';</script>";
            }
        } else if($hapusFile['divisi_id'] == 2) {
            try {
                $hapus = $this->datalist->hapusData($this->table,$where);
                if($hapus){
                    echo "<script>alert('Data berhasil dihapus'); window.location='".base_url('/Data/index_divisi2')."';</script>";
                } else {
                    echo "<script>alert('Data gagal dihapus'); window.location='".base_url('/Data/index_divisi2')."';</script>";
                }
            }
            catch (\Exception $e){
                echo "<script>alert('Data tidak ditemukan'); window.location='".base_url('/Data/index_divisi2')."';</script>";
            }
        } else if($hapusFile['divisi_id'] == 3) {
            try {
                $hapus = $this->datalist->hapusData($this->table,$where);
                if($hapus){
                    echo "<script>alert('Data berhasil dihapus'); window.location='".base_url('/Data/index_divisi3')."';</script>";
                } else {
                    echo "<script>alert('Data gagal dihapus'); window.location='".base_url('/Data/index_divisi3')."';</script>";
                }
            }
            catch (\Exception $e){
                echo "<script>alert('Data tidak ditemukan'); window.location='".base_url('/Data/index_divisi3')."';</script>";
            }
        } else if($hapusFile['divisi_id'] == 4) {
            try {
                $hapus = $this->datalist->hapusData($this->table,$where);
                if($hapus){
                    echo "<script>alert('Data berhasil dihapus'); window.location='".base_url('/Data/index_divisi4')."';</script>";
                } else {
                    echo "<script>alert('Data gagal dihapus'); window.location='".base_url('/Data/index_divisi4')."';</script>";
                }
            }
            catch (\Exception $e){
                echo "<script>alert('Data tidak ditemukan'); window.location='".base_url('/Data/index_divisi4')."';</script>";
            }
        }
    }
    public function simpan(){
        
        if (!$this->validate ([
            'file' => [
                'rules' => 'max_size[file,30750]',
                'errors' => [
                    'max_size' => 'Ukuran file terlalu besar (maks 30 mb).'
                ]
            ]
        ])) {
            return redirect()->to('admin-divisi-1')->withInput();
        };
        $data_name = $this->request->getPost("data_name");
        $divisi = $this->request->getPost("divisi");
        $fileData = $this->request->getFile("file");
        $link = $this->request->getPost("link");
        if($fileData->getError() == 4)
        {
	        $namaFile = 'not-found.png';
        } else
        {
	        $fileData->move('files');
            $namaFile = $fileData->getName();
        }
        
        $data = [
            'data_name' => $data_name,
            'divisi_id' => $divisi,
            'file' => $namaFile,
            'link' => $link,
        ];
        if($divisi == 1) {
            try
            {
                $simpan = $this->datalist->simpanData($this->table,$data);
                if($simpan){
                    echo "<script>alert('Data berhasil disimpan'); window.location='".base_url('/Data/index_divisi1')."';</script>";
                } else if ($data_name != $data['data_name']){
                    echo "<script>alert('Data sudah ada sebelumnya'); window.location='".base_url('/Data/index_divisi1')."';</script>";
                }
            }
            catch (\Exception $e){
                echo "<script>alert('Data gagal disimpan'); window.location='".base_url('/Data/index_divisi1')."';</script>";
            }
        } else if($divisi == 2) {
            try
            {
                $simpan = $this->datalist->simpanData($this->table,$data);
                if($simpan){
                    echo "<script>alert('Data berhasil disimpan'); window.location='".base_url('/Data/index_divisi2')."';</script>";
                } else {
                    echo "<script>alert('Data gagal disimpan'); window.location='".base_url('/Data/index_divisi2')."';</script>";
                }
            }
            catch (\Exception $e){
                echo "<script>alert('Data sudah ada sebelumnya'); window.location='".base_url('/Data/index_divisi2')."';</script>";
            }
        } else if($divisi == 3) {
            try
            {
                $simpan = $this->datalist->simpanData($this->table,$data);
                if($simpan){
                    echo "<script>alert('Data berhasil disimpan'); window.location='".base_url('/Data/index_divisi3')."';</script>";
                } else {
                    echo "<script>alert('Data gagal disimpan'); window.location='".base_url('/Data/index_divisi3')."';</script>";
                }
            }
            catch (\Exception $e){
                echo "<script>alert('Data sudah ada sebelumnya'); window.location='".base_url('/Data/index_divisi3')."';</script>";
            }
        } else if($divisi == 4) {
            try
            {
                $simpan = $this->datalist->simpanData($this->table,$data);
                if($simpan){
                    echo "<script>alert('Data berhasil disimpan'); window.location='".base_url('/Data/index_divisi4')."';</script>";
                } else {
                    echo "<script>alert('Data gagal disimpan'); window.location='".base_url('/Data/index_divisi4')."';</script>";
                }
            }
            catch (\Exception $e){
                echo "<script>alert('Data sudah ada sebelumnya'); window.location='".base_url('/Data/index_divisi4')."';</script>";
            }
        }
    }

    public function detail($id){
        $data = [
            'title' => "Lihat Data",
            'dataList' => $this->datalist->detailData($id)
        ];
        return view('view_file',$data);
    }
    
    public function cari() {
        $db = \Config\Database::connect();
                $pager = \Config\Services::pager();
        
        $keyword = $this->request->getVar('keyword');
        if($keyword) {
            $row = $this->datalist->cari($keyword);
        } else
        {
            $row = $this->datalist->getdata();
        }

        $getdata = $this->datalist->getdata();
        $total = count($getdata);
        $tampil = 10;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $mulai = ($tampil * $page) - $tampil;
        } else {
        }

        $page = isset($_GET['page']);
        $data = [
            'dataList' => $row,
            'pager' => $pager,
            'perPage' => $tampil,
            'total' => $total,
            'page' => $page,
        ];

        $data = [
            'dataList' => $row
        ];

        return view('divisi_view', $data);
    }
}

?>
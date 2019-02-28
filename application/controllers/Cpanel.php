<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpanel extends CI_Controller {
	public $model = NULL;

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->helper("url");
 		$this->load->model('Admin_model');
 		$this->model = $this->Admin_model;
 		$this->load->database();
 		$this->load->helper('url');
  	}

  		public function login()
 	{
 		$this->model->administrator();
 		redirect('cpanel/index');
 	}
 	public function logout()
 	{
 		session_destroy();
 		redirect('cpanel/index');	
 	}
	public function index()
	{

 		if(isset($_SESSION['sesiadmin'])){
		$data =$this->model->Getsambutan();
		$carousel =$this->model->Getcarousel();
		$this->load->view('admin/header');
		$this->load->view('admin/carousel',['carousel'=>$carousel]);
		$this->load->view('admin/sambutan',array('data'=> $data));
		$this->load->view('admin/carousel_tampil',['carousel'=>$carousel]);
		$this->load->view('admin/footer');
		}else{
			$this->load->view('web/header');
	 		$this->load->view("admin/login");
 		}
	}

		public function edit_sambutan($id=1){

 		if(isset($_SESSION['sesiadmin'])){
		$sambutan = $this->model->Getsambutan("where id = '$id'");
		$data_sambutan = array(
			"id" => $sambutan[0]['id'],
			"nama" => $sambutan[0]['nama'],
			"isi_sambutan" => $sambutan[0]['isi_sambutan'],
			"gambar" => $sambutan[0]['gambar']
			);
		$this->load->view('admin/header');
		$this->load->view("admin/edit_sambutan",$data_sambutan);
		$this->load->view('admin/footer');
		}else{
	 		$this->load->view('error404');
 		}
 	}
		
 	public function update_sambutan(){

 		if(isset($_SESSION['sesiadmin'])){
 			  $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './asset/gambar/sambutan/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '500048';
        $config['max_width']  = '170'; //lebar maksimum 1288 px
        $config['max_height']  = '200'; //tinggi maksimu 768 px //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
            	$id = $_POST['id'];
                $nama= $_POST['nama'];
                $isi_sambutan= $_POST['isi_sambutan'];
                $gbr = $this->upload->data();
                $updatedata = array(
                  'gambar' =>$gbr['file_name'],
                  'nama'=>$nama,
                  'isi_sambutan'=>$isi_sambutan
                   );
 				$where = array('id' => $id);
                $res = $this->model->update('sambutan',$updatedata,$where); //akses model untuk menyimpan ke database
                if($res>=1){
					redirect('cpanel');
				}}else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('cpanel'); //jika gagal maka akan ditampilkan form upload
            }
        }}else{
	 		$this->load->view('error404');
 		}
	}

	public function Pengumuman()
	{

 		if(isset($_SESSION['sesiadmin'])){
		$data =$this->model->Getpengumuman();
		$this->load->view('admin/header');
		$this->load->view('admin/pengumuman',array('data'=> $data));
		$this->load->view('admin/footer');
		}else{
	 		$this->load->view('error404');
 		}
	}

	public function add_pengumuman(){

 		if(isset($_SESSION['sesiadmin'])){
 		$data =$this->model->getpengumuman();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tambah_pengumuman',['data'=>$data]);
 		$this->load->view('admin/footer');
 		}else{
	 		$this->load->view('error404');
 		}
 		
 	}
 	public function proses_add_pengumuman(){

 		if(isset($_SESSION['sesiadmin'])){
		$judul = $_POST['judul'];
		$waktu = date("H:i  d-m-Y");
		$isi = $_POST['isi'];
		$inputdata = array(
			'judul' => $judul,
			'waktu' => $waktu,
			'isi' => $isi  
			);
		$res = $this->model->input('pengumuman',$inputdata);
		if($res>=1){
			redirect('cpanel/pengumuman');
		}else{
			echo "input data gagal";
		}
		}else{
	 		$this->load->view('error404');
 		}
		
	}

	public function delete_pengumuman($id){

 		if(isset($_SESSION['sesiadmin'])){
	 	$where = array('id' => $id);
	 	$res = $this->model->delete('pengumuman',$where);
	 	if($res>=1){
	 		redirect('cpanel/pengumuman');
	 	}else{
	 		echo "gagal delete";
	 	}
	 	}else{
	 		$this->load->view('error404');
 		}
	}


	public function add_carousel(){

 		if(isset($_SESSION['sesiadmin'])){
 		$data =$this->model->getcarousel();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tambah_carousel',['data'=>$data]);
 		$this->load->view('admin/footer');
 		}else{
	 		$this->load->view('error404');
 		}
 		
 	}

 	public function proses_add_carousel(){
 		if(isset($_SESSION['sesiadmin'])){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './asset/gambar/carousel/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10048'; //maksimum besar file 2M
        $config['max_width']  = '1368'; //lebar maksimum 1288 px
        $config['max_height']  = '406'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'gambar' =>$gbr['file_name']
                   
                );
 
                $res = $this->model->input('carousel',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
    
                redirect('cpanel'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('cpanel'); //jika gagal maka akan ditampilkan form upload
            }
        }
    
    }else{
	 		$this->load->view('error404');
 		}}
	public function delete_carousel($id){

 		if(isset($_SESSION['sesiadmin'])){
	 	$where = array('id' => $id);
	 	$res = $this->model->delete('carousel',$where);
	 	if($res>=1){
	 		redirect('cpanel');
	 	}else{
	 		echo "gagal delete";
	 	}
	 	}else{
	 		$this->load->view('error404');
 		}
	}

	public function jadwal_kuliah()
	{

 		if(isset($_SESSION['sesiadmin'])){
		$data =$this->model->Getjadwal();
		$this->load->view('admin/header');
		$this->load->view('admin/jadwal',array('data'=> $data));
		$this->load->view('admin/footer');
		}else{
	 		$this->load->view('error404');
 		}
	}

	public function add_jadwal(){

 		if(isset($_SESSION['sesiadmin'])){
 		$data =$this->model->getjadwal();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tambah_jadwal',['data'=>$data]);
 		$this->load->view('admin/footer');
 		}else{
	 		$this->load->view('error404');
 		}
 		
 	}
 	public function proses_add_jadwal(){

 		if(isset($_SESSION['sesiadmin'])){
		$hari = $_POST['hari'];
		$jam = $_POST['jam'];
		$mata_kuliah = $_POST['mata_kuliah'];
		$kode = $_POST['kode'];
		$ruang = $_POST['ruang'];
		$inputdata = array(
			'hari' => $hari,
			'jam' => $jam,
			'mata_kuliah' => $mata_kuliah,
			'kode' => $kode,
			'ruang' => $ruang   
			);
		$res = $this->model->input('jadwal',$inputdata);
		if($res>=1){
			redirect('cpanel/jadwal_kuliah');
		}else{
			echo "input data gagal";
		}
		}else{
	 		$this->load->view('error404');
 		}
		
	}

	public function edit_jadwal($id){
		
 		if(isset($_SESSION['sesiadmin'])){
 			
		$jadwal = $this->model->Getjadwal("where id = '$id'");
		$data_jadwal = array(
			"id" => $jadwal[0]['id'],
			"kode" => $jadwal[0]['kode'],
			"hari" => $jadwal[0]['hari'],
			"jam" => $jadwal[0]['jam'],
			"mata_kuliah" => $jadwal[0]['mata_kuliah'],
			"ruang" => $jadwal[0]['ruang']
			);
		$this->load->view('admin/header');
		$this->load->view("admin/edit_jadwal",$data_jadwal);
		$this->load->view('admin/footer');
		}else{
	 		$this->load->view('error404');
 		}
 	}
		
 	public function update_jadwal(){

 		if(isset($_SESSION['sesiadmin'])){
 		$id = $_POST['id'];
 		$hari = $_POST['hari'];
		$jam = $_POST['jam'];
		$mata_kuliah = $_POST['mata_kuliah'];
		$kode = $_POST['kode'];
		$ruang = $_POST['ruang'];
		$updatedata = array(
			'hari' => $hari,
			'jam' => $jam,
			'mata_kuliah' => $mata_kuliah,
			'kode' => $kode,
			'ruang' => $ruang   
			);
		$where = array('id' => $id);
		$res = $this->model->update('jadwal',$updatedata,$where);
		if($res>=1){
			redirect('cpanel/jadwal_kuliah');
		}
		}else{
	 		$this->load->view('error404');
 		}
	}
	public function delete_jadwal($id){

 		if(isset($_SESSION['sesiadmin'])){
	 	$where = array('id' => $id);
	 	$res = $this->model->delete('jadwal',$where);
	 	if($res>=1){
	 		redirect('cpanel/jadwal_kuliah');
	 	}else{
	 		echo "gagal delete";
	 	}
	 	}else{
	 		$this->load->view('error404');
 		}
	}

	
	public function data_mahasiswa()
	{
		if(isset($_SESSION['sesiadmin'])){
		$data =$this->model->Getmahasiswa();
		$this->load->view('admin/header');
		$this->load->view('admin/mahasiswa',array('data'=> $data));
		$this->load->view('admin/footer');
		}else{
	 		$this->load->view('error404');
 		}
	}

	public function add_mahasiswa(){
		if(isset($_SESSION['sesiadmin'])){
 		$data =$this->model->getmahasiswa();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tambah_mahasiswa',['data'=>$data]);
 		$this->load->view('admin/footer');
 		}else{
	 		$this->load->view('error404');
 		}
 		
 	}
 	public function proses_add_mahasiswa(){
 		if(isset($_SESSION['sesiadmin'])){
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$email = $_POST['email'];
		$inputdata = array(
			'nama' => $nama,
			'nim' => $nim,
			'email' => $email  
			);
		$res = $this->model->input('mahasiswa',$inputdata);
		if($res>=1){
			redirect('cpanel/data_mahasiswa');
		}else{
			echo "input data gagal";
		}
		}else{
	 		$this->load->view('error404');
 		}
		
	}

	public function edit_mahasiswa($nim=1301160009){
		if(isset($_SESSION['sesiadmin'])){
		$mhs = $this->model->Getmahasiswa("where nim = '$nim'");
		$data_mhs = array(
			"nama" => $mhs[0]['nama'],
			"nim" => $mhs[0]['nim'],
			"email" => $mhs[0]['email']
			);
		$this->load->view('admin/header');
		$this->load->view("admin/edit_mahasiswa",$data_mhs);
		$this->load->view('admin/footer');
		}else{
	 		$this->load->view('error404');
 		}
 	}
		
 	public function update_mahasiswa(){
 		if(isset($_SESSION['sesiadmin'])){
 		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$email = $_POST['email'];
		$updatedata = array(
			'nama' => $nama,
			'nim' => $nim,
			'email' => $email
			);
		$where = array('nim' => $nim);
		$res = $this->model->update('mahasiswa',$updatedata,$where);
		if($res>=1){
			redirect('cpanel/data_mahasiswa');
		}
		}else{
	 		$this->load->view('error404');
 		}
	}
	public function delete_mahasiswa($nim){
		if(isset($_SESSION['sesiadmin'])){
	 	$where = array('nim' => $nim);
	 	$res = $this->model->delete('mahasiswa',$where);
	 	if($res>=1){
	 		redirect('cpanel/data_mahasiswa');
	 	}else{
	 		echo "gagal delete";
	 	}
	 	}else{
	 		$this->load->view('error404');
 		}
	 	
	}


	public function data_dosen()
	{
		if(isset($_SESSION['sesiadmin'])){
		$data =$this->model->Getdosen();
		$this->load->view('admin/header');
		$this->load->view('admin/dosen',['data'=>$data]);
		$this->load->view('admin/footer');
		}else{
	 		$this->load->view('error404');
 		}
	}

	public function add_dosen(){
		if(isset($_SESSION['sesiadmin'])){
 		$data =$this->model->Getdosen();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tambah_dosen',['data'=>$data]);
 		$this->load->view('admin/footer');
 		}else{
	 		$this->load->view('error404');
 		}
 		
 	}
 	public function proses_add_dosen(){
 		if(isset($_SESSION['sesiadmin'])){
		$nama = $_POST['nama'];
		$mata_kuliah = $_POST['mata_kuliah'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$inputdata = array(
			'nama' => $nama,
			'mata_kuliah' => $mata_kuliah,
			'email' => $email,
			'tel' => $tel
			);
		$res = $this->model->input('dosen',$inputdata);
		if($res>=1){
			redirect('cpanel/data_dosen');
		}else{
			echo "input data gagal";
		}
		}else{
	 		$this->load->view('error404');
 		}
		
	}

	public function edit_dosen($id=true){
		if(isset($_SESSION['sesiadmin'])){
	    
		$dosen= $this->model->Getdosen("where id = '$id'");
		$data_dosen = array(
			"id" => $dosen[0]['id'],
			"nama" => $dosen[0]['nama'],
			"mata_kuliah" => $dosen[0]['mata_kuliah'],
			"email" => $dosen[0]['email'],
			"tel" => $dosen[0]['tel']
			);
		
		$this->load->view('admin/header');
		$this->load->view("admin/edit_dosen",$data_dosen);
		$this->load->view('admin/footer');
		}else{
	 		$this->load->view('error404');
 		}
 	}
	public function update_dosen(){
 	if(isset($_SESSION['sesiadmin'])){
 		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$mata_kuliah= $_POST['mata_kuliah'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$updatedata = array(
			'nama' => $nama,
			'mata_kuliah' => $mata_kuliah,
			'email' => $email,
			'tel' => $tel
			);
		$where = array('id' => $id);
		$res = $this->model->update('dosen',$updatedata,$where);
		if($res>=1){
			redirect('cpanel/data_dosen');
		}}else{
	 	$this->load->view("landing-template");
 		}
	}
	public function delete_dosen($id){
		if(isset($_SESSION['sesiadmin'])){
	 	$where = array('id' => $id);
	 	$res = $this->model->delete('dosen',$where);
	 	if($res>=1){
	 		redirect('cpanel/data_dosen');
	 	}else{
	 		echo "gagal delete";
	 	}
	 	}else{
	 		$this->load->view('error404');
 		}
	 	
	}

	public function struktur_organisasi(){
		if(isset($_SESSION['sesiadmin'])){
		$this->load->view('admin/header');
		$this->load->view('admin/struktur');
		$this->load->view('admin/footer');
	
	}else{
	 		$this->load->view('error404');
 		}
	}
}

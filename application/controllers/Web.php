<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public $model = NULL;

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->helper("url");
 		$this->load->model('web_model');
 		$this->model = $this->web_model;
 		$this->load->database();
 		$this->load->helper('url');
  	}
	public function index()
	{
		$data_pengumuman =$this->model->Getpengumuman_terbaru();
		$data =$this->model->Getsambutan();
		$carousel =$this->model->Getcarousel();
		$this->load->view('web/header');
		$this->load->view('admin/carousel',['carousel'=>$carousel]);
		$this->load->view('web/sambutan',array('data'=> $data));
		$this->load->view('web/pengumuman',array('data_pengumuman'=> $data_pengumuman));
		$this->load->view('web/footer');
	}

	public function Pengumuman()
	{
		$data =$this->model->Getpengumuman();
		$this->load->view('web/header');
		$this->load->view('web/pengumuman-tampil',array('data'=> $data));
		$this->load->view('web/footer');
	}

	public function jadwal_kuliah()
	{
		$data =$this->model->Getjadwal();
		$data_pengumuman =$this->model->Getpengumuman_terbaru();
		$this->load->view('web/header');
		$this->load->view('web/jadwal',array('data'=> $data));
		$this->load->view('web/pengumuman',array('data_pengumuman'=> $data_pengumuman));
		$this->load->view('web/footer');
	}

	public function data_mahasiswa()
	{
		$data =$this->model->Getmahasiswa();
		$data_pengumuman =$this->model->Getpengumuman_terbaru();
		$this->load->view('web/header');
		$this->load->view('web/mahasiswa',array('data'=> $data));
		$this->load->view('web/pengumuman',array('data_pengumuman'=> $data_pengumuman));
		$this->load->view('web/footer');
	}

	public function data_dosen()
	{
		$data =$this->model->Getdosen();
		$data_pengumuman =$this->model->Getpengumuman_terbaru();
		$this->load->view('web/header');
		$this->load->view('web/dosen',array('data'=> $data));
		$this->load->view('web/pengumuman',array('data_pengumuman'=> $data_pengumuman));
		$this->load->view('web/footer');
	}

	public function struktur_organisasi()
	{
		$this->load->view('web/header');
		$this->load->view('admin/struktur');
		$this->load->view('web/footer');
	}
}

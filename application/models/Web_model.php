
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_model extends CI_Model {

	public function Getpengumuman_terbaru(){
		$sql="SELECT * from pengumuman order by id desc limit 3";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function Getpengumuman(){
		$data = $this->db->query('SELECT * from pengumuman order by id desc limit 30');
		return $data->result_array();
	}

	public function Getsambutan(){
		$data = $this->db->query('SELECT * from sambutan order by id desc limit 1');
		return $data->result_array();
	}

	public function Getjadwal(){
		$data = $this->db->query('SELECT * from jadwal order by hari');
		return $data->result_array();
	}

	public function Getmahasiswa(){
		$data = $this->db->query('SELECT * from mahasiswa order by nim');
		return $data->result_array();
	}

	public function Getcarousel(){
		$data = $this->db->query('SELECT * from carousel order by id');
		return $data->result_array();
	}

	public function Getdosen(){
		$data = $this->db->query('SELECT * from dosen order by nama');
		return $data->result_array();
	}
}
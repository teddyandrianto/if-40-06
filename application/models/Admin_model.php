
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
	
		$this->load->database();
	}
	public function administrator() {
		$username = $this->input->POST('username', TRUE);
		$password = md5($this->input->POST('password', TRUE));
		$data = $this->db->query("SELECT * from user_admin where username= '$username' and password= '$password' LIMIT 1");
		$_SESSION['sesiadmin'] = $data->row()->username;
		return $data->row();
	}


	public function Getpengumuman(){
		$data = $this->db->query('SELECT * from pengumuman order by id desc limit 30');
		return $data->result_array();
	}

	public function Getsambutan(){
		$data = $this->db->query('SELECT * from sambutan order by id desc limit 1');
		return $data->result_array();
	}

	public function Getcarousel(){
		$data = $this->db->query('SELECT * from carousel order by id');
		return $data->result_array();
	}

	public function Getjadwal($where=""){
		$data = $this->db->query('SELECT * FROM jadwal '.$where);
		return $data->result_array();
	}

	public function Getmahasiswa($where=""){
		$data = $this->db->query('SELECT * FROM mahasiswa '.$where);
		return $data->result_array();
	}

	public function Getdosen($where=""){
		$data = $this->db->query('SELECT * FROM dosen '.$where);
		return $data->result_array();
	}

	public function input($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function update($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function delete($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}

	
}
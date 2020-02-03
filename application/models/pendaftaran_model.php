<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran_model extends CI_Model {

    public function __construct(){
	    parent::__construct();
	    $this->load->database();
	}

	public function add_data($data)
	{
		$add = $this->db->insert('pasien', $data);

		if($add){
			return "add data berhasil";
		}else{
			return "add data gagal";
		}
	}

	public function add_antrian($data){
		$add = $this->db->insert('antrian', $data);

		if($add){
			return "add data antrian berhasil";
		}else{
			return "add data antrian gagal";
		}
	}
}

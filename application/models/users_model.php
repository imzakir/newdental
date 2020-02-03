<?php 

Class users_model extends CI_Model{

	public function get_data($id){

		$data = $this->db->get_where('user', ['id_dental' => $id])->result();

		return $data;

	}

	public function detail_user($id){
		$data = $this->db->get_where('user', ['id_user' => $id])->row_array();
		return $data;
	}

	public function update($data){
		$update = $this->db->set($data)->where('id_user', $data['id_user'])->update('user');

		if($update){
			return "edit data berhasil";
		}else{
			return "edit data gagal";
		}
	}

	public function add_user($data){
		$add = $this->db->insert($data);

		if($data){
			return "add data berhasil";
		}else{
			return "add data gagal";
		}
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function cek_login($data){

		$cekuser = $this->db->get_where('user', ['username' => $data['username']])->num_rows();
		
		if($cekuser > 0){
			$cekpassword = $this->db->where('username', $data['username'])->get('user')->row_array();

			if($cekpassword['password'] == md5($data['password'])){

				return $cekpassword;

			}else{
				return 'login gagal';
			}
			
		}else{
			return 'username tidak ditemukan';
		}
	}
}

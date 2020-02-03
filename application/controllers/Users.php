<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index(){	
		$id = $this->session->id_dental;
		$data['users'] = $this->users->get_data($id);
		$this->load->view('users', $data);
	}

	public function edit_user($id){
		$data['users'] = $this->users->detail_user($id);

		if($this->session->role == 'Admin'){
			$this->load->view('edit', $data);			
		}else{
			echo "Anda bukan admin";
		}
	}

	public function act_edit($id){
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');

		$data = ['nama' => $nama, 'password' => md5($password), 'id_user' => $id];
		$update = $this->users->update($data);

		echo $update;
	}

	public function add_user(){

		$id_dental = $this->session->id_dental;

		if(!empty($id_dental && $this->session->role == 'Admin')){
			$this->load->view('add-user');
		}else{
			echo "Anda bukan admin";
		}
	}

	public function act_add(){
		$id_dental = $this->session->id_dental;

		if(!empty($id_dental && $this->session->role == 'Admin')){

			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = [
				'id_dental' => $id_dental,
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				]
			echo $this->users->add_user($data);

		}else{
			echo "tidak bisa menambah data user";
		}
	}

}

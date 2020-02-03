<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}

	public function action_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = ['username' => $username, 'password' => $password];

		$login = $this->login->cek_login($data);

		if(is_array($login)){

			$set_session = [
						'id_dental' => $login['id_dental'],
						'id' => $login['id_user'],
						'role' => $login['role_user']
					];
			$this->session->set_userdata($set_session);
			echo "login berhasil";
		}else{
			echo $login;
		}
	}

	public function logout(){
		$this->session->sess_destroy();
	}

}

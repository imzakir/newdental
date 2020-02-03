<?php
date_default_timezone_set("Asia/Jakarta");
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function index(){
		$this->load->view('pendaftaran');
	}

	public function add_pasien(){
		$nama_pasien = $this->input->post('nama_pasien');
		$kelamin = $this->input->post('kelamin');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');
		$kontak = $this->input->post('kontak');
		$tgl = strtotime($tgl_lahir);
		$tanggal = date('d-m-Y', $tgl);


		$data = [
				'nama_pasien' => $nama_pasien,
				'alamat' => $alamat,
				'umur' => $umur,
				'gender' => $kelamin,
				'tanggal_lahir' => $tanggal,
				'kontak_pasien' => $kontak
			];

		$add = $this->pendaftaran->add_data($data);

		echo $add;
	}

	public function antrian(){
		$cekrole = $this->session->role;

		if($cekrole == 'Dokter'){
			$this->load->view('antrian');
		}else{
			echo "login dulu cok !!";
		}

	}

	public function add_antrian(){
		$id_pasien = $this->input->post('id_pasien');

		$cek_pasien = $this->db->get_where('pasien', ['id_pasien' => $id_pasien])->num_rows();
		$cekdate = $this->db->like('created_at', date('Y-m-d'))->get('antrian')->result();

			if($cekdate){
				$nomor_antrian = end($cekdate)->nomor_antrian + 1;
			}else{
				$nomor_antrian = 1;
			}

		$data = ['id_pasien' => $id_pasien, 'nomor_antrian' => $nomor_antrian];

			if($cek_pasien > 0){
				echo $this->pendaftaran->add_antrian($data);			
			}else{
				echo "nomor pasien tidak terdaftar";
			}
	}

}
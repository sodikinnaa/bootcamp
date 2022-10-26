<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH."libraries/Server.php";
class Mahasiswa extends Server {

	// buat function get, untuk mengambil data
	function service_get(){
		// panggil model Mmahasiswa, parameter kedua sebagai alias bersifat opsional
		$this->load->model("Mmahasiswa","mdl",TRUE);
		// panggil function get_data yang ada pada model yang sudah diinstance dengan perintah diatas
		$hasil = $this->mdl->get_data();
		// memanggil function response ketika data berhasil diambil
		$this->response(array("mahasiswa" => $hasil),200);
	}
	// buat function put, untuk mengupdate data
	function service_put(){

	}
	// buat function POST, untuk mengnambahkan data
	function service_post(){
		//panggilmodel data
		$this->load->model("Mmahasiswa","mdl",TRUE);
		//ambl parameter data akan di isi
		$data = array(
			"npm" => $this->post("npm"),
			"nama" => $this->post("nama"),
			"telepon" => $this->post("telepon"),
			"jurusan" => $this->post("jurusan")
		);
		//panggil method "save)data:
		$hasil = $this->mdl->save_data();
		//jika hasil =0
		if(hasil == 0){
			$this -> response(array("status" => "Data Mahasiswa Berhasil disimpan", 200));
		}
		//jika hasil != 0
		else{
			$this -> response(array("status" => "Data Mahasiswa Gagal disimpan", 200));
		}

	}
	// buat function DELETE, untuk menghapus data
	function service_delete(){
		// panggil model Mmahasiswa
		$this->load->model("Mmahasiswa","mdl",TRUE);
		// ambil parameter token "npm"
		// kondisi where tidak harus primary key
		$token = $this->delete('npm');
		// panggil methode delete_data
		//$hasil = $this->mdl->delete_data(base64_encode($token));
		$hasil = $this->mdl->delete_data($token);
		// jika proses hapus berhasil terhapus
		if($hasil == 1){
			$this->response(array("status"=> "Data Mahasiswa berhasil dihapus"),200 );
		}
		// jika proses hapus gagal
		else{
			$this->response(array("status"=> "Data Mahasiswa Gagal dihapus"),200 );
		}
	}
    
}

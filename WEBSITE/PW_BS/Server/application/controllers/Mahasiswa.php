<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//akses file "libraries/server"
require APPPATH.'libraries/Server.php';
//extends class mahasiswa keserver
class Mahasiswa extends Server {
    //buat srevice tampil data
    function service_get(){
        // akses database 
//        $this->load->database();
        // panggil tb_mahasiswa
        $this->load->database();
        $this->db->from('tb_mahasiswa');
        $this->db->order_by('npm');
        // eksekusi query
        $hasil = $this->db->get()->result();
        // respon code
        $this->response($hasil,200);
    }

    //fungsi service hapus data
    function service_delet(){
        // load database
        $this->load->database();
        // ambil parameter id
        $npm = $this->db->delete("npm");
        // panggil tb_mahasiswa
        $this->db->form("tb_mahasiswa");
        $this->db->where("npm = '$npm'");
        //eksekusi query
        $hasil = $this->db->get()->result();

        //jika data tidak di temukan
        if($hasil == 0){
            //eksekusi hasil service
            $this->response(array('status' => 'Data gagal di hapus'), 200);
        }
        //jika data ditemukan
        else{
            // kondisi where
            $this->db->where("npm == '$npm'");
            $this->delete("tb_mahasiswa");
            $this->response(array('status' => 'Data berhasil di hapus'), 200);
        }
    }
}

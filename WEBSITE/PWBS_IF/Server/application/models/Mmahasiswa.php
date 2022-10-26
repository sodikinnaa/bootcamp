<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mmahasiswa extends CI_Model {

	// buat method untuk tampil data
    function get_data(){
        // Untuk berbagi API kita tidak disarankan untuk memberikan struktur tabel sebenrnya untuk itu kita harus membuat alias di masing" field
        $this->db->select("id AS id_mhs, npm AS npm_mhs, nama AS nama_mhs, telepon AS telepon_mhs, jurusan AS jurusan_mhs");
        // jika ingin mengambil salah satu field saja, jika tidak ditulis maka dianggap mengambil seluruh data
        // $this->db->select('npm');
        // Untuk mengambil seluruh data dari table mahasiswa
        $this->db->from('tb_mahasiswa');
        // untuk melakukan pengurutan data berdasarkan npm dengan aturan ascending,parameter dua bersifat opsional
        $this->db->order_by('npm','asc');

        // untuk melakukan query sql untuk mengambil data dan mengembalikan hasil
        $query = $this->db->get()->result();
        // mengembalikan data
        return $query;
    }

    function delete_data($token){
        //cek apakah npm ada/tidak
        $this->db->select("npm");
        //$this->db->from("tb_mahasiswa");
        //$this->db->from("tb_mahasiswa");
        //$this->db->where("TO_BASE64(npm) = '$token'");
        $this->db->where("npm = '$token'");

        $query = $this->db->get()->result();
        //Jika npm ditemukan
        if(count($query) == 1){
            //hapus data
            $this->db->where("npm = '$token'");
            $this->db->delete("tb_mahasiswa");
            //kirim nilai hasil = 1
            $hasil = 1;
        }
        //Jika tidak ditemukan
        else{
            $hasil  =0;
        }
        //kirim variabel hasil ke "controler" Mahasiswa
        return $hasil;
    }
    
}

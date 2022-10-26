<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

	public function index()
	{
        $this->load->view('home');
	}

    public function flex_1(){
        $this->load->view('flexbox/page_1');
    }

    public function flex_2(){
        $this->load->view('flexbox/page_2');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

	public function index()
	{
        $this->security_model->getSecurity();
        $this->load->model('pengembalian_model');
        $data = [
            'title'     => 'Daftar Data Pengembalian',
            'login'     => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'kembali'   => $this->pengembalian_model->getAllData(),
            'isi'       => 'pengembalian/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }

   
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $this->load->model('dashboard_model');
        $this->load->model('peminjaman_model');
        $this->security_model->getSecurity();
        $data = [
            'title'         => 'Dashboard',
            'login'         => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'anggota'       => $this->dashboard_model->countAnggota(),
            'buku'          => $this->dashboard_model->countBuku(),
            'pinjam'        => $this->dashboard_model->countPinjam(),
            'kembali'       => $this->dashboard_model->countKembali(),
            'peminjaman'    => $this->peminjaman_model->getDataPeminjaman(),
            'isi'           => 'dashboard/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }
}

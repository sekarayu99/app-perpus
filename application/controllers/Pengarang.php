<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengarang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengarang_model');
    }

	public function index()
	{
        $this->security_model->getSecurity();
        $data = [
            'title'     => 'Daftar Data Pengarang',
            'login'     => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'pengarang' => $this->db->get('pengarang')->result(),
            'isi'       => 'pengarang/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Pengarang',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'isi'   => 'pengarang/tambah'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function simpan()
    {
        $data = [
            'nama_pengarang' => $this->input->post('nama_pengarang')
        ];
        $query = $this->db->insert('pengarang', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
        redirect('pengarang');
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'Edit Data Pengarang',
            'login'     => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'pengarang' => $this->pengarang_model->edit($id),
            'isi'       => 'pengarang/edit'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function update()
    {
        $id_pengarang = $this->input->post('id_pengarang');
        $data = [
            'nama_pengarang' => $this->input->post('nama_pengarang')
        ];
        $query = $this->pengarang_model->update($id_pengarang, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
        redirect('pengarang');
    }

    public function hapus($id)
    {
        $query = $this->pengarang_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('pengarang');
    }


    
}
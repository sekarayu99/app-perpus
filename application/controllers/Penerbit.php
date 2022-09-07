<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penerbit_model');
    }

	public function index()
	{
        $this->security_model->getSecurity();
        $data = [
            'title'     => 'Daftar Data Penerbit',
            'login'     => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'penerbit'  => $this->db->get('penerbit')->result(),
            'isi'       => 'penerbit/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title'     => 'Tambah Data Penerbit',
            'login'     => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'isi'       => 'penerbit/tambah'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function simpan()
    {
        $data = [
            'nama_penerbit' => $this->input->post('nama_penerbit')
        ];
        $query = $this->db->insert('penerbit', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
        redirect('penerbit');
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'Edit Data Penerbit',
            'login'     => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'penerbit'  => $this->penerbit_model->edit($id),
            'isi'       => 'penerbit/edit'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function update()
    {
        $id_penerbit = $this->input->post('id_penerbit');
        $data = [
            'nama_penerbit' => $this->input->post('nama_penerbit')
        ];
        $query = $this->penerbit_model->update($id_penerbit, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
        redirect('penerbit');
    }

    public function hapus($id)
    {
        $query = $this->penerbit_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('penerbit');
    }


    
}
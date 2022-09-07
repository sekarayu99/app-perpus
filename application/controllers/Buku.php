<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
    }

	public function index()
	{
        $this->security_model->getSecurity();
        $data = [
            'title' => 'Daftar Data Buku',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'buku'  => $this->buku_model->get_data_buku(),
            'isi'   => 'buku/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title'     => 'Tambah Data Buku',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'id_buku'   => $this->buku_model->id_buku(),
            'pengarang' => $this->db->get('pengarang')->result(),
            'penerbit'  => $this->db->get('penerbit')->result(),
            'isi'       => 'buku/tambah'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function simpan()
    {
        $data = [
            'id_buku'       => $this->input->post('id_buku'),
            'id_pengarang'  => $this->input->post('id_pengarang'),
            'id_penerbit'   => $this->input->post('id_penerbit'),
            'judul_buku'    => $this->input->post('judul_buku'),
            'tahun_terbit'  => $this->input->post('tahun_terbit'),
            'jumlah'        => $this->input->post('jumlah'),
        ];
        $query = $this->db->insert('buku', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
        redirect('buku');
    }

    public function edit($id)
    {
        $data = [
            'title'       => 'Edit Data Buku',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'pengarang'   => $this->db->get('pengarang')->result(),
            'penerbit'    => $this->db->get('penerbit')->result(),
            'buku'        => $this->buku_model->edit($id),
            'isi'         => 'buku/edit'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function update()
    {
        $id_buku = $this->input->post('id_buku');
        $data = [
            'id_buku'       => $this->input->post('id_buku'),
            'id_pengarang'  => $this->input->post('id_pengarang'),
            'id_penerbit'   => $this->input->post('id_penerbit'),
            'judul_buku'    => $this->input->post('judul_buku'),
            'tahun_terbit'  => $this->input->post('tahun_terbit'),
            'jumlah'        => $this->input->post('jumlah'),
        ];
        $query = $this->buku_model->update($id_buku, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
        redirect('buku');
    }

    public function hapus($id)
    {
        $query = $this->buku_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('buku');
    }


    
}
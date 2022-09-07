<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('anggota_model');
    }

	public function index()
	{
        $this->security_model->getSecurity();
        $data = [
            'title'     => 'Daftar Data Anggota',
            'login'     => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'anggota'   => $this->db->get('anggota')->result(),
            'isi'       => 'anggota/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function tambah_anggota()
    {
        $data = [
            'title'         => 'Tambah Data Anggota',
            'login'         => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'id_anggota'    => $this->anggota_model->id_anggota(),
            'isi'           => 'anggota/tambah'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function simpan()
    {
        $data = [
            'id_anggota'        => $this->input->post('id_anggota'),
            'nama_anggota'      => $this->input->post('nama_anggota'),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
            'alamat'            => $this->input->post('alamat'),
            'no_hp'             => $this->input->post('no_hp')
        ];
        $query = $this->db->insert('anggota', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
        redirect('anggota');
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'Edit Data Anggota',
            'login'     => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'anggota'   => $this->anggota_model->edit($id),
            'isi'       => 'anggota/edit'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function update()
    {
        $id_anggota = $this->input->post('id_anggota');
        $data = [
            'id_anggota'        => $this->input->post('id_anggota'),
            'nama_anggota'      => $this->input->post('nama_anggota'),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
            'alamat'            => $this->input->post('alamat'),
            'no_hp'             => $this->input->post('no_hp')
        ];
        $query = $this->anggota_model->update($id_anggota, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
        redirect('anggota');
    }

    public function hapus($id)
    {
        $query = $this->anggota_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('anggota');
    }

}
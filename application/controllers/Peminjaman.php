<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('peminjaman_model');
    }

	public function index()
	{
        $this->security_model->getSecurity();
        $data = [
            'title'         => 'Data Peminjaman Buku',
            'peminjaman'    => $this->peminjaman_model->getDataPeminjaman(),
            'login'         => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'isi'           => 'peminjaman/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function tambah()
	{
        $data = [
            'title'         => 'Tambah Peminjaman Buku',
            'login'         => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'id_pinjam'     => $this->peminjaman_model->id_pinjam(),
            'peminjam'      => $this->db->get('anggota')->result(),
            'buku'          => $this->db->get('buku')->result(),
            'isi'           => 'peminjaman/tambah'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function simpan()
    {
        $data = [
            'id_pinjam'         => $this->input->post('id_pinjam'),
            'id_anggota'        => $this->input->post('id_anggota'),
            'id_buku'           => $this->input->post('id_buku'),
            'tgl_pinjam'        => $this->input->post('tgl_pinjam'),
            'tgl_kembali'       => $this->input->post('tgl_kembali')
        ];
        $query = $this->db->insert('peminjaman', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
        redirect('peminjaman');
    }

    public function jumlah_buku()
    {
        $id     = $this->input->post('id');
        $data   = $this->peminjaman_model->jumlah_buku($id);
        echo json_encode($data);
    }

    public function kembalikan($id)
    {
        $data = $this->peminjaman_model->getDataById_pinjam($id);
        $kembalikan = [
            'id_anggota'    => $data['id_anggota'],
            'id_buku'       => $data['id_buku'],
            'tgl_pinjam'    => $data['tgl_pinjam'],
            'tgl_kembali'   => $data['tgl_kembali'],
            'tgl_selesai'   => date('Y-m-d')
        ];
        $query = $this->db->insert('pengembalian', $kembalikan);
        if ($query = true) {
            $delete = $this->peminjaman_model->deletePinjam($id);
            if($delete = true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Buku berhasil dikembalikan!</div>');
                redirect('peminjaman');
            }
        }
    }

    public function hapus($id)
    {
        $query = $this->peminjaman_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('peminjaman');
    }

}

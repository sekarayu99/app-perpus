<?php

class Peminjaman_model extends CI_Model {

    public function id_pinjam()
    {
        $this->db->select('RIGHT(peminjaman.id_pinjam,3) as kode', FALSE);
        $this->db->order_by('id_pinjam', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('peminjaman');
        if ($query->num_rows()<>0) {
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi = "PM".$kodemax;
        return $kodejadi;
    }

    public function jumlah_buku($id)
    {
        $this->db->select('jumlah');
        $this->db->from('buku');
        $this->db->where('id_buku', $id);
        return $this->db->get()->row_array();
    }

    public function getDataPeminjaman()
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        return $this->db->get()->result();
    }

    public function getDataById_pinjam($id)
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        $this->db->where('peminjaman.id_pinjam', $id);
        return $this->db->get()->row_array();
    }

    public function deletePinjam($id)
    {
        $this->db->where('id_pinjam', $id);
        $this->db->delete('peminjaman');
    }

    // public function get_data_buku()
    // {
    //     $this->db->select('*');
    //     $this->db->from('buku');
    //     $this->db->join('pengarang', 'buku.id_pengarang = pengarang.id_pengarang');
    //     $this->db->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit');
    //     return $this->db->get();
    // }

    // public function edit($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('buku');
    //     $this->db->join('pengarang', 'buku.id_pengarang = pengarang.id_pengarang');
    //     $this->db->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit');
    //     $this->db->where('buku.id_buku', $id);
    //     return $this->db->get()->row_array();
    // }

    // public function update($id_buku, $data)
    // {
    //     $this->db->where('id_buku', $id_buku);
    //     $this->db->update('buku', $data);
        
    // }
}

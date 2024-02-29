<?php

class Crud_model extends CI_Model
{

	public function ambil_semua_data($table)
	{
		return $this->db->get($table)->result_array();
	}

	public function ambil_data_berdasarkan_id($table, $where, $field)
	{
		return $this->db->get_where($table, [$where => $field])->row_array();
	}

	public function insert_data_anggota($table)
	{
		$data = [
			'kd_anggota' => rand(111111, 999999),
			'nm_anggota' => htmlspecialchars($this->input->post('nama_anggota') ?? ''),
			'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin') ?? ''),
			'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir') ?? ''),
			'tgl_lahir' => htmlspecialchars($this->input->post('tanggal_lahir') ?? ''),
			'alamat' => htmlspecialchars($this->input->post('alamat') ?? ''),
			'no_hp' => htmlspecialchars($this->input->post('no_hp') ?? ''),
			'jns_id' => htmlspecialchars($this->input->post('jenis_id') ?? ''),
			'no_id' => rand(111111, 999999),
			'jenis_anggota' => htmlspecialchars($this->input->post('jenis_anggota') ?? ''),
			'status' => htmlspecialchars($this->input->post('status') ?? ''),
			'jml_pinjam' => htmlspecialchars($this->input->post('jumlah_pinjam') ?? ''),
		];

		return $this->db->insert($table, $data);
	}

	public function insert_data_kebijakan($table)
	{
		$data = [
			'max_wkt_pjm' => htmlspecialchars($this->input->post('maksimal_waktu_peminjaman') ?? ''),
			'max_jml_koleksi' => htmlspecialchars($this->input->post('maksimal_jumlah_koleksi') ?? ''),
			'denda' => htmlspecialchars($this->input->post('denda') ?? '')
		];

		return $this->db->insert($table, $data);
	}

	public function insert_koleksi($table)
	{
		$data = [
			'kd_koleksi' =>	rand(111111, 999999),
			'judul' => htmlspecialchars($this->input->post('judul') ?? ''),
			'jns_bhn_pustaka' => htmlspecialchars($this->input->post('jenis_bahan_pustaka') ?? ''),
			'jns_koleksi' => htmlspecialchars($this->input->post('jenis_koleksi') ?? ''),
			'jns_media' => htmlspecialchars($this->input->post('jenis_media') ?? ''),
			'pengarang' => htmlspecialchars($this->input->post('pengarang') ?? ''),
			'penerbit' => htmlspecialchars($this->input->post('penerbit') ?? ''),
			'tahun' => htmlspecialchars($this->input->post('tahun') ?? ''),
			'cetakan' => htmlspecialchars($this->input->post('cetakan') ?? ''),
			'edisi' => htmlspecialchars($this->input->post('edisi') ?? ''),
			'status' => htmlspecialchars($this->input->post('status') ?? ''),
		];

		return $this->db->insert($table, $data);
	}

	public function insert_pengguna($table)
	{
		$status = $this->input->post('status');

		// Cek jika data status kosong maka akan di isi tidak aktif
		if ($status == null) {
			$status = '2';
		}

		$data = [
			'id_pengguna' => rand(111111, 999999),
			'nm_pengguna' => htmlspecialchars($this->input->post('nama_pengguna') ?? ''),
			'password' => htmlspecialchars($this->input->post('password') ?? ''),
			'hak_akses' => htmlspecialchars($this->input->post('hak_akses') ?? ''),
			'status' => $status,
		];

		return $this->db->insert($table, $data);
	}

	public function insert_pinjaman_buku($table)
	{
		$data = [
			'no_transaksi_pinjam' =>	rand(111111, 999999),
			'kd_anggota' => htmlspecialchars($this->input->post('kode_anggota') ?? ''),
			'nm_anggota' => htmlspecialchars($this->input->post('nama_anggota') ?? ''),
			'tgl_pinjam' => htmlspecialchars($this->input->post('tanggal_pinjam') ?? ''),
			'tgl_bts_kembali' => htmlspecialchars($this->input->post('tanggal_batas_kembali') ?? ''),
			'kd_koleksi' => htmlspecialchars($this->input->post('kode_koleksi') ?? ''),
			'judul' => htmlspecialchars($this->input->post('judul') ?? ''),
			'jns_bhn_pustaka' => htmlspecialchars($this->input->post('jenis_bahan_pustaka') ?? ''),
			'jns_koleksi' => htmlspecialchars($this->input->post('jenis_koleksi') ?? ''),
			'jns_media' => htmlspecialchars($this->input->post('jenis_media') ?? ''),
			'id_pengguna' => htmlspecialchars($this->input->post('id_pengguna') ?? ''),
		];

		return $this->db->insert($table, $data);
	}

	public function insert_pengembalian_buku($table)
	{
		$data = [
			'no_transaksi_kembali' =>	rand(111111, 999999),
			'kd_anggota' => htmlspecialchars($this->input->post('kode_anggota') ?? ''),
			'nm_anggota' => htmlspecialchars($this->input->post('nama_anggota') ?? ''),
			'tgl_pinjam' => htmlspecialchars($this->input->post('tanggal_pinjam') ?? ''),
			'tgl_kembali' => htmlspecialchars($this->input->post('tanggal_kembali') ?? ''),
			'kd_koleksi' => htmlspecialchars($this->input->post('kode_koleksi') ?? ''),
			'judul' => htmlspecialchars($this->input->post('judul') ?? ''),
			'jns_bhn_pustaka' => htmlspecialchars($this->input->post('jenis_bahan_pustaka') ?? ''),
			'jns_koleksi' => htmlspecialchars($this->input->post('jenis_koleksi') ?? ''),
			'jns_media' => htmlspecialchars($this->input->post('jenis_media') ?? ''),
			'denda' => htmlspecialchars($this->input->post('denda') ?? ''),
			'ket' => htmlspecialchars($this->input->post('keterangan') ?? ''),
			'id_pengguna' => htmlspecialchars($this->input->post('id_pengguna') ?? ''),
		];

		return $this->db->insert($table, $data);
	}

	// Fungsi untuk update data pengguna
	public function update_data_pengguna($where, $field, $table)
	{
		$data = [
			'nm_pengguna' => htmlspecialchars($this->input->post('nama_pengguna') ?? ''),
			'password' => htmlspecialchars($this->input->post('password') ?? ''),
			'hak_akses' => htmlspecialchars($this->input->post('hak_akses') ?? ''),
			'status' => htmlspecialchars($this->input->post('status') ?? '')
		];

		$this->db->where($where, $field);
		return $this->db->update($table, $data);
	}

	public function update_pengguna_aktif($where, $field, $table)
	{
		$data = [
			'status' => htmlspecialchars($this->input->post('status') ?? '')
		];

		$this->db->where($where, $field);
		return $this->db->update($table, $data);
	}

	// Hapus data
	public function delete_data($table, $id)
	{
		$this->db->where($id);
		return $this->db->delete($table);
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

	public function index()
	{
		$data = [
			'nama_pengguna' => $this->session->userdata('nm_pengguna'),
			'hak_akses' => $this->session->userdata('hak_akses'),
			'status' => $this->session->userdata('status'),
			'ambil_data_pengguna' => $this->cm->ambil_semua_data('pengguna'),
		];

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('admin/data_akun', $data);
		$this->load->view('template/footer');
	}

	public function tambah_akun()
	{
		// Skrip tambah akun
		$tambah = $this->cm->insert_pengguna('pengguna');

		// Buat kondisi untuk pengecekan
		if ($tambah == true) {
			// Jika berhasil maka di arahkan ke halaman akun.
			redirect('admin/akun');
		} else {
			// Jika gagal akan di arahkan ke halaman akun.
			redirect('admin/akun');
		}
	}

	public function ubah_data_pengguna($id_pengguna)
	{
		$ubah_data = $this->cm->update_data_pengguna('id_pengguna', $id_pengguna, 'pengguna');

		// Buat kondisi untuk pengecekan
		if ($ubah_data == true) {
			// Jika berhasil maka di arahkan ke halaman akun.
			redirect('admin/akun');
		} else {
			// Jika gagal akan di arahkan ke halaman akun.
			redirect('admin/akun');
		}
	}

	public function ubah_pengguna_aktif($id_pengguna)
	{
		$ubah_data = $this->cm->update_pengguna_aktif('id_pengguna', $id_pengguna, 'pengguna');

		// Buat kondisi untuk pengecekan
		if ($ubah_data == true) {
			// Jika berhasil maka di arahkan ke halaman akun.
			redirect('admin/akun');
		} else {
			// Jika gagal akan di arahkan ke halaman akun.
			redirect('admin/akun');
		}
	}
}

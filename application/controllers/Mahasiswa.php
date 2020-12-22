<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

  public function __construct(){
    parent::__construct();
    check_not_login();
    check_admin();
    $this->load->model('mahasiswa_model');
    $this->load->library('form_validation');
  }

  public function index(){
    $data["mahasiswa"] = $this->mahasiswa_model->getAll();
    $this->load->view('admin/mahasiswa', $data);
  }

  public function add(){
    $this->form_validation->set_rules('nim', 'NIM', 'required|numeric|is_unique[mahasiswa.nim]');
    $this->form_validation->set_rules('nama_mhs', 'Nama', 'required');
    $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('prodi', 'Program Studi', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[10]|max_length[40]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
    $this->form_validation->set_rules('password_conf', 'Konfirmasi Password', 'required|matches[password]');

    $this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');
    $this->form_validation->set_message('valid_email', '%s Yang anda masukkan tidak valid');
    $this->form_validation->set_message('is_unique', '%s Yang anda masukkan sudah dipakai');
    $this->form_validation->set_message('numeric', '%s Yang anda masukkan Tidak Valid');
    $this->form_validation->set_message('matches', '%s yang Anda Masukkan tidak sama');
    $this->form_validation->set_message('min_length', '%s Minimal 5 karakter');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/mahasiswa/tambah');
    }
    else {
      $this->mahasiswa_model->save();
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        redirect('mahasiswa');
      }
    }
  }

  public function edit($id = null){
    if(!isset($id)) redirect('mahasiswa');

    $mahasiswa = $this->mahasiswa_model;

    // if (!$data['mahasiswa']) show_404();

    $this->form_validation->set_rules('nama_mhs', 'Nama', 'required');
    $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('prodi', 'Program Studi', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[10]|max_length[40]');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    $this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');
    $this->form_validation->set_message('valid_email', '%s Yang anda masukkan tidak valid');

    if ($this->form_validation->run() == FALSE) {
      $data['mahasiswa'] = $mahasiswa->getById($id);
      if ($data['mahasiswa']) {
        $this->load->view('admin/mahasiswa/edit', $data);
      }
      else {
        show_404();
      }
    }
    else {
      $this->mahasiswa_model->update();
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('mahasiswa');
      }
      else {
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('mahasiswa');
      }
    }
  }

  public function detail($id = null){
    if(!isset($id)) redirect('mahasiswa');

    $mahasiswa = $this->mahasiswa_model;
    $data['mahasiswa'] = $mahasiswa->getById($id);
    if (!$data['mahasiswa']) show_404();

    $this->load->view('admin/mahasiswa/detail', $data);
  }

  public function delete($id = null){
    if(!isset($id)) show_404();
    if($this->mahasiswa_model->delete($id)){
      $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
      redirect('mahasiswa');
    }
  }

}

?>

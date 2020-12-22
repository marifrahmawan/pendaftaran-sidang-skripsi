<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Dosen extends CI_Controller{

  function __construct(){
    parent::__construct();
    check_not_login();
    check_admin();
    $this->load->model('dosen_model');
    $this->load->library('form_validation');
  }

  public function index(){

    $dosen = $this->dosen_model;
    $data['dosen'] = $dosen->getAll();
    $this->load->view('admin/dosen', $data);
  }

  public function add(){
    $this->form_validation->set_rules('niy', 'NIY', 'required|numeric|is_unique[dosen.niy]');
    $this->form_validation->set_rules('nidn', 'NIDN', 'required|numeric|is_unique[dosen.nidn]');
    $this->form_validation->set_rules('nama_dsn', 'Nama Dosen', 'required');
    $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('jbtn_fungsional', 'Jabatan Fungsional', 'required');
    $this->form_validation->set_rules('bidang_ahli', 'Bidang Keahlian', 'required');
    $this->form_validation->set_rules('email', 'E-Mail', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
    $this->form_validation->set_rules('password_conf', 'Konfirmasi Password', 'required|matches[password]');

    $this->form_validation->set_message('required', '%s Masih kosong, silahkan isi terlebih dahulu');
    $this->form_validation->set_message('valid_email', '%s yang anda masukkan tidak valid');
    $this->form_validation->set_message('is_unique', '%s yang anda masukkan sudah dipakai');
    $this->form_validation->set_message('numeric', '%s yang anda masukkan tidak valid');
    $this->form_validation->set_message('matches', '%s yang Anda Masukkan tidak sama');
    $this->form_validation->set_message('min_length', '%s Minimal 5 karakter');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/dosen/tambah');
    }
    else {
      $this->dosen_model->save();
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        redirect('dosen');
      }
    }
  }

  public function edit($id = null){
    if(!isset($id)) redirect('dosen');

    $dosen = $this->dosen_model;

    $this->form_validation->set_rules('nama_dsn', 'Nama Dosen', 'required');
    $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('jbtn_fungsional', 'Jabatan Fungsional', 'required');
    $this->form_validation->set_rules('bidang_ahli', 'Bidang Keahlian', 'required');
    $this->form_validation->set_rules('email', 'E-Mail', 'required|valid_email');

    $this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');
    $this->form_validation->set_message('valid_email', '%s Yang anda masukkan tidak valid');

    if ($this->form_validation->run() == FALSE) {
      $data['dosen'] = $dosen->getById($id);
      if($data['dosen']){
          $this->load->view('admin/dosen/edit', $data);
      }
      else {
        show_404();
      }
    }
    else {
      $this->dosen_model->update();
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('dosen');
      }
      else {
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('dosen');
      }
    }
  }

  public function detail($id = null){
    if(!isset($id)) redirect('dosen');

    $dosen = $this->dosen_model;
    $data['dosen'] = $dosen->getById($id);
    if (!$data['dosen']) {
      show_404();
    }

    $this->load->view('admin/dosen/detail', $data);
  }

  public function delete($id = null){
    if(!isset($id)) show_404();
    if($this->dosen_model->delete($id)){
      $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
      redirect('dosen');
    }
  }

}

?>

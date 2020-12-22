<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Users extends CI_Controller{

  function __construct(){
    parent::__construct();
    check_not_login();
    check_admin();
    $this->load->model('users_model');
    $this->load->library('form_validation');
  }

  public function index(){
    $data['user'] = $this->users_model->getAll();
    $this->load->view('admin/users', $data);
  }

  public function detail($id = null){
    if (!isset($id)) redirect('users');

    $data['user'] = $this->users_model->getById($id);

    if (!$data['user']) {
      show_404();
    }

    $this->load->view('admin/users/detail', $data);
  }

  public function edit($id = null){
    if (!isset($id)) redirect('users');

    $this->form_validation->set_rules('id_user', 'ID User', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
    $this->form_validation->set_rules('password_conf', 'Konfirmasi Password', 'required|min_length[5]|matches[password]');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    $this->form_validation->set_message('required', '%s Masih Kosong, silahkan isi terlebih dahulu');
    $this->form_validation->set_message('matches', '%s yang Anda Masukkan tidak sama');
    $this->form_validation->set_message('min_length', '%s Minimal 5 karakter');

    if ($this->form_validation->run() == FALSE) {
      $data['user'] = $this->users_model->getById($id);
      if ($data['user']) {
        $this->load->view('admin/users/edit', $data);
      }
      else {
        show_404();
      }
    }
    else {
      $this->users_model->update($id);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('users');
      }
      else {
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('users');
      }
    }
  }

  public function delete($id){
    if (!isset($id)) show_404();
    if($this->users_model->delete($id)){
      $this->session->set_flashdata('success','Data Berhasil Dihapus');
      redirect('users');
    }
  }
}

?>

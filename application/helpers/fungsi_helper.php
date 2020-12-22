<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  function check_already_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session) {
      redirect('admin/dashboard');
    }
  }

  function check_not_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_user');
    if (!$user_session) {
      redirect('auth');
    }
  }

  function check_admin(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('level');
    if ($user_session != 1) {
      redirect('dashboard');
    }
  }

  function check_mhs(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('level');
    if ($user_session != 3) {
      redirect('dashboard');
    }
  }

?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Dosen_model extends CI_Model{

  public function getAll(){
    return $this->db->get('dosen')->result();
  }

  public function getById($id){
    $query = $this->db->get_where('dosen', ['niy' => $id])->row();
    return $query;
  }

  public function save(){
    $post = $this->input->post(null, TRUE);

    $params_user['id_user'] = $post['niy'];
    $params_user['username'] = $post['niy'];
    $params_user['password'] = sha1($post['password']);
    $params_user['nama'] = $post['nama_dsn'];
    $params_user['alamat'] = $post['alamat'];
    $params_user['level'] = $post['level'];

    if ($this->db->insert('user', $params_user)) {
      $params['niy'] = $post['niy'];
      $params['id_user'] = $post['niy'];
      $params['nidn'] = $post['nidn'];
      $params['nama_dsn'] = $post['nama_dsn'];
      $params['gender'] = $post['gender'];
      $params['jbtn_fungsional'] = $post['jbtn_fungsional'];
      $params['bidang_ahli'] = $post['bidang_ahli'];
      $params['email'] = $post['email'];
      $params['website'] = $post['website'];
      $params['alamat'] = $post['alamat'];

      $this->db->insert('dosen', $params);
    }
  }

  public function update(){
    $post = $this->input->post(null, TRUE);
    $params['niy'] = $post['id'];
    $params['nidn'] = $post['nidn'];
    $params['nama_dsn'] = $post['nama_dsn'];
    $params['gender'] = $post['gender'];
    $params['jbtn_fungsional'] = $post['jbtn_fungsional'];
    $params['bidang_ahli'] = $post['bidang_ahli'];
    $params['email'] = $post['email'];
    $params['website'] = $post['website'];
    $params['alamat'] = $post['alamat'];

    $this->db->update('dosen', $params, array('niy' => $post['id']));
  }

  public function delete($id){
    return $this->db->delete('dosen', array('niy' => $id));
  }
}

?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Mahasiswa_model extends CI_Model{

  public function getAll(){
    $query = $this->db->get('mahasiswa');
    return $query->result();
  }

  public function getById($id){
    $query = $this->db->get_where('mahasiswa', ['nim' => $id])->row();
    return $query;
  }

  public function save(){
    $post = $this->input->post(null, TRUE);

    $params_user['id_user'] = $post['nim'];
    $params_user['username'] = $post['nim'];
    $params_user['password'] = sha1($post['password']);
    $params_user['nama'] = $post['nama_mhs'];
    $params_user['alamat'] = $post['alamat'];
    $params_user['level'] = $post['level'];

    if ($this->db->insert('user', $params_user)) {
      $params['nim'] = $post['nim'];
      $params['id_user'] = $post['nim'];
      $params['nama_mhs'] = $post['nama_mhs'];
      $params['gender'] = $post['gender'];
      $params['prodi'] = $post['prodi'];
      $params['email'] = $post['email'];
      $params['alamat'] = $post['alamat'];

      $this->db->insert('mahasiswa', $params);
    }
  }

  public function update(){
    $post = $this->input->post(null, TRUE);
    $params['nim'] = $post['id'];
    $params['nama_mhs'] = $post['nama_mhs'];
    $params['gender'] = $post['gender'];
    $params['prodi'] = $post['prodi'];
    $params['email'] = $post['email'];
    $params['alamat'] = $post['alamat'];

    $this->db->update('mahasiswa', $params, array('nim' => $post['id']));
  }

  public function delete($id){
    return $this->db->delete('mahasiswa', array('nim' => $id));
  }
}
?>

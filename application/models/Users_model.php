<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Users_model extends CI_Model{

  public function getAll(){
    return $this->db->get('user')->result();
  }

  public function getById($id){
    return $this->db->get_where('user',['username' => $id])->row();
  }

  public function update($id = null){
    $post = $this->input->post(null, TRUE);
    $params_user['id'] = $post['id'];
    $params_user['id_user'] = $post['id_user'];
    $params_user['username'] = $post['username'];
    $params_user['password'] = sha1($post['password']);
    $params_user['nama'] = $post['nama'];
    $params_user['alamat'] = $post['alamat'];
    $params_user['level'] = $post['level'];

    $this->db->update('user', $params_user, array('id' => $post['id']));
  }

  public function delete($id){
    return $this->db->delete('user', array('id' => $id));
  }
}

?>

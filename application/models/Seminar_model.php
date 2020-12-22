<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar_model extends CI_Model{
    private $_table = "seminar";

    public $nim;
    public $nama_mhs;
    public $judul_skripsi;
    public $docseminar = "default.jpg";
    public $status;

    public function rules(){
        return [
            ['field' => 'nim',
            'label' => 'NIM',
            'rules' => 'required'],

            ['field' => 'nama_mhs',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'judul_skripsi',
            'label' => 'Judul Skripsi',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["nim" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->nim = $post["nim"];
        $this->nama_mhs = $post["nama_mhs"];
		    $this->judul_skripsi = $post["judul_skripsi"];
		    $this->docseminar = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id = $post["id"];

				$this->nim = $post["nim"];
        $this->nama_mhs = $post["nama_mhs"];
		    $this->judul_skripsi = $post["judul_skripsi"];

				if (!empty($_FILES["docseminar"]["name"])) {
					$this->docseminar = $this->_uploadImage();
		    }
				else {
            $this->docseminar = $post["old_file"];
				}

				if (!empty($_POST['pembimbing'])) {
					$this->pembimbing = $post['pembimbing'];
				}
				else {
					$this->pembimbing = $post['old_pembimbing'];
				}

				if (!empty($_POST['penguji_1'])) {
					$this->penguji_1 = $post['penguji_1'];
				}
				else {
					$this->penguji_1 = $post['old_penguji_1'];
				}

				if (!empty($_POST['penguji_2'])) {
					$this->penguji_2 = $post['penguji_2'];
				}
				else {
					$this->penguji_2 = $post['old_penguji_2'];
				}

				$this->tgl_seminar = $post['tgl_seminar'];
        $this->status = $post['status'];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id){
			$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("nim" => $id));
		}

	private function _uploadImage(){
		$config['upload_path']          = './upload/proposal/';
		$config['allowed_types']        = 'pdf';
		$config['file_name']            = $this->nim;
		$config['overwrite']			= true;
		$config['max_size']             = 5120; // 5MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('docseminar')) {
			return $this->upload->data("file_name");
		}

		return "default.jpg";
	}

	private function _deleteImage($id){
		$seminar = $this->getById($id);
		if ($seminar->docseminar != "default.jpg") {
			$filename = explode(".", $seminar->docseminar)[0];
			return array_map('unlink', glob(FCPATH."upload/proposal/$filename.*"));
		}
	}

}

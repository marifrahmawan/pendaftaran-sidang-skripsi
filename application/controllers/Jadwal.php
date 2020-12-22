<?php 
/**
 * 
 */
class Jadwal extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('jadwal_model');
	}

	public function index(){
		$data['jadwal'] = $this->jadwal_model->getAll();
		$this->load->view('admin/jadwal', $data);
	}
}
?>
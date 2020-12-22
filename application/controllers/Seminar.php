<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar extends CI_Controller{
    public function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model("seminar_model");
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view("admin/seminar");
    }

		public function detail($id = null){
			$data["seminar"] = $this->seminar_model->getById($id);
			if (!$data["seminar"]) show_404();
			$this->load->view("admin/seminar/detail", $data);
		}

    public function add(){
        $seminar = $this->seminar_model;
        $validation = $this->form_validation;
        $validation->set_rules($seminar->rules());

        if ($validation->run()) {
            $seminar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('seminar');
        }
        else {
          $this->load->view("admin/seminar/tambah");
        }
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/seminar');

				$seminar = $this->seminar_model;
				$validation = $this->form_validation;
				$validation->set_rules($seminar->rules());

        if ($validation->run()) {
            $seminar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
						redirect('seminar');
        }

        $data["seminar"] = $seminar->getById($id);
        if (!$data["seminar"]) show_404();

        $this->load->view("admin/seminar/edit", $data);
    }

    public function delete($id=null){
        if (!isset($id)) show_404();

        if ($this->seminar_model->delete($id)) {
            redirect('seminar');
        }
    }
}

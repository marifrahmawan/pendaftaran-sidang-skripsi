<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendadaran extends CI_Controller{
    public function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model("pendadaran_model");
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view("admin/pendadaran");
    }

		public function detail($id = null){
			$data["seminar"] = $this->pendadaran_model->getById($id);
			if (!$data["seminar"]) show_404();
			$this->load->view("admin/pendadaran/detail", $data);
		}

    public function add(){
        $seminar = $this->pendadaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($seminar->rules());

        if ($validation->run()) {
            $seminar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('pendadaran');
        }
        else {
          $this->load->view("admin/pendadaran/tambah");
        }
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/pendadaran');

				$seminar = $this->pendadaran_model;
				$validation = $this->form_validation;
				$validation->set_rules($seminar->rules());

        if ($validation->run()) {
            $seminar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
						redirect('pendadaran');
        }

        $data["seminar"] = $seminar->getById($id);
        if (!$data["seminar"]) show_404();

        $this->load->view("admin/pendadaran/edit", $data);
    }

    public function delete($id=null){
        if (!isset($id)) show_404();

        if ($this->pendadaran_model->delete($id)) {
            redirect('skripsi');
        }
    }
}

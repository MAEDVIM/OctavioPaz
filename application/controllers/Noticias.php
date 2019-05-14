<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {
	
	public function index(){
		$this->load->model("Noticias_model");
        $data["cargarNoticia"] = $this->Noticias_model->cargarNoticia();
		$this->load->view('header');
		$this->load->view('NoticiasPrincipal',$data);
		$this->load->view('footer');
	}
	
	
}

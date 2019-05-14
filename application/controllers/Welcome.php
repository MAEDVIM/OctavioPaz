<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model("Welcome_model");
        $data["cargarNoticia"] = $this->Welcome_model->cargarNoticia();
		$this->load->view('header');
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
	
	public function guardarContacto(){
	    $param["tNombre"]			= $this->input->post("tNombreContacto");
	    $param["tCorreo"]			= $this->input->post("tCorreoContacto");
		$param["tTelefono"]			= $this->input->post("tTelefonoContacto");
		$param["tMensaje"]			= $this->input->post("tMensajeContacto");
		$this->load->model('Welcome_model');	
		$this->Welcome_model->guardarContacto($param);
		
		redirect(base_url());
	}
	
	public function cargarNoticias(){
		$this->load->model("Welcome_model");
        $data["cargarNoticia"] = $this->Welcome_model->cargarNoticiaPrincipal();
		$this->load->view('header');
		$this->load->view('NoticiasPrincipal',$data);
		$this->load->view('footer');
	}
	
	public function licenciaturaDerecho(){
		$this->load->model("Welcome_model");
		$this->load->view('header');
		$this->load->view('Academica/LicenciaturaDerecho');
		$this->load->view('footer');
	}
	
	
}

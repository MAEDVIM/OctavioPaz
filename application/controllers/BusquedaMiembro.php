<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusquedaMiembro extends CI_Controller {
	
	function __construct(){
     parent::__construct();
     }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('busqueda');
		$this->load->view('footer');
	}
	
	public function InformacionOperador(){
		
		$busqueda = $this->input->post("busquedaMiembro");
		
		$this->load->model("Busqueda_Model");
        $data["InformacionOperador"] = $this->Busqueda_Model->InformacionOperador($busqueda);
		$this->load->view('header');
		$this->load->view('InformacionMiembro', $data);
		$this->load->view('footer');
	}
	
}
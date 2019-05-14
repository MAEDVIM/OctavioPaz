<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
     parent::__construct();
       $this->load->helper('form'); 
       $this->load->library('form_validation'); 
       $this->load->library('session'); 
       $this->load->model('Login_model');
     }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	function ingresar(){
		$tUsuario		= $this->input->post("tUsuario");
		$tContrasena	= md5($this->input->post("tContrasena"));
		$resp			= $this->Login_model->Login($tUsuario, $tContrasena);
		if($resp){
			$data = [
				"eCodUsuario"		=> $resp->eCodUsuario,
				"tUsuario"			=> $resp->tUsuario,
				"tCorreo"			=> $resp->tCorreo,
				"tNombre"			=> $resp->tNombre,
				"tApellidoPaterno"	=> $resp->tApellidoPaterno,
				"tApellidoMaterno"	=> $resp->tApellidoMaterno,
				"bAdministrador"	=> $resp->bAdministrador,
				"Login" 			=> TRUE
			];

			$this->session->set_userdata($data);
			redirect(base_url("Admin_Panel"));
			
		}
		else{
		    $data["error"] = "Usuario o Contraseña Incorrectos";
		    $this->load->view('header');
            $this->load->view('login', $data);
            $this->load->view('footer');
		}
	}

	function cerrar(){
		$data["error"] = "Sesión Cerrada";
		$this->session->sess_destroy();
		$this->load->view('header');
        $this->load->view('login', $data);
        $this->load->view('footer');
	}
	
}

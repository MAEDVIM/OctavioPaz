<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Panel extends CI_Controller {
	
	public function __construct()
        {
                parent::__construct();
                $this->load->library('upload');
                $this->load->library('session');
                $this->load->helper('url');
                $this->load->model('Admin_model');
		if (!$this->session->userdata("Login")){
			redirect(base_url("Login"));
		}
		
        }

	public function index()
	{	
		$this->load->model("Admin_model");
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/index');
		$this->load->view('Admin_Panel/footer');
	}
	
	public function Noticias(){
		
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/Noticias');
		$this->load->view('Admin_Panel/footer');
	}
	
	public function ConsultarAlumno(){
		$this->load->model("Admin_model");
        $data["cargarOperadores"] = $this->Admin_model->cargarOperadores();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/ConsultarOperador', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function ConsultarCredenciales(){
		$this->load->model("Admin_model");
        $data["cargarCredencial"] = $this->Admin_model->cargarCredenciales();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/ConsultarCredenciales', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function ConsultarNoticia(){
		$this->load->model("Admin_model");
        $data["cargarNoticias"] = $this->Admin_model->cargarNoticias();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/ConsultarNoticias', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function ConsultarEmpresa(){
		$this->load->model("Admin_model");
        $data["cargarEmpresas"] = $this->Admin_model->cargarEmpresas();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/ConsultarEmpresa', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function ConsultarUsuario(){
		$this->load->model("Admin_model");
        $data["cargarUsuarios"] = $this->Admin_model->cargarUsuarios();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/ConsultarUsuario', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function CrearNoticia(){
		
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/NuevaNoticia');
		$this->load->view('Admin_Panel/footer');
	}
	
	public function RegistrarUsuario(){
		$states = $this->db->get("CatEstados")->result();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/RegistrarUsuario', array_merge( array('states' => $states )));
		$this->load->view('Admin_Panel/footer');
	}
	
	public function RegistrarAlumnos(){
		//$states = $this->db->get("CatEstados")->result();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/RegistrarAlumno');
		$this->load->view('Admin_Panel/footer');
	}
	
	public function RegistrarEmpresa(){
		$states = $this->db->get("CatEstados")->result();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/RegistrarEmpresa', array_merge( array('states' => $states )));
		$this->load->view('Admin_Panel/footer');
	}
	
	public function cargarMunicipios($id){
		$this->db->select('cm.eCodMunicipio, cm.tNombre');
        $this->db->from('CatMunicipios cm');
        $this->db->join('RelEstadosMunicipios re','re.eCodMunicipio = cm.eCodMunicipio','inner');
        $this->db->where('eCodEstado',$id);
        $this->db->order_by('cm.tNombre', 'ASC');
        $result = $this->db->get()->result();
    	echo json_encode($result);
	}
	
	public function GetEmpresa(){
        $busqueda=$this->input->post('busqueda');
        $data=$this->datacomplete->GetRow($busqueda);        
        echo json_encode($data);
    }
	
	public function BajaOperador(){
		$this->load->model("Admin_model");
		$eCodOperador = $this->input->post("eCodOperadorBaja");
		$this->Admin_model->BajaOperador($eCodOperador);
		
		redirect(base_url()."Admin_Panel/consultarOperador");
	}
	
	public function EliminarOperador(){
		$this->load->model("Admin_model");
		$eCodOperador = $this->input->post("eCodRegistro");
		$this->Admin_model->EliminarOperador($eCodOperador);
		
		redirect(base_url()."Admin_Panel/consultarOperador");
	}
	
	public function EliminarUsuario(){
		$this->load->model("Admin_model");
		$eCodUsuario = $this->input->post("eCodUsuario");
		$this->Admin_model->EliminarUsuario($eCodUsuario);
		
		redirect(base_url()."Admin_Panel/ConsultarUsuario");
	}
	
	public function EliminarNoticia(){
		$this->load->model("Admin_model");
		$eCodNoticia = $this->input->post("eCodNoticia");
		$this->Admin_model->EliminarNoticia($eCodNoticia);
		
		redirect(base_url()."Admin_Panel/ConsultarNoticia");
	}
	
	public function MarcarMensajeLeido(){
		$this->load->model("Admin_model");
		$eCodMensaje = $this->input->post("eCodMensaje");
		$this->Admin_model->MarcarLeido($eCodMensaje);
		
		redirect(base_url()."Admin_Panel/ConsultarMensajesLeidos");
	}
	
	public function EliminarMensaje(){
		$this->load->model("Admin_model");
		$eCodMensaje = $this->input->post("eCodMensaje");
		$this->Admin_model->EliminarMensaje($eCodMensaje);
		
		redirect(base_url()."Admin_Panel/ConsultarMensajesLeidos");
	}
	
	public function guardarNoticia(){
		$path = $_FILES['userfile']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$new_name = time().".".$ext;
		$mi_imagen = "userfile";
		
	        $config['upload_path'] = './uploads/';
	        $config['allowed_types'] = "gif|jpg|jpeg|png";
	        $config['file_name'] = $new_name;
	        $config['max_size'] = "50000";
	        $config['max_width'] = "2000";
	        $config['max_height'] = "2000";
	        $config['overwrite'] = FALSE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
        if (!$this->upload->do_upload($mi_imagen)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data['uploadSuccess'] = $this->upload->data();
        
	    $param["tNombre"] 		= $this->input->post("tNombre");
		$param["tDescripcion"] 	= $this->input->post("tDescripcion");
		$param["fhFecha"] 		= $this->input->post("fhFecha");
		$param["userfile"] 		= $new_name;
		$param["tEnlace"] 		= $this->input->post("tEnlace");
			
		$this->Admin_model->guardarNoticia($param);
			
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/index');
		$this->load->view('Admin_Panel/footer');
	}
	
	public function guardarUsuario(){
	    $param["tNombre"]			= $this->input->post("tNombre");
		$param["tApellidoPaterno"]	= $this->input->post("tApellidoPaterno");
		$param["tApellidoMaterno"]	= $this->input->post("tApellidoMaterno");
		$param["tTelefono"]			= $this->input->post("tTelefono");
		$param["fhFechaNacimiento"]	= $this->input->post("fhFechaNacimiento");
		$param["eCodSexo"]			= $this->input->post("eCodSexo");
		$param["eCodEstado"]		= $this->input->post("eCodEstado");
		$param["eCodMunicipio"]		= $this->input->post("eCodMunicipio");
		$param["tCiudad"]			= $this->input->post("tCiudad");
		$param["tDomicilio"]		= $this->input->post("tDomicilio");
		$param["tCodigoPostal"]		= $this->input->post("tCodigoPostal");
		$param["tUsuario"]			= $this->input->post("tUsuario");
		$param["tCorreo"]			= $this->input->post("tCorreo");
		$param["tContrasena"]		= $this->input->post("tContrasena");
			
		$this->Admin_model->guardarUsuario($param);

		redirect(base_url()."Admin_Panel/ConsultarUsuario");
	}
	
	public function guardarOperador(){
		$param["tEmpresa"] 				= $this->input->post("tEmpresa");
		$param["tNombre"]				= $this->input->post("tNombre");
		$param["tApellidoPaterno"]		= $this->input->post("tApellidoPaterno");
		$param["tApellidoMaterno"]		= $this->input->post("tApellidoMaterno");
		$param["tCorreo"]				= $this->input->post("tCorreo");
		$param["tTelefono"] 			= $this->input->post("tTelefono");
		$param["tCurp"] 				= $this->input->post("tCurp");
	    $param["eCodGrupoSanguineo"]	= $this->input->post("eCodGrupoSanguineo");
		$param["tTelefonoEmergencia"]	= $this->input->post("tTelefonoEmergencia");
		$param["tNumeroSeguro"]			= $this->input->post("tNumeroSeguro");
		$param["fhFechaNacimiento"] 	= $this->input->post("fhFechaNacimiento");
		$param["tCargo"]				= $this->input->post("tCargo");
		$param["eCodSexo"]				= $this->input->post("eCodSexo");
		$param["eCodEstado"]			= $this->input->post("eCodEstado");
		$param["eCodMunicipio"] 		= $this->input->post("eCodMunicipio");
		$param["tCiudad"]				= $this->input->post("tCiudad");
		$param["tDomicilio"]			= $this->input->post("tDomicilio");
		$param["tCodigoPostal"] 		= $this->input->post("tCodigoPostal");
		$param["tTipoLicencia"] 		= $this->input->post("tTipoLicencia");
		$param["tNumeroLicencia"] 		= $this->input->post("tNumeroLicencia");
		$param["fhFechaVencimiento"] 	= $this->input->post("fhFechaVencimiento");
		$param["tCodSindicalizado"] 	= "SUT-".substr($param["tCurp"],4,-8)."-".sprintf("%04d", rand(1,9999));
			
		$this->Admin_model->guardarOperador($param);
		redirect(base_url()."Admin_Panel/ConsultarOperador");
	}
	
		public function GenerarCredencial(){
	    $param["eCodOperador"]		= $this->input->post("eCodRegistroCredencial");
		$id 						= $this->input->post("eCodRegistroCredencial");
		$this->Admin_model->GenerarCredencial($param);
		$this->Admin_model->CambiarEstatusOperador($id);
		
		redirect(base_url()."Admin_Panel/ConsultarCredenciales");
	}
	
	public function guardarEmpresa(){
	    $param["tNombre"]			= $this->input->post("tNombre");
	    $param["tSiglas"]			= $this->input->post("tSiglas");
		$param["tTelefono"]			= $this->input->post("tTelefono");
		$param["eCodEstado"]		= $this->input->post("eCodEstado");
		$param["eCodMunicipio"]		= $this->input->post("eCodMunicipio");
		$param["tDomicilio"]		= $this->input->post("tDomicilio");
		$param["tCodigoPostal"]		= $this->input->post("tCodigoPostal");
			
		$this->Admin_model->guardarEmpresa($param);
		
		redirect(base_url()."Admin_Panel/ConsultarUsuario");
	}
	
	public function BuscarEmpresa(){
		
		$busqueda['eCodEmpresa'] 	= $this->input->post("eCodEmpresa");
		$busqueda['tNombre'] 	 	= $this->input->post("tNombre");
		$busqueda['tEstado'] 		= $this->input->post("tEstado");
		$busqueda['tMunicipio'] 	= $this->input->post("tMunicipio");
		$busqueda['tSiglas'] 		= $this->input->post("tSiglas");
		
		$this->load->model("Admin_model");
        $data["buscarEmpresas"] = $this->Admin_model->BuscarEmpresa($busqueda);
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/BusquedaEmpresa', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function BuscarOperador(){
		
		$busqueda['tCodSindicalizado'] 	= $this->input->post("tCodSindicalizado");
		$busqueda['tNombre'] 	 		= $this->input->post("tNombre");
		$busqueda['tEstado'] 			= $this->input->post("tEstado");
		$busqueda['tMunicipio'] 		= $this->input->post("tMunicipio");
		$busqueda['tApellido'] 			= $this->input->post("tApellido");
		$busqueda['tTelefono'] 			= $this->input->post("tTelefono");
		$busqueda['tCorreo'] 			= $this->input->post("tCorreo");
		
		$this->load->model("Admin_model");
        $data["buscarOperador"] = $this->Admin_model->BuscarOperador($busqueda);
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/BusquedaOperador', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function BuscarUsuario(){
		
		$busqueda['eCodUsuario'] 	= $this->input->post("eCodUsuario");
		$busqueda['tNombre'] 	 	= $this->input->post("tNombre");
		$busqueda['tEstado'] 		= $this->input->post("tEstado");
		$busqueda['tMunicipio'] 	= $this->input->post("tMunicipio");
		$busqueda['tApellido'] 		= $this->input->post("tApellido");
		$busqueda['tTelefono'] 		= $this->input->post("tTelefono");
		$busqueda['tCorreo'] 		= $this->input->post("tCorreo");
		
		$this->load->model("Admin_model");
        $data["buscarUsuario"] = $this->Admin_model->BuscarUsuario($busqueda);
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/BusquedaUsuario', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function InformacionOperador(){
		
		$busqueda 	= $this->input->post("editarOperador");
		
		$this->load->model("Admin_model");
        $data["EditarOperador"] = $this->Admin_model->InformacionOperador($busqueda);
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/EditarOperador', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function EditarOperador(){
		
		$param["tEmpresa"] 				= $this->input->post("tEmpresa");
		$param["tNombre"]				= $this->input->post("tNombre");
		$param["tApellidoPaterno"]		= $this->input->post("tApellidoPaterno");
		$param["tApellidoMaterno"]		= $this->input->post("tApellidoMaterno");
		$param["tCorreo"]				= $this->input->post("tCorreo");
		$param["tTelefono"] 			= $this->input->post("tTelefono");
		$param["tCurp"] 				= $this->input->post("tCurp");
	    $param["eCodGrupoSanguineo"]	= $this->input->post("eCodGrupoSanguineo");
		$param["tTelefonoEmergencia"]	= $this->input->post("tTelefonoEmergencia");
		$param["tNumeroSeguro"]			= $this->input->post("tNumeroSeguro");
		$param["fhFechaNacimiento"] 	= $this->input->post("fhFechaNacimiento");
		$param["tCargo"]				= $this->input->post("tCargo");
		$param["eCodSexo"]				= $this->input->post("eCodSexo");
		$param["eCodEstado"]			= $this->input->post("eCodEstado");
		$param["eCodMunicipio"] 		= $this->input->post("eCodMunicipio");
		$param["tCiudad"]				= $this->input->post("tCiudad");
		$param["tDomicilio"]			= $this->input->post("tDomicilio");
		$param["tCodigoPostal"] 		= $this->input->post("tCodigoPostal");
		$param["tTipoLicencia"] 		= $this->input->post("tTipoLicencia");
		$param["tNumeroLicencia"] 		= $this->input->post("tNumeroLicencia");
		$param["fhFechaVencimiento"] 	= $this->input->post("fhFechaVencimiento");
		
		$this->Admin_model->editarOperador($param);
		redirect(base_url()."Admin_Panel/ConsultarOperador");
	}
	
	public function ConsultarMensajes(){
		$this->load->model("Admin_model");
        $data["cargarContacto"] = $this->Admin_model->cargarMensajes();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/ConsultarMensajes', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	public function ConsultarMensajesLeidos(){
		$this->load->model("Admin_model");
        $data["cargarContacto"] = $this->Admin_model->cargarMensajesLeidos();
		$this->load->view('Admin_Panel/header');
		$this->load->view('Admin_Panel/ConsultarMensajesLeidos', $data);
		$this->load->view('Admin_Panel/footer');
	}
	
	
}

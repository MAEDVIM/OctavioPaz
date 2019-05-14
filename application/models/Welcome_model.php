<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome_model extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }
    
    public function cargarNoticia(){
        $query = $this->db->query("SELECT * FROM BitNoticias WHERE tCodEstatus = 'NU' ORDER BY eCodNoticia ASC LIMIT 4;");
        return $query;
    }
	
	public function guardarContacto($param){
		$fecha = date("Y/m/d H:i");
        $campos = array(
                "tNombre"	=> $param["tNombre"],
                "tCorreo"	=> $param["tCorreo"],
                "tTelefono"	=> $param["tTelefono"],
                "tMensaje"	=> $param["tMensaje"],
                "tEstatus"	=> 'NU',
                "fhFecha"	=> $fecha
             );
                
        return $this->db->insert("Contacto", $campos);
    }
	
	
}
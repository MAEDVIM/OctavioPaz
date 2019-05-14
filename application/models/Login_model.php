<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        function Login($tUsuario, $tContrasena){
		$this->db->where("tUsuario", $tUsuario);
		$this->db->where("tContrasena", $tContrasena);
		$resultados = $this->db->get("SisUsuarios");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Busqueda_model extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }
    
	public function InformacionOperador($busqueda){
			
			$select = "SELECT 
					bo.*,
					cs.tNombre AS Estatus,
					csa.tNombre AS GrupoSanguineo
					FROM BitOperadores bo
					LEFT JOIN CatEstatus cs ON cs.tCodEstatus = bo.tCodEstatus
					LEFT JOIN CatSanguineo csa ON csa.eCodSangre = bo.eCodGrupoSanguineo
					WHERE bo.tCodEstatus = 'AC' OR bo.tCodEstatus = 'NU' AND bo.tCodSindicalizado = '".$busqueda."';";
			
			$query = $this->db->query($select);
			return $query;
		}
	
}
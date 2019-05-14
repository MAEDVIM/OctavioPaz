<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Noticias_model extends CI_Model {

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }
    
    public function cargarNoticia(){
        $query = $this->db->query("SELECT * FROM BitNoticias WHERE tCodEstatus = 'NU' ORDER BY eCodNoticia DESC;");
        return $query;
    }
	
	
}
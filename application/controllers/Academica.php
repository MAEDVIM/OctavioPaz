<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academica extends CI_Controller {
	
	public function __construct(){
 		parent::__construct();
    }
	
	public function Derecho(){
		$this->load->view('header');
		$this->load->view('Academica/LicenciaturaDerecho');
		$this->load->view('footer');
	}
	
	
}

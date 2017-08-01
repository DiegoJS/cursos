<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actas extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index(){

		$vista_interna = array(
			'result'	=>	array(),
		);
		$vista_externa = array(			
			'title' => ucwords("Actas"),
			'contenido_main' => $this->load->view('backend/actas/actas_list', $vista_interna, true)
		);
		$this->load->view('template/backend', $vista_externa);

	}

	public function add(){

		$vista_interna = array(
			'result'	=>	array(),
		);
		$vista_externa = array(			
			'title' => ucwords("Actas"),
			'contenido_main' => $this->load->view('backend/actas/actas_add', $vista_interna, true)
		);
		$this->load->view('template/backend', $vista_externa);

	}

}

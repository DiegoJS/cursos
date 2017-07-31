<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index(){

		$vista_interna = array(
		);
		$vista_externa = array(			
			'title' => ucwords("Bienvenido"),
			'contenido_main' => $this->load->view('backend/dashboard/dashboard', $vista_interna, true)
		);
		$this->load->view('template/backend', $vista_externa);
	}

	public function login()
	{
		$this->load->view('template/login');
	}

	public function salir()
	{
		redirect(base_url('login'));
	}
}

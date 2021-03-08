<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Welcome_message');
	}

	public function mi_primera_funcion()
	{
		$this->load->view('inicio');
	}

	public function mis_servicios()
	{
		$this->load->view('servicios');
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

	public function vista_servicios()
	{
		
        $this->load->view('usuarios/ser');	
       
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function vista_inicio() 
	{
		
        $this->load->view('usuarios/mer');	
        
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utiles extends CI_Controller {

	public function vista_utiles() 
	{
		
        $this->load->view('usuarios/uti');	
        
    }
}

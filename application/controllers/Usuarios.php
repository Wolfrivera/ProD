<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function vista_usuarios()
	{
		$this->load->view('menu/view_header');
        $this->load->view('usuarios/lis');	
        $this->load->view('menu/view_footer');
    }
}

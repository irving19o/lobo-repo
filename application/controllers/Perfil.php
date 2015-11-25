<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	 
	public function index()
	{
		$url='Location: '.base_url().'login';
		$this->load->model('Modelo');
	
		$data['misDenuncias']=$this->Modelo->get_misDenuncias();
		$data['novedades']=$this->Modelo->get_novedades();
		
		if (isset($_SESSION['nombreDeUsuario'])) {
		$this->load->view('templates/header');
		$this->load->view('perfil', $data);# code...
		}
		else
		header($url);
	}

	public function logout()
	{
		$url='Location: '.base_url().'login';
		
		session_destroy();
		header($url);
	}


}

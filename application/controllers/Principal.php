<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

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
	 
	 
	public function __construct()
        {
                parent::__construct();
                $this->load->model('Modelo');
                $this->load->helper('url_helper');
        }
	 
	public function index($id=13)
	{
	
		$data['delito'] = $this->Modelo->get_delito($id);
		$data['comentario'] = $this->Modelo->get_comentarios($id);
		
		if (empty($data['delito'])) {
		show_404();
		}
		
		$this->load->view('templates/header');
		$this->load->view('principal', $data);
	
		
	}
		 
	public function muestra($id=null)
	{
		
		$data['delito'] = $this->Modelo->get_delito($id);
		$data['comentario'] = $this->Modelo->get_comentarios($id);
		
		if (empty($data['delito'])) {
		show_404();
		}
		
		$this->load->view('templates/header');
		$this->load->view('principal', $data);
		
	
		
	}
	public function crearDelito()
	{
	
		$url='Location: '.base_url().'login';
		$this->load->view('templates/header');
			if (isset($_SESSION['nombreDeUsuario']))
		{
			$this->load->view('crearDelito');	
		}
		else
		
		header($url);
	
	
	
	}
	
	public function add()
	{
		
	
		$valida=$this->Modelo->insertaDelito();
		if ($valida==1)
		{
			echo "Se agrego tu delito ";
			header("Location: " . base_url()."perfil");
		}
		else
		{
			echo "hubo un error al agregar el delito ";
		}
		
		
	}
	
	public function nuevo_comentario()
	{
		$valida=$this->Modelo->inserta_comentario();
		
		if ($valida==1)
		{
			echo "Se agrego tu comentario ";
			header("Location: " . $_SERVER['HTTP_REFERER']); 
		}
		else
		{
			echo "hubo un error al agregar el comentario ";
			header("Location: " . $_SERVER['HTTP_REFERER']);
		}
		
	}
}

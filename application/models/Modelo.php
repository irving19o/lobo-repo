<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Model {

	 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function valida()
	{
		$usuario=$this->input->post("usuario");
		$contrasena=md5($this->input->post("contrasena"));

		$sql="SELECT count(nombreDeUsuario), idUsuario FROM Usuario WHERE nombreDeUsuario ='$usuario' and contrasena ='$contrasena'";
		
		$result=$this->db->query($sql)->result_array();
		$count=$result[0]['count(nombreDeUsuario)'];

		
		if ($count==1) {
			//echo "sesion iniciada";
			$idUsuario=$result[0]['idUsuario'];
			$datos="SELECT nombre, apellidoPaterno ,apellidoMaterno, nombreDeUsuario, correoElectronico FROM Usuario WHERE idUsuario ='$idUsuario' ";
			$miquery=$this->db->query($datos)->result_array();

			$newdata = array(
					'id'=> $idUsuario,
			        'nombre'  => $miquery[0]["nombre"],
			        'apellidoPaterno' => $miquery[0]["apellidoPaterno"],
			        'apellidoMaterno' => $miquery[0]["apellidoMaterno"],
			        'nombreDeUsuario' => $miquery[0]["nombreDeUsuario"],
			        'correoElectronico' =>$miquery[0]["correoElectronico"]);
			$this->session->set_userdata($newdata);

		
		//echo $_SESSION['nombreDeUsuario'];

		return 1;
		}
		else 
			return 0;

		

	}

	public function inserta()
	{
		
		
		$this->nombre=$this->input->post("nombre");
		$this->apellidoPaterno=$this->input->post("apellidoPaterno");
		$this->apellidoMaterno=$this->input->post("apellidoMaterno");
		$this->sexo=$this->input->post("sexo");
		$this->fechaNacimiento=$this->input->post("fechaNacimiento");
		$this->correoElectronico=$this->input->post("correoElectronico");
		$this->nombreDeUsuario=$this->input->post("nombreUsuario");
		$this->contrasena=md5($this->input->post("contrasena"));

		$sql1="SELECT count(nombreDeUsuario) FROM Usuario WHERE nombreDeUsuario ='$this->nombreDeUsuario' OR correoElectronico ='$this->correoElectronico'";
		
		$result=$this->db->query($sql1)->result_array();
		$count=$result[0]['count(nombreDeUsuario)'];


		if ($count>0) {
			echo "nombre de usuario o correo ya existente";
		}
		
		else
		{
			$this->db->insert('Usuario ', $this);
			echo "exito";
		}
		

		}
		
		
	public function insertaDelito()
	{
		$this->idUsuario=$_SESSION["id"];
		$this->tipoDelito=$this->input->post("tipoDelito");
		$this->horaDelito=$this->input->post("horaDelito");
		$this->fechaDelito=$this->input->post("fechaDelito");
		$this->direccion=$this->input->post("direccion");
		$this->descripcionPerpetuador=$this->input->post("descripcionPerpetuador");
		$this->descripcionArma=$this->input->post("descripcionArma");
		$this->descripcionLarga=$this->input->post("descripcionLarga");
		$this->lat=$this->input->post("lat");
		$this->long=$this->input->post("long");
		
		$this->db->insert('Delito ', $this);
	
		return 1;
		
		
	}
	

	

	public function get_novedades()
	{
		$this->db->select('tipoDelito, idDelito, descripcionLarga');
		$this->db->from('Delito');
		$query = $this->db->get();
		
		return $query->result();
		

	}

	public function get_misDenuncias()
	{
		$this->db->select('tipoDelito, idDelito, descripcionLarga');
		$this->db->from('Delito');
		$this->db->where('idUsuario', $_SESSION['id']);
		$query = $this->db->get();
		
		return $query->result();

	}
	
	public function get_latLong()
	{
		$this->db->select(' idDelito, lat, long');
		$this->db->from('Delito');
	
		$query = $this->db->get();
		
		return $query->result();
		
	}
	
	public function get_delito($id)
	{
		$this->db->select('*');
		$this->db->from('Delito');
		$this->db->where('idDelito', $id);
	
		$query = $this->db->get();
	
		return $query->result();
		
	}
	
		public function inserta_comentario()
	{
	;
		$this->idUsuario=$_SESSION["id"];
		$this->idDelito=$this->input->post("idDelito");
		$this->comentario=$this->input->post("comentario");
		
		$this->db->insert('Comentario ', $this);
	
		return 1;
		
	}
	
		public function get_comentarios($id)
	{
		$this->db->select('comentario');
		$this->db->from('Comentario');
		$this->db->where('idDelito', $id);
	
		$query = $this->db->get();
	
		return $query->result();
		
	}
	
	





	}
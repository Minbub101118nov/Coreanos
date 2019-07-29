<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treinta extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("form");
		$this->load->library('form_validation');
		/*Aqui van los modelos que se van a traer*/
	}//end __construct

	public function index()	{
		$this->crear_vista('portal/treinta', $this->cargar_datos());
	}//end
	public function cargar_datos(){
		$datos= array();
		$datos['nombre']='Diana Juárez Márquez';
		return $datos;
	}//end cargar_datos
	public function crear_vista($nombre_vista=NULL, $datos=NULL){
			$datos['contenido']= $this->load->view($nombre_vista, $datos, TRUE);
			$datos['menu_navegacion']= navegacion_portal($this->proy->PAGINA_TREINTA);
			//$datos['navegacion']= $datos['navegacion'];
			$this->load->view('portal/base', $datos);
	}

}//end class Inicio


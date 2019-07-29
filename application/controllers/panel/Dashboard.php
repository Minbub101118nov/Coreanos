<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("form");
		$this->load->library('form_validation');

	}//end __construct

	public function index()	{
		if ($this->session->is_logged==TRUE) {
			// code...
		$this->crear_vista('panel/dashboard', $this->cargar_datos());
		}
		else {
			$this->load->view('usuario/login');
		}
	}//end
	public function cargar_datos(){
		$datos= array();
		$datos['nombre']='Diana Juárez Márquez';
		return $datos;
	}//end cargar_datos
	public function crear_vista($nombre_vista=NULL, $datos=NULL){
			$datos['contenido']= $this->load->view($nombre_vista, $datos, TRUE);
			$datos['menu_navegacion']= navegacion_portal($this->proy->TAREA_DASHBOARD);
			//$datos['navegacion']= $datos['navegacion'];
			$this->load->view('panel/base', $datos);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("form");
		$this->load->library('form_validation');
		/*Aqui van los modelos que se van a traer*/
	}//end __construct

	public function index($seccion=0)	{
		// $this->load->view('usuario/login');
		if( ($seccion>0) && ($seccion<1000)){
			// debug($seccion);
			if(($this->session->is_logged==TRUE) && ($seccion==2)){
				redirect('panel/dashboard');
			}
			// debug('fdfd');
			switch ($seccion) {
				case $this->proy->PAGINA_INICIO:
				redirect('portal/inicio');
			break;
			case $this->proy->PAGINA_LOGIN:
				redirect('usuario/login');
			break;
			case $this->proy->PAGINA_ARTISTAS:
				redirect('portal/artistas');
			break;
			case $this->proy->PAGINA_DORAMAS:
				redirect('portal/doramas');
			break;
			case $this->proy->PAGINA_ALBUMES:
				redirect('portal/albumes');
			break;
			case $this->proy->PAGINA_GALERIA:
				redirect('portal/galeria');
			break;
			case $this->proy->PAGINA_CONTACT:
				redirect('portal/contact');
			break;
            case $this->proy->PAGINA_UNO:
				redirect('portal/uno');
            break;
            case $this->proy->PAGINA_DOS:
				redirect('portal/dos');
            break;
            case $this->proy->PAGINA_TRES:
				redirect('portal/tres');
            break;
            case $this->proy->PAGINA_CUATRO:
				redirect('portal/cuatro');
            break;
            case $this->proy->PAGINA_CINCO:
				redirect('portal/cinco');
            break;
            case $this->proy->PAGINA_SEIS:
				redirect('portal/seis');
            break;
            case $this->proy->PAGINA_SIETE:
				redirect('portal/siete');
            break;
            case $this->proy->PAGINA_OCHO:
				redirect('portal/ocho');
            break;
            case $this->proy->PAGINA_NUEVE:
				redirect('portal/nueve');
            break;
            case $this->proy->PAGINA_DIEZ:
				redirect('portal/diez');
            break;
            case $this->proy->PAGINA_ONCE:
				redirect('portal/once');
            break;
            case $this->proy->PAGINA_DOCE:
				redirect('portal/doce');
            break;
            case $this->proy->PAGINA_TRECE:
				redirect('portal/trece');
            break;
            case $this->proy->PAGINA_CATORCE:
				redirect('portal/catorce');
            break;
            case $this->proy->PAGINA_QUINCE:
				redirect('portal/quince');
            break;
            case $this->proy->PAGINA_DIECISEIS:
				redirect('portal/dieciseis');
            break;
            case $this->proy->PAGINA_DIECISIETE:
				redirect('portal/diecisiete');
            break;
            case $this->proy->PAGINA_DIECIOCHO:
				redirect('portal/dieciocho');
            break;
            case $this->proy->PAGINA_DIECINUEVE:
				redirect('portal/diecinueve');
            break;
            case $this->proy->PAGINA_VEINTE:
				redirect('portal/veinte');
            break;
            case $this->proy->PAGINA_VEINTIUNO:
				redirect('portal/veintiuno');
            break;
            case $this->proy->PAGINA_VEINTIDOS:
				redirect('portal/veintidos');
            break;
            case $this->proy->PAGINA_VEINTITRES:
				redirect('portal/veintitres');
            break;
            case $this->proy->PAGINA_VEINTICUATRO:
				redirect('portal/veinticuatro');
            break;
            case $this->proy->PAGINA_VEINTICINCO:
				redirect('portal/veinticinco');
            break;
            case $this->proy->PAGINA_VEINTISEIS:
				redirect('portal/veintiseis');
            break;
            case $this->proy->PAGINA_VEINTISIETE:
				redirect('portal/veintisiete');
            break;
            case $this->proy->PAGINA_VEINTIOCHO:
				redirect('portal/veintiocho');
            break;
            case $this->proy->PAGINA_VEINTINUEVE:
				redirect('portal/veintinueve');
            break;
            case $this->proy->PAGINA_TREINTA:
				redirect('portal/treinta');
            break;
            case $this->proy->PAGINA_TREINTAYUNO:
				redirect('portal/treintayuno');
            break;        
            case $this->proy->PAGINA_TREINTAYDOS:
				redirect('portal/treintaydos');
            break;
            case $this->proy->PAGINA_TREINTAYTRES:
				redirect('portal/treintaytres');
            break;
            case $this->proy->PAGINA_TREINTAYCUATRO:
				redirect('portal/treintaycuatro');
            break;
            case $this->proy->PAGINA_TREINTAYCINCO:
				redirect('portal/treintaycinco');
            break;
            case $this->proy->PAGINA_TREINTAYSEIS:
				redirect('portal/treintayseis');
            break;
            case $this->proy->PAGINA_TREINTAYSIETE:
				redirect('portal/treintaysiete');
            break;
            case $this->proy->PAGINA_TREINTAYOCHO:
				redirect('portal/treintayocho');
            break;
            case $this->proy->PAGINA_TREINTAYNUEVE:
				redirect('portal/treintaynueve');
            break;
            case $this->proy->PAGINA_CUARENTA:
				redirect('portal/cuarenta');
            break;
             case $this->proy->PAGINA_CUARENTAYUNO:
				redirect('portal/cuarentayuno');
            break;
            case $this->proy->PAGINA_CUARENTAYDOS:
				redirect('portal/cuarentaydos');
            break;
            case $this->proy->PAGINA_CUARENTAYTRES:
				redirect('portal/cuarentaytres');
            break;
            case $this->proy->PAGINA_CUARENTAYCUATRO:
				redirect('portal/cuarentaycuatro');
            break;
            case $this->proy->PAGINA_CUARENTAYCINCO:
				redirect('portal/cuarentaycinco');
            break;
            case $this->proy->PAGINA_CUARENTAYSEIS:
				redirect('portal/cuarentayseis');
            break;
            case $this->proy->PAGINA_CUARENTAYSIETE:
				redirect('portal/cuarentaysiete');
            break;
            case $this->proy->PAGINA_CUARENTAYOCHO:
				redirect('portal/cuarentayocho');
            break;
            case $this->proy->PAGINA_CUARENTAYNUEVE:
				redirect('portal/cuarentaynueve');
            break;
            case $this->proy->PAGINA_CINCUENTA:
				redirect('portal/cincuenta');
            break;
            case $this->proy->PAGINA_CINCUENTAYUNO:
				redirect('portal/cincuentayuno');
            break;
            case $this->proy->PAGINA_CINCUENTAYDOS:
				redirect('portal/cincuentaydos');
            break;
            case $this->proy->PAGINA_CINCUENTAYTRES:
				redirect('portal/cincuentaytres');
            break;
            case $this->proy->PAGINA_CINCUENTAYCUATRO:
				redirect('portal/cincuentaycuatro');
            break;
            case $this->proy->PAGINA_CINCUENTAYCINCO:
				redirect('portal/cincuentaycinco');
            break;
            case $this->proy->PAGINA_CINCUENTAYSEIS:
				redirect('portal/cincuentayseis');
            break;
            case $this->proy->PAGINA_CINCUENTAYSIETE:
				redirect('portal/cincuentaysiete');
            break;
            case $this->proy->PAGINA_CINCUENTAYOCHO:
				redirect('portal/cincuentayocho');
            break;
            case $this->proy->PAGINA_CINCUENTAYNUEVE:
				redirect('portal/cincuentaynueve');
            break;
            case $this->proy->PAGINA_SESENTA:
				redirect('portal/sesenta');
            break;
            case $this->proy->PAGINA_SESENTAYUNO:
				redirect('portal/sesentayuno');
            break;
            case $this->proy->PAGINA_SESENTAYDOS:
				redirect('portal/sesentaydos');
            break;
            case $this->proy->PAGINA_SESENTAYTRES:
				redirect('portal/sesentaytres');
            break;
            case $this->proy->PAGINA_SESENTAYCUATRO:
				redirect('portal/sesentaycuatro');
            break;
            case $this->proy->PAGINA_SESENTAYCINCO:
				redirect('portal/sesentaycinco');
            break;
            case $this->proy->PAGINA_SESENTAYSEIS:
				redirect('portal/sesentayseis');
            break;
            case $this->proy->PAGINA_SESENTAYSIETE:
				redirect('portal/sesentaysiete');
            break;
            case $this->proy->PAGINA_SESENTAYOCHO:
				redirect('portal/sesentayocho');
            break;
            case $this->proy->PAGINA_SESENTAYNUEVE:
				redirect('portal/sesentaynueve');
            break;
            case $this->proy->PAGINA_SETENTA:
				redirect('portal/setenta');
            break;
				default:
					// code...
					break;
			}//end switch
		}
		else if( ($seccion>=1000) && ($seccion<=3000) && ($this->session->is_logged)){
			// debug($this->session->is_logged,false);
			// debug($seccion);
			switch ($seccion) {
				case $this->proy->TAREA_DASHBOARD:
					redirect('panel/dashboard');
				break;
				case $this->proy->TAREA_COMPONENTS_BUTTONS:
					redirect('panel/components_buttons');
				break;
                case $this->proy->TAREA_TABLAS:
				redirect('panel/tablas');
                break;
			   case $this->proy->TAREA_CHARTS:
				redirect('panel/charts');
               break;
				default:
					// code...
					break;
			}//e
		}//end else if
		else{
			//pasaber si esta logeado
			if ($this->session->is_logged) {
				redirect('panel/dashboard');
			}
			else{
				redirect('portal/inicio');
			}
		}
	}//end index

}//end class Principal


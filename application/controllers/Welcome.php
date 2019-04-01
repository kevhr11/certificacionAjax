<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function ejemplo(){
		$this->load->view('Ejemplo');
	}

	public function registro(){
			$numero1 = $this->input->post('n1');
			$numero2 = $this->input->post('n2');
			$operaciones = $this->input->post('operaciones');

			switch ($operaciones) {
				case 'suma':
					$mensaje['mensaje'] = $numero1+$numero2; 
					break;
				
				case 'resta':
					$mensaje['mensaje'] = $numero1-$numero2; 
					break;
			
				case 'multi':
					$mensaje['mensaje'] = $numero1*$numero2; 
					break;

				case 'division':
					$mensaje['mensaje'] = $numero1/$numero2; 
					break;

				case 'potencia':
					$mensaje['mensaje'] = pow($numero1, $numero2);
					break;
	
				case 'radi':
					if ($numero1<0 && $numero2%2 == 0) {
						$mensaje = "Error el indice tiene que ser un numero positivo";
					}else{
						$mensaje['mensaje'] = pow($numero1, 1/$numero2); 
					}
					break;

				default :
					$mensaje['mensaje'] = "Seleccione una opcion a evaluar";
					break;
			}
		$this->load->view('registro', $mensaje);
	}
}

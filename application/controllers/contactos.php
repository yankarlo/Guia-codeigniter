<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Contactos extends CI_Controller
	{
	    public function index()
		{
			$this->load->model('Model_Contactos');

			$data['listado'] = $this->Model_Contactos->get_todos();			

			$this->load->view('view_list_contactos', $data);
		}		

		public function agregar()
		{			
			$this->load->helper('form');
			$this->load->library('form_validation');


			if ($this->input->post()) {
				$this->form_validation->set_rules('con_email','Email',								'required|valid_email');
				$this->form_validation->set_rules('con_nombre','Nombre',								'required|min_length[3]');
				$this->form_validation->set_rules('con_edad','Edad',								'required|integer');

				if($this->form_validation->run() == true){
				
					echo "Informacion<br>";
					print_r($this->input->post());

				}else {
					$this->load->view('view_form_contactos');
				}
			} else {
				$this->load->view('view_form_contactos');
			}			
		}
	}

/* Fin del Archivo contactos.php*/
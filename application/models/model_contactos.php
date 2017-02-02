<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Contactos extends CI_Model {

        /*public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }*/

        public function get_todos()
        {
        	$this->load->database();

        	$query = $this->db->get('con_contactos');
        	
        	return $query->result();
        }
}

/* Fiin del archivo mContactos.php*/
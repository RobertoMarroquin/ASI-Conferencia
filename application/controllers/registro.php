<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');


    }
    
    public function index(){
        $data = array(
             'base'=> base_url(),
             );
        $this->load->view('registro', $data);
        
    }

    public function registrar(){
        $data = array(
					'nombreCongre' => $this->input->post('nombre'),
					'empresaCongre' => $this->input->post('institucion'),
					'correo' => $this->input->post('correo'),
					'tel1' => $this->input->post('telefono'),
					'tel2' => $this->input->post('telefono2'),
					);
				$this->db->insert('congresista',$data);
				redirect('registro');
        
    }
}

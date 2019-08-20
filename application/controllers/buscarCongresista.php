<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarCongresista extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    
    public function index(){
        $data = array(
             'base'=> base_url(),
             );
        $this->load->view('buscarCongresista', $data);
    }
}

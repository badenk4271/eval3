<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('form_model');  
	}

	public function index()
	{
		$this->load->view('formulario');

	}
	function validar()
	{
		$name= $this->input->post('nombres2');
		$apellido1= $this->input->post('apellidos2');
		$Email= $this->input->post('correo');
		echo "Nombre:".$name."Apellido:".$apellido1."correo:".$Email;
		$data=array('nombre'=>$this->input->post('nombres2'),'apellido'=>$this->input->post('apellidos2'),'correo'=>$this->input->post('correo'));
		$this->form_model->guardar($data);
	}
}
 
  
?>
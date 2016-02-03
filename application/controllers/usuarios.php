<?php 

class Usuarios extends CI_Controller{
	


	public function index()
	{

		$this->load->view("usuarios/login");

	}

	public function login()
	{

		$this->load->model("usuarios_model");
		$data["usuario"]= $this->usuarios_model->get_usuarios($this->input->post("nombre"),
															 sha1($this->input->post("password"));
				
		if ( !empty($data["usuario"])) {
			$this->load->view("principal",$data);	
		}
		else{

			$this->load->view("usuarios/login");
		}
	
	}


	public functio insertar()
	{
		$this->input->post();
	}







	

}
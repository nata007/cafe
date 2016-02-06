<?php

class Organizacion extends CI_Controller{

	function __construct()
	{
		parent::__construct('');
		$this->load->model('usuarios_model');
	}

	
	public function index()
	{
		$data = array('resultados'=>$this->usuarios_model->get_all_organizacion());
		$this->load->view('cafe_base');
		$this->load->view('organizacion/org_todos',$data);
	}
	
	public function nueva_organizacion($us_id=0)
	{
		
		$this->form_validation->set_rules('cafe_nombre','Nombre','trim|required');
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		if($this->form_validation->run()==FALSE)
		{
			if($us_id==0)
			{
				$data = array('titulo'=>'Nuevo ',
								'usuario'=>null);
			}
			
			$this->load->view('cafe_base');
			$this->load->view('organizacion/org_nueva');
		}
		else
		{
			$this->load->model('usuarios_model');
		
			$clave_productor= $this->input->post('cafe_clave');
			$prd_nombre= $this->input->post('cafe_nombre');
			$prd_rfc= $this->input->post('cafe_rfc');	
			$prd_calle= $this->input->post('cafe_calle');
			$prd_numero= $this->input->post('cafe_numero');
			$prd_telefono= $this->input->post('cafe_telefono');
			$prd_fecha_ingreso= $this->input->post('cafe_fecha');
			
			$this->usuarios_model->insertar_productor($clave_productor,$prd_nombre,$prd_rfc,$prd_calle,
			$prd_numero,$prd_telefono,$prd_fecha_ingreso);
			redirect('productores');
		}
		
	}




}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

	
	function __construct()
	{
		parent::__construct('');
		$this->load->model('usuarios_model');
	}
	
	function index()
	{
		$data['resultados'] = $this->usuarios_model->get_all_empleados();
		$this->load->view('cafe_base');
		$this->load->view('empleados/emp_todos',$data);
	}
	
	public function nuevo_usuario($us_id=0)
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
			$this->load->view('empleados/emp_nuevo');
		}
		else
		{
			$this->load->model('usuarios_model');
			
			$nombre= $this->input->post('cafe_nombre');
			$curp= $this->input->post('cafe_curp');
			$calle= $this->input->post('cafe_calle');
			$numero= $this->input->post('cafe_numero');
			$lugar= $this->input->post('cafe_lugar');
			$estado= $this->input->post('cafe_estado');
			$telefono= $this->input->post('cafe_telefono');
			$password= sha1($this->input->post('cafe_password'));
			$id_organizacion= $this->input->post('cafe_organizacion');
			
			$this->usuarios_model->insertar_empleado($nombre,$curp,$calle,$numero,$lugar,
									  $estado,$telefono,$id_organizacion,$password);
			redirect('empleados');

		}
		
	}
	
	
	
	
}

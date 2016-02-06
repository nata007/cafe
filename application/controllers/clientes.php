<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct('');
		$this->load->model('Usuarios_model');
	}
	
	function index()
	{
		$data = array('resultados'=>$this->Usuarios_model->get_all_cliente());
		$this->load->view('cafe_base');
		$this->load->view('clientes/cli_todos',$data);
	}
	
	public function nuevo_cliente($us_id=0)
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
			$this->load->view('clientes/cli_nuevo');
		}
		else
		{
			$this->load->model('usuarios_model');
		
			$rfc= $this->input->post('cafe_rfc');	
			$razon_social= $this->input->post('cafe_razon');
			$nombre= $this->input->post('cafe_nombre');
			$pais= $this->input->post('cafe_pais');
			$lugar= $this->input->post('cafe_lugar');
			$calle= $this->input->post('cafe_calle');
			$numero= $this->input->post('cafe_numero');
			$telefono= $this->input->post('cafe_telefono');
			$email= $this->input->post('cafe_email');
			
			$this->usuarios_model->insertar_cliente($rfc,$razon_social,$nombre,
									 $pais,$lugar,$calle,$numero,
									 $telefono,$email);
			redirect('clientes');
		}
		
	}
	
	
	
	
}

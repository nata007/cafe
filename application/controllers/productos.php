<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

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
		$this->load->model('productos_model');
	}
	
	function index()
	{
		$data = array('resultados'=>$this->productos_model->get_all_productos());
		$this->load->view('cafe_base');
		$this->load->view('productos/pro_todos',$data);
	}
	
	public function nuevo_producto($us_id=0)
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
			$this->load->view('productos/pro_nuevo');
		}
		else
		{
			$this->load->model('productos_model');
			
			if($this->input->post('cafe_procesado')!='1')
			{
				$procesado=0;
			}
			else
			{
				$procesado=1;
			}
			$pdcto_nombre= $this->input->post('cafe_nombre');
			$pdcto_procesado= $procesado;
			$pdcto_presentacion= $this->input->post('cafe_presentacion');
			$pdcto_gramaje= $this->input->post('cafe_gramaje');
			$pdcto_precio= $this->input->post('cafe_precio');
			
			$this->productos_model->insertar_producto($pdcto_nombre,$pdcto_procesado,
									  $pdcto_presentacion,$pdcto_gramaje,$pdcto_precio);
			redirect('productos');
		}
		
	}
	
	
	
	
}

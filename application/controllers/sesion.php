<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller {


	function index()
	{
		
		$this->load->model('model_sesion');
		if($this->model_sesion->esta_logueado())
		{
			redirect('menu');
		}
		else
		{
			$this->form_validation->set_rules('clave', 'Clave de usuario', 'callback_checa_login');
    	    $this->form_validation->set_error_delimiters('<div id="notificacion_area" class="notificacion_fondo" style="display:block;"><div class="notificacion_caja"><div class="notificacion_titulo">Mensaje</div><div class="notificacion_mensaje">','</div><div align="center"><input type="button" id="aceptar_notificacion" value="Aceptar" class="notificacion_aceptar"/></div></div></div>');
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('cafe_inicio_sesion');
			}
			else
			{
				redirect('menu');
			}
		}
	}
	
	function checa_login($clave)
	{
		$password = sha1($this->input->post("contrasena"));	
		

		/* El ! en el if niega la sentencia, true a false, false a true */
		if(!$this->model_sesion->inicio_sesion($clave,$password))
		{
			$this->form_validation->set_message('checa_login','La informacion de inicio de sesión es incorrecta. Reintenta o contacta al Administrador de tu área.');
			return false;
		}
		return true; 	
	}
	
	function cerrar_sesion()
	{
		//$this->model_sesion->cerrar_sesion();
		$this->session->sess_destroy();
		redirect('menu');

	}
}

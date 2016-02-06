<?php

class Procesos extends CI_Controller{

	public function beneficiohumedo()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/beneficiohumedo');
	}

	public function beneficioseco()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/beneficioseco');
		
	}

	public function compra_de_cafe()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/compra_de_cafe');
		
	}

	public function contratos()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/contratos');
	}

	public function entradas()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/entradas');
		
	}
	public function pedidos()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/pedidos');
		
	}
	public function salidas()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/salidas');
		
	}
	public function ventas()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/ventas');
	}
	public function gastos()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/gastos');
	}
	public function jornales()
	{
		$this->load->view('cafe_base');
		$this->load->view('procesos/jornales');
	}




}
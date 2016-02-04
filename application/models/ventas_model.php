<?php

class Ventas_model extends CI_Model{

//Metodo para consultar todos los contratos
	public function get_all_contrato()
	{
		return $this->db->select("*")
						->from("contrato")
				 		->get()
				 		->result();
	}

//Metodo para consultar los datos de 1 contrato
	public function get_contrato($num_contrato)
	{
		return $this->db->select("*")
						->from("contrato")
						->where("num_contrato",$num_contrato)
						->get()
						->result();
	}

//Metodo para la insercion de un contrato 
	public function insertar_contrato($num_contrato,$destino,$volumenkg,$id_cliente)
	{
		return $this->db->set("num_contrato",$num_contrato)
						->set("destino",$destino)
						->set("volumenkg",$volumenkg)
						->set("id_cliente",$id_cliente)
						->insertar("contrato");
	}
//Metodo para la consulta de todos los dtalles de contratos
	public function get_all_detalle_contrato()
	{
		return $this->db->select("*")
						->from("detalle_contrato")
						->get()
						->result();

	}
//metodo para la consulta de un detalle de contraro
	public function get_detalle_contrato()
	{
		return $this->db->select("*")
						->from("detalle_contrato")
						->where("id_detalle",$id_detalle)
						->get()
						->result();
	}
//Metodo para insertar un detalle de contrato
	public function insertar_detalle_contrato($id_producto,$fecha_entrega,$cantidadkg,$preciobasekg,
											  $puntoentrega,$condicionpago,$num_contrato)
	{
		return $this->db->set("id_producto",$id_producto)
						->set("fecha_entrega",$fecha_entrega)
						->set("cantidadkg",$cantidadkg)
						->set("preciobasekg",$preciobasekg)
						->set("puntoentrega",$puntoentrega)
						->set("condicionpago",$condicionpago)
						->set("num_contrato",$num_contrato)
						->insertar("detalle_contrato")
	}
//Metodo para consultar todos los registros de venta producto
	public function get_all_venta_producto()
	{
		return $this->db->select("*")
						->from("venta_producto")
						->get()
						->result();
	}
//Metodo para consultar un registo de venta producto
	public function get_venta_producto($folio)
	{

		return $this->db->select("*")
						->from("venta_producto")
						->where("folio",$folio)
						->get()
						->result();
	}
//Metodo para insertar los registros de venta producto
	public function insertar_venta_producto($folio,$id_producto,$vp_calidad,$vp_cantidadkg,
											$vp_precio,$vp_importe)
	{
		return $this->db->set("folio",$folio)
						->set("id_producto",$id_producto)
						->set("vp_calidad",$vp_calidad)
						->set("vp_cantidadkg",$vp_cantidadkg)
						->set("vp_precio",$vp_precio)
						->set("vp_importe",$vp_importe)
						->insert("venta_producto");

	}
//Metodo para traer todos los registros de ventas
	public function get_all_venta()
	{
		return $this->db->select("*")
						->from("venta")
						->get()
						->result();
	}
//Metodo para traer un registro de venta
	public function get_venta($folio)
	{
		return $this->db->select("*")
						->from("venta")
						->where("folio",$folio)
						->get()
						->result();
	}
//Metodo para insertar una venta
	public function insertar_venta($folio,$vt_fecha,$vt_mercado,$id_cliente,
								   $id_pedido,$id_organizacion)
	{
		return $this->db->set("folio",$folio)
						->set("vt_fecha"$vt_fecha)
						->set("vt_mercado",$vt_mercado)
						->set("id_cliente",$id_cliente)
						->set("id_pedido",$id_pedido)
						->set("id_organizacion",$id_organizacion)
						->insert("venta");
	}
//Metodo para traer todos los registros de salida
	public function get_all_salida()
	{
		return $this->db->select("*")
						->from("salida")
						->get()
						->result();
	}
//Metodo para traer los datos de un registro de salida
	public function get_salida($id_salida)
	{
		return $this->db->select("*")
						->from("salida")
						->where("id_salida",$id_salida)
						->get()
						->result();
	}
//Metodo para insertar en salida
	public function insertar_salida($sal_fecha_salida,$id_producto,$sal_calidad,$sal_cant_kilogr,
									$sal_cant_costales,$id_folio)
	{
		return $this->db->set("sal_fecha_salida",$sal_fecha_salida)
						->set("id_producto",$id_producto)
						->set("sal_calidad",$sal_calidad)
						->set("sal_cant_kilogr",$sal_cant_kilogr)
						->set("sal_cant_costales",$sal_cant_costales)
						->insert("salida");

	}

}
<?php 

class Productos_model extends CI_Model{


//Metodo para traer todos los productos regitrados
	public function get_all_productos()
	{
		return $this->db->select("*")
				 ->from("producto")
				 ->get()
				 ->result();
	}

//Metodo para traer un sollo producto registrado
	public function get_producto($id_producto)
	{
		return $this->db->select("*")
				 ->from("producto")
				 ->where("id_producto",$id_producto)
				 ->get()
				 ->result();
	}

//Metodo para insertar un producto
	public function insertar_producto($pdcto_nombre,$pdcto_procesado,
									  $pdcto_presentacion,$pdcto_gramaje,$pdcto_precio)
	{

		return $this->db->set("pdcto_nombre",$pdcto_nombre)
				 ->set("pdcto_procesado",$pdcto_procesado)
				 ->set("pdcto_presentacion",$pdcto_presentacion)
				 ->set("pdcto_gramaje",$pdcto_gramaje)
				 ->set("pdcto_precio",$pdcto_precio)
				 ->insert("producto");

	}

//MEtodo para traer todas las compras de pruducto reguistradas
	public function get_all_compras()
	{
		return $this->db->select("*")
				 ->from("compra")
				 ->get()
				 ->result();


	}
//Metodo para traer una sola compra de producto registrada
	public function get_compra($id_compra)
	{
		return $this->db->select("*")
						->from("compra")
						->where("id_compra",$id_compra)
						->get()
						->result();

	}

//Metodo para insertar una nueva compra 
	public function insertar_compra($cmp_fecha,$cmp_cant_sacos,
									$cmp_cant_kg,$cmp_precio_kg,$cmp_importe,
									$cmp_manejo,$cmp_beneficio_humedo,
									$id_organizacion,$clave_producto,$id_producto)
	{
		return $this->db->set("cmp_fecha",$cmp_fecha)
						->set("cmp_cant_sacos",$cmp_cant_sacos)
						->set("cmp_cant_kg",$cmp_cant_kg)
						->set("cmp_preciokg",$cmp_precio_kg)
						->set("cmp_importe",$cmp_importe)
						->set("cmp_manejo",$cmp_manejo)
						->set("cmp_beneficio_humedo",$cmp_beneficio_humedo)
						->set("id_organizacion",$id_organizacion)
						->set("clave_producto",$clave_producto)
						->set("id_producto",$id_producto)
						->insert("compra");
	}
//Metodo para traer todos los beneficios humedos registrados
	public function get_all_beneficiohumedo()
	{
		return $this->db->select("*")
						->from("beneficiohumedo")
						->get()
						->result();
	}
//Metodo para traer un solo registro del beneficiohumedo
	public function get_beneficiohumedo($id_beneficiohumedo)
	{
		return $this->db->select("*")
						->from("beneficiohumedo")
						->where("id_beneficiohumedo",$id_beneficiohumedo)
						->get()
						->result();
	}
//Metodo para registrar un beneficiohumedo
	public function insertar_beneficiohumedo($bn_fecha_in,$bn_fecha_out,
											 $bn_kg_in,$bn_kg_out,$bn_kg_pergamino,$bn_kgs_espumilla,
											 $bn_kgs_flote,$id_compra)
	{
		return $this->db->set("bh_fecha_in",$bn_fecha_in)
						->set("bh_fecha_out",$bn_fecha_out)
						->set("bh_kg_in",$bn_kg_in)
						->set("bh_kg_out",$bn_kg_out)
						->set("bh_kg_pergamino",$bn_kg_pergamino)
						->set("bh_kgs_espumilla",$bn_kgs_espumilla)
						->set("bh_kgs_flote",$bn_kgs_flote)
						->set("id_compra",$id_compra)
						->insert("beneficiohumedo");
	}

//Metodo para traer todos los registros de beneficio seco
	public function get_all_beneficioseco()
	{
		return $this->db->select("*")
						->from("beneficioseco")
						->get()
						->result();

	}
//Metodo para traer un solo registre de beneficioseco
	public function get_beneficioseco($id_beneficioseco)
	{

		return $this->db->select("*")
						->from("beneficioseco")
						->where("id_beneficioseco",$id_beneficioseco)
						->get()
						->result();

	}
//Metodo para insertar un beneficio seco 
	public function insertar_beneficioseco($id_organizacion,$bs_fechaingreso,$bs_kgs_pergamino,
										   $bd_fecha_salida,$bs_kgs_oro,
										   $bs_rendimiento,$id_beneficiohumedo)
	{
		return $this->db->set("id_organizacion",$id_organizacion)
						->set("bs_fechaingreso",$bs_fechaingreso)
						->set("bs_kgs_pergamino",$bs_kgs_pergamino)
						->set("bs_fecha_salida",$bd_fecha_salida)
						->set("bs_kgs_oro",$bs_kgs_oro)
						->set("bs_rendimiento",$bs_rendimiento)
						->insert("beneficioseco");

	}
//Metodo para traer todas las entradas registradas
	public function get_all_entrada()
	{
		return $this->db->select("*")
						->from("entrada")
						->get()
						->result();
	}
//Metodo para traer un solo registro de la tabla de entrada
	public function get_entrada($id_entrada)
	{
		return $this->db->select("*")
						->from("entrada")
						->where("id_entrada",$id_entrada)
						->get()
						->result();
	}
//Metodo para la insercion de una entrada
	public function insertar_entrada($ent_fecha_etrada,$ent_cant_sacos,$ent_cant_kilogr,
									 $ent_calidad,$ent_clave_origen,$ent_origen,
									 $id_compra,$id_producto)
	{
		return $this->db->set("ent_fecha_etrada",$ent_fecha_etrada)
						->set("ent_cant_sacos",$ent_cant_sacos)
						->set("ent_cant_kilogr",$ent_cant_kilogr)
						->set("ent_calidad",$ent_calidad)
						->set("ent_clave_origen",$ent_clave_origen)
						->set("ent_origen",$ent_origen)
						->set("id_compra",$id_compra)
						->set("id_producto",$id_producto)
						->insert("entrada");
	}

//Metodo para traer todos los pedidos registrados
	public function get_all_pedidos()
	{
		return $this->db->select("*")
						->from("pedido")
						->get()
						->result();
	}
//Metodo para traer un solo registro de un pedido 
	public function get_pedido($id_pedido)
	{
		return $this->db->select("*")
						->from("pedido")
						->where("id_pedido",$id_pedido)
						->get()
						->result();
	}
//Metodo para insertar un pedido 
	public function insert_pedido($ped_fecha,$id_cliente,$ped_estatus,$num_contrato)
	{
		return $this->db->set("ped_fecha",$ped_fecha)
						->set("id_cliente",$id_cliente)
						->set("ped_estatus",$ped_estatus)
						->set("num_contrato",$num_contrato)
						->insert("pedido");
	}
//Metodo para consultar todos los registros de pedido producto
	public function get_all_pedido_producto()
	{
		return $this->db->select("*")
						->from("pedido_producto")
						->get()
						->result();
	}
//Metodo para consultar un solo reporte de pedido producto
	public function get_pedido_producto($id_pedido)
	{
		return $this->db->select("*")
						->from("pedido_producto")
						->where("id_pedido",$id_pedido)
						->get()
						->result();
	}
//Metodo para insertar un pedido producto
	public function insertar_pedido_producto($id_producto,$pp_cantidad,$pp_precio,$pp_importe)
	{
		return $this->db->set("id_producto",$id_producto)
						->set("pp_cantidad",$pp_cantidad)
						->set("pp_precio",$pp_precio)
						->set("pp_importe",$pp_importe)
						->insert("pedido_producto");
	}
	
}
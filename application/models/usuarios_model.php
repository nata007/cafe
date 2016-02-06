<?php 

class Usuarios_model extends CI_Model{



//metodo de consulta de todos los empleados

	public function get_all_empleados()
	{
		return $this->db->select("*")
						->from("empleado")
						->get()
						->result();

	}

//Metodo de consulta de usuarios por login o un empleado en especifico
	
	public function get_empleado($nombre, $password)
	{
		return  $this->db->select("*")
						 ->from("empleado")
						 ->where("nombre",$nombre)
						 ->where("password",$password)
						 ->get()
						 ->result();

	}

//Metodo de insercion de empleado desde un formulario
	public function insertar_empleado($nombre,$curp,$calle,$numero,$lugar,
									  $estado,$telefono,$id_organizacion,
									  $password)
	{

		return  $this->db->set("em_nombre",$nombre)
						 ->set("em_curp",$curp)
						 ->set("calle",$calle)
						 ->set("numero",$numero)
						 ->set("lugar",$lugar)
						 ->set("estado",$estado)
						 ->set("telefono",$telefono)
						 ->set("password",$password)
						 ->set("id_organizacion",$id_organizacion)
						 ->insert("empleado");

	}

//Metodo de consulta a todos los clientes

	public function get_all_cliente()
	{
		return $this->db->select("*")
						->from("cliente")
						->get()
						->result();

	}

//Metodo de consulta de un cliente 
	public function get_cliente($id_cliente)
	{
		return $this->db->select("*")
						->from("cliente")
						->where("id_cliente",$id_cliente)
						->get()
						->result();
	}

//Metodo para insertar un cliente 
	public function insertar_cliente($rfc,$razon_social,$nombre,
									 $pais,$lugar,$calle,$numero,
									 $telefono,$email) 
	{
		return $this->db->set("cte_rfc",$rfc)
						->set("cte_razon_social",$razon_social)
						->set("cte_nombre",$nombre)
						->set("cte_pais",$pais)
						->set("cte_lugar",$lugar)
						->set("cte_calle",$calle)
						->set("cte_numero_ext",$numero)
						->set("cte_telefono",$telefono)
						->set("cte_email",$email)
						->insert("cliente");
	}



//Metodo para consultar todos los jornales 
	public function get_all_jornales()
	{
		return $this->db->select("*")
						->from("jornales")
						->get()
						->result();
	}

//Metodo para consultar un jornal por id
	public function get_jornal($id_jornal)
	{

		return $this->db->select("*")
						->from("jornales")
						->where("id_jornal",$id_jornal)
						->get()
						->result();
	}

//Metodo para insertar un jornal 
	public function insert_jornales($id_empleado,
									$id_puesto,$jor_num_jornales,
									$jor_importe, $jor_fecha_pago)
	{
		return $this->db->set("id_empleado",$id_empleado)
						->set("id_puesto",$id_puesto)
						->set("jor_num_jornales",$jor_num_jornales)
						->set("jor_importe",$jor_importe)
						->set("jor_fecha_pago",$jor_fecha_pago)
						->insert("jornales");
	}
//Metodo para consultar todos los puestos
	public function get_all_puestos()
	{
		return $this->db->select("*")
						->from("puestos")
						->get()
						->result();

	}
//Metodo para consultar un solo puesto 
	public function get_puesto($id_puesto)
	{
		return $this->db->select("*")
						->from("puestos")
						->where("id_puesto",$id_puesto)
						->get()
						->result();

	}
//Metodo para insertar un puesto
	public function insertar_puesto($nombre,$sueldo)
	{
		return $this->db->set("pst_nombre",$nombre)
						->set("pst_sueldo",$sueldo)
						->insert("puestos");

	}
//Metodo para traer todas las organizaciones registradas
	public function get_all_organizacion()
	{
		return $this->db->select("*")
						->from("organizacion")
						->get()
						->result();						
	}

//Metodo para consultar una organizacion
	public function get_organizacion($id_organizacion)
	{
		return $this->db->select("*")
						->from("organizacion")
						->where("id_organizacion",$id_organizacion)
						->get()
						->result();
	}
//Metodo para insertar una organizacion
	public function insertar_organizacion($ca_lugar,$ca_calle,$ca_numero,
										  $ca_telefono,$ca_responsable,
										  $rol,$clave_prod)
	{
		return $this->db->set("ca_lugar",$ca_lugar)
						->set("ca_calle",$ca_calle)
						->set("ca_numero",$ca_numero)
						->set("ca_telefono",$ca_telefono)
						->set("ca_responsable",$ca_responsable)
						->set("rol",$rol)
						->set("clave_prod",$clave_prod)	
						->insertar("organizacion");
	}


//Metodo para consultar todos los productores registrados
	public function get_all_productores()
	{
		return $this->db->select("*")
						->from("productores")
						->get()
						->result();
	}
//Metodo para cnsultar un productor
	public function get_productor($clave_productor)
	{
		return $this->db->select("*")
						->from("productores")
						->where("clave_productor",$clave_productor)
						->get()
						->result();
	}

//Metodo para insertar un productor
	public function insertar_productor($clave_productor,$prd_nombre,$prd_rfc,$prd_calle,$prd_numero,$prd_telefono,$prd_fecha_ingreso)
	{
		return $this->db->set("clave_productor",$clave_productor)
						->set("prd_nombre",$prd_nombre)
						->set("prd_rfc",$prd_rfc)
						->set("prd_calle",$prd_calle)
						->set("prd_numero",$prd_numero)
						->set("prd_telefono",$prd_telefono)
						->set("prd_fecha_ingreso",$prd_fecha_ingreso)
						->insert("productores");
	}

	public function get_all_gastos_operacion()
	{
		return $this->db->select("*")
						->from("gastos_operacion",$gastos_operacion)
						->get()
						->result();
	}

	public function get_gastos_operacion($id_gastos)
	{
		return $this->db->select("*")
						->from("gastos_operacion")
						->where("id_gastos",$id_gastos)
						->get()
						->result();
	}

	public function insertar_gastos_operacion($id_organizacion,$gst_ca_concepto,
											  $gst_ca_importe,$gst_ca_fecha)
	{
		return $this->db->set("id_organizacion",$id_organizacion)
						->set("gst_ca_concepto",$gst_ca_concepto)
						->set("gst_ca_importe",$gst_ca_importe)
						->set("gst_ca_fecha",$gst_ca_fecha)
						->insertar("gastos_operacion");

	}

}
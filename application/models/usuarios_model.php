<?php 

class Usuarios_model extends CI_Model{


	public function get_usuarios($nombre, $password)
	{
		return  $this->db->select("nombre, apellidos")
						 ->from("empleado")
						 ->where("nombre",$nombre)
						 ->where("password",$password)
						 ->get()
						 ->result();



	}









}
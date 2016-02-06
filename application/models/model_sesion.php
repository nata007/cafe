<?php
class Model_sesion extends CI_Model 
{
	function esta_logueado()
	{
		return $this->session->userdata('id_empleado')!=false;
	}
	
	function inicio_sesion($curp, $password)
	{
		$curp= strtoupper($curp);
		$password= strtoupper($password);
		
		$this->db->from('empleado');	
		$this->db->where('empleado.em_curp',$curp);
		$this->db->where('empleado.password',$password);
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() ==1)
		{
			$row=$query->row();
			$this->session->set_userdata('id_empleado', $row->id_empleado);
			$this->session->set_userdata('nombre', $row->em_nombre);
			return true;
		}
		return false;
	}
	
	function cerrar_sesion()
	{
		$this->session->sess_destroy();
		redirect('sesion');
	}

}
?>

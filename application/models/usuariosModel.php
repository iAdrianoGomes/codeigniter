<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuariosModel extends CI_Model {

	public function logarUsuario($email, $senha)
	{
        $this->db->where("userName", $email);
        $this->db->or_where("email", $email);
        $this->db->where("senha", $senha);
        $resultado = $this->db->get("Pessoa")->row_array();
        return $resultado;
	}
}

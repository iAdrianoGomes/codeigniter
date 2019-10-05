<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produtosModel extends CI_Model {

	public function listarTodos()
	{
        $this->db->select("cod, nome, peso, preco");
        $resultado = $this->db->get("Produtos")->result();
        return $resultado;
	}
}

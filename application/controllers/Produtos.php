<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
		echo "<h1>Pagina de produtos</h1>";
		
	}

	public function prod()
	{
		$texto = "Adriano Carvalho";
		$id = "I";
		$dados = array("mensagem" => $texto, "id" => $id);
		$this->load->view('produtos/prodTela', $dados);
	}
	public function listarArray()
	{
		$this->load->model("produtosModel", "Produtos");
		$resultado = $this->Produtos->listarTodos();
		var_dump($resultado);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		echo "<h1>Pagina de produtos</h1>";
		
    }
    
    public function validarLogin(){
        $this->load->model("usuariosModel");
        //essa linha carrega o model de busca do banco
        $usuario = $this->input->post("user");
        //user é o name do input da view
        $senha = $this->input->post("pass");
        //pass é o name do input da view
        if(empty($usuario)){
            echo "ErroEmail";
            die();
        }
        if(empty($senha)){
            echo "ErroSenha";
            die();
        }
        $resultado = $this->usuariosModel->logarUsuario($usuario, $senha); 
        //var_dump($usuario);
        if(empty($resultado)){
            echo "FalhaLogin";
            die();
        }
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

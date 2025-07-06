<?php

include_once __DIR__.'./../modelo/Conexao.php';
include_once __DIR__.'./../modelo/Usuario.php';
include_once __DIR__.'./../modelo/UsuarioDAO.php';

 class CadastroController{

    public function cadastro(){

    $dao = new UsuarioDAO();

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $$usr = new Usuario($nome, $email, $senha);
        $usr = $dao->inserir($usr);
   
    
    }
        else{
            header("Location:rota.php");
        }
    }
}

?>
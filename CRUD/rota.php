<?php
include_once __DIR__. './../Model/Conexao.php';
include_once __DIR__. './../Model/Usuario.php';
include_once __DIR__. './../Model/UsuarioDAO.php';
include_once __DIR__. './../Controllers/AuthController.php';



if (isset($_GET['rota'])){
    $rota=$_GET['rota'];
}else{
    $rota="login";
}
switch($rota){
    case 'login';
         require "login.php";
         break;
         case 'autenticacao';
         $auth=new AuthController();
         $auth->login();
         break;
         case 'home.php':
            break;


         default:
         echo "Rota desconhecida";
}
?>
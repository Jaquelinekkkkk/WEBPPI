<?php
include_once __DIR__ . '/modelo/Conexao.php';
include_once __DIR__ . '/modelo/Usuario.php';
include_once __DIR__ . '/modelo/UsuarioDAO.php';
include_once __DIR__ . '/controlador/AuthController.php';
include_once __DIR__ . '/controlador/cadastroController.php';
session_start();

if (isset($_GET['rota'])) {
    $rota = $_GET['rota'];
} else {
    $rota = "login";
}

switch ($rota) {
    case 'login':
        if (isset($_SESSION['usr'])) {
            header("Location:home.php");
            exit;
        }
        require "login.php";
        break;

    case 'autenticacao':
        $auth = new AuthController();
        $auth->login();
        break;

    case 'cadastro':
        $cadastro = new cadastroController();
        $cadastro->cadastro();
        header("Location:cadastroUsuario.php");
        break;

    case 'home':
        header("Location:home.php");
        break;

    case 'logout':
        session_destroy();
        header("Location:rota.php");
        break;

    default:
        echo "Rota desconhecida";
}
?>
<?php

include_once "Usuario.php";
session_start();
header("refresh:1");

if(isset($_GET['nome']) &&
isset($_GET['email']) &&
isset($_GET['senha'])){
$user=new Usuario($_GET('nome'),$_GET('email'), $_GET('senha'));

}else{
    $user=null;
}
if(!isset($arrayUSER)){
    $arrayUSER=array();
}
if(isset[$_SESSION['userlist']]){
    $arrayUSER=$_SESSION['userlist'];
}
if(isset($user)){
    array_push($arrayUSER, $user);
    $_SESSION['userlist']=$arrayUSER;

}
echo "<table>";
echo "<th> <td> id </td>";
echo "  <td> nome</td>";
echo "  <td> email</td>";
echo "  <td> senha</td>";
echo "</th>";
foreach($arrayUSER as $u){
    echo "<tr> <td>", $u-id, "</td> ";
    echo "<tr> <td>", $u-nome, "</td> ";
    echo "<tr> <td>", $u-email, "</td> ";
    echo "<tr> <td>", $u-senha, "</td> ";
    echo "</tr>";



}

?>
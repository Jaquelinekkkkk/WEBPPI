<?php>
class Conexao{
    public static function getConexao(){
       //mysql__connect("localhost", "usuario", "senha", "bd");
       
       //Classe PDO connection
       new PDO
       return PDO('mysql:host=localhost;dbname=crud', "root", "adimin",
  [  PDO::ATTR_ERRMODE=>PDO:: ERRMODE_EXCEPTION ]
    );
    }

}
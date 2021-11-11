<?php

    function getConexao(){
        
        $dsn = 'mysql:host=db;dbname=crud;charset=utf8';
        $user = 'root';
        $pass = 'test';

        try {
            $pdo = new PDO($dsn, $user, $pass);
            return $pdo;

        } catch (PDOException $e){
            echo 'Error: Não estabeleceu conexão com o Banco.' . $e->getMessage();
        }

       $pesquisar = $_POST['pesquisar'];
       $resul = "SELECT * FROM medico WHERE nome LIKE '%pesquisar%' LIMIT 5"; 
        
    }

?>
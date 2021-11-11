<?php
    include_once './conexao.php';

    $conn = getConexao();

    $data = $conn->query('SELECT * FROM medico');

    foreach ($data as $row){
        print_r($row);
        echo "<br>";
    }

?>
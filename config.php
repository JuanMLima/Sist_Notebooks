<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formnotes';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName)

    if($conexao -> connect_erro){
        echo "erro";
    }
    else{
        echo "conexão funcionando"
    }
?>
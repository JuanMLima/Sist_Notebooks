<?php

    $dbHost = 'ip-host';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'Nome do formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  /*  if($conexao->connect_errno)   
    {
        echo "erro";
    }
else
    {
        echo "conexão funcionando";
    }
?>*/

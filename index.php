<?php
    date_default_timezone_set('America/Sao_Paulo');
    if(isset($_POST['submit']))
    {
        $DateAndTime = date('Y-m-d H:i:s', time());
        include_once('config.php');
        $nomeAluno = $_POST['nomeAluno'];
        $matricula = $_POST['matricula'];
        $nnote = $_POST['nnote'];
        $sala = $_POST['sala'];

        $result = mysqli_query($conexao, "INSERT INTO tabalunos(DateAndTime,nomeAluno,matricula,nnote,sala) VALUES ('$DateAndTime','$nomeAluno','$matricula','$nnote','$sala')");

    }
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Gestão de notebooks Gracinha</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body onload="mostraCarrinho()">
        <div class="container">
            <div class="header clearfix">
                 <h2 align="center">Gestão de notebooks</h2>
                 <br>
                 <br>
        
            <form action="index.php" method="POST" id="formulario">
        </div>

            <div class="from-group ">
                <label><h5>Nome do Aluno:</h5></label>
                <input type="text" id="nomeAluno" name="nomeAluno" class="form-control">
        </div>

            <div class="from-group ">
                <label><h5>Matricula:</h5></label>
                <input type="number" id="matricula" name="matricula" class="form-control">
        </div>

        <div class="from-group ">
            <label><h5>Nº Note:</h5></label>
            <input type="text" id="nnote" name="nnote" class="form-control">
            <br>
    </div>
        <div class="from-group ">
            <label><h5>Sala</h5></label>
            <input type="text" id="sala" name="sala" class="form-control">
            <br>
    </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Adicionar</button>
    </form>
    </div>
    </div>
    <div class="row marketing">
            <div class="col-lg-12">
                <table class="table table-hover">
                    <thread>
                        <tr>
                            <th>Nome</th>
                            <th>Matricula</th>
                            <th>Note</th>
                            <th>Sala</th>
                            <th>Saída</th>
                            <th>Devolução</th>
                        </tr>
                    </thread>
                    <tbody id="resultados"></tbody>
                </table>
            </div>
    </div>

</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <div align="center" ><small>Criado por - Juan Menezes </small></div>

</body>
    
</html>
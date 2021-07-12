<!--ARQUIVO PHP QUE CONECTA COM O BANCO DE DADOS-FortPeças, no PhpMyAdmin-->
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "fortpecas";

    $con = mysqli_connect($servidor,$usuario,$senha,$banco);
    
        if(!$con) die("Falha ao conectar" . mysqli_connect_error());

        //echo"Conexão realizada com sucesso.";
?>
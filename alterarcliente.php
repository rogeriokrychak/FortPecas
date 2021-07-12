<?php
    require "conectar.php";
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $rua = $_POST["rua"];
    $tel = $_POST["telefone"];
    $obs = $_POST["obs"];

    $campos = "nome='$nome',sexo ='$sexo',email='$email',rua='$rua',telefone ='$tel',obs = '$obs'";

    $sql = "UPDATE cliente SET $campos WHERE email ='$email'";

    if(mysqli_query($con, $sql)) {
        echo "Cadastro atualizado com sucesso...";
    } else {
        echo "Erro ao atualizar o cadastro...: " . mysqli_error($con);
    }
    echo "<hr><a href='index.php?link=pesquisacliente.php'>Voltar</a>";
    mysqli_close($con);

?>
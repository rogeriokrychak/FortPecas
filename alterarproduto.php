<?php
    require "conectar.php";
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $obs = $_POST["obs"];

    $campos = "nome='$nome',quantidade ='$quantidade',preco='$preco',obs = '$obs'";

    $sql = "UPDATE produto SET $campos WHERE nome ='$nome'";

    if(mysqli_query($con, $sql)) {
        echo "Cadastro atualizado com sucesso...";
    } else {
        echo "Erro ao atualizar o cadastro...: " . mysqli_error($con);
    }
    echo "<hr><a href='index.php?link=pesquisaproduto.php'>Voltar</a>";
    mysqli_close($con);

?>
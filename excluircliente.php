<?php
    require "conectar.php";

    $cod = $_GET["cod"];

    $sql = "DELETE FROM cliente WHERE codigo=$cod";

    if(mysqli_query($con,$sql)) {
        echo "Exclusão do cadastro com sucesso!!!";
        } else {
            echo "Erro ao excluir cadastro!!! " . mysqli_error($con);
            }
    echo "<hr><a href='index.php?link=pesquisacliente.php'>Voltar</a>";
    mysqli_close($con);

?>
<?php
   include_once "conectar.php";
   $nome = $_POST["nome"];
   $quantidade = $_POST["quantidade"];
   $preco = $_POST["preco"];
   $obs = $_POST["obs"];
   
   $sql = "INSERT INTO produto(nome,quantidade,preco,obs)VALUES('$nome','$quantidade','$preco','$obs')";

   mysqli_query($con,$sql)or die("Erro:".mysqli_error());   
   
   echo "<br><br>Cadastro realizado com sucesso!!!";
   
   mysqli_close($con);
?>
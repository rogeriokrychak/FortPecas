<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="moto-icon-96x96.png" type="image/x-icon">
<link rel="stylesheet" href="estilo.css">
<title>FortPeças-Distribuidora de Peças pra Motos</title>
<style>
        th,td { border: 1px solid black; text-align:center; }
</style>
</head>
<body>
<form action="relatorioproduto.php" method="post"> 
Nome do Produto: <input type="text" name="nome" maxlength="40"></br>
<input type="submit" value="busca">
</form><hr>
</body>
</html>

<?php
	require "conectar.php";
	
	$nome = @$_REQUEST["nome"];
	$sql = "SELECT *FROM produto WHERE nome like '%$nome%' ORDER BY nome ASC";
	$res=mysqli_query($con,$sql);
	
	if(mysqli_affected_rows($con)==0) { // retorna o nº de linhas da pesquisa
		echo "Cadastro não encontrado!!!";
	}
	else{
    echo "<table border=1>
         <tr><th>Nome</th><th>Quantidade</th><th>Preco</th><th>Obs</th></tr>";	 	 
		
  	 while($registro=mysqli_fetch_assoc($res)){
	 
	   $cod = $registro["codigo"];
	   $nome = $registro["nome"];
	   $quantidade = $registro["quantidade"];
	   $preco = $registro["preco"];
	   $obs = $registro["obs"];

    echo "<tr><td>$nome</td><td>$quantidade</td><td>$preco</td><td>$obs</td></tr>";	 	 
	 }
     echo "</table>"; 	 
     echo "<hr><input type='button' value='Imprimir' onclick='javascript:window.print()'>";
     echo "<a href='index.php?link=pesquisaproduto.php' style='text-decoration:none;'>
     <input type='button' value='Voltar'></a>";  
	}
?>
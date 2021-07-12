<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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
<form action="index.php?link=pesquisacliente.php" method="post"> 
<select name="tipo">
 <option value="nome">Nome</option>
 <option value="email">Email</option>
</select>
<input type="text" name="txtpesquisa" required><br>
<input type="submit" value="busca">
</form><hr>
</body>
</html>

<?php
	include_once "conectar.php";
	if(isset($_POST["tipo"])){
   	$tipo = $_POST["tipo"];
   	$pesquisa = $_POST["txtpesquisa"];  
  	 
		$sql = "SELECT *FROM cliente WHERE $tipo like '%$pesquisa%'";
		$res = mysqli_query($con,$sql);

		if(mysqli_affected_rows($con)==0) { // retorna o nº de linhas da pesquisa
			echo "<br><br>Registro não Encontrado!!!";
		}
		else{
			echo "<table><tr><th>Nome</th><th>Email</th><th>Rua</th><th>Telefone</th><th>Editar</th></tr>";
	 		while($registro=mysqli_fetch_assoc($res)){
	 			$cod = $registro["codigo"];
	 			$nome = $registro["nome"];
	 			$sexo = $registro["sexo"];
	 			$email = $registro["email"];
                $rua = $registro["rua"];
	 			$telefone = $registro["telefone"];
	 			$obs = $registro["obs"];
	 			echo "<tr><td>$nome</td><td>$email</td><td>$rua</td><td>$telefone</td>
	 			<td><a href='index.php?link=pesquisacliente.php&cod=$cod'>X</td></tr>"; 
			}
			echo "</table>";
		} 
	}
?>

<?php	
	if(isset($_GET["cod"])) {
		 $cod = $_GET["cod"]; 
   	     $sql = "SELECT *FROM cliente WHERE codigo=$cod";
	
		 $res = mysqli_query($con,$sql);

		 $registro = mysqli_fetch_assoc($res);
	 	 $cod = $registro["codigo"];
	 	 $nome = $registro["nome"];
	 	 $sexo = $registro["sexo"];
	 	 $email = $registro["email"];
         $rua = $registro["rua"];
	 	 $telefone = $registro["telefone"];
   	 	 $obs = $registro["obs"];
		
	    echo "<form action='index.php?link=alterarcliente.php' method='post'>
	    Nome: <input type='text' value='$nome' name='nome' required><br>";
	       
	    if($sexo=='M') {
    	     echo "<input type='radio' name='sexo' value='M' checked>Masculino
	        <input type='radio' name='sexo' value='F'>Feminino<br>";
	    }else {
    	     echo "<input type='radio' name='sexo' value='M'>Masculino
	   		 		<input type='radio' name='sexo' value='F' checked>Feminino<br>";	       	
	    }
	       echo "
          Email: <input type='text' name='email' maxlength='40' value='$email' readonly><br>
          Rua: <input type='text' name='rua' value='$rua'><br>
          Telefone: <input type='text' name='telefone' maxlength='15' value='$telefone'><br>
          Observação:<br>
          <textarea name='obs' rows='5' cols='50'>
          $obs 
          </textarea><br>
          <input type='submit' value='alterar'>
          <a href='index.php?link=excluircliente.php&cod=$cod' style='text-decoration:none;'>
          <input type='button' value='Excluir'></a>
          <input type='button' value='Imprimir' onclick='window.print()'>
          </form>";
       }        		 
  ?>  
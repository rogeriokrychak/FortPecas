<!--ARQUIVO ONDE INICIALIZA TUDO-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="moto-icon-96x96.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <title>FortPeças-Distribuidora de Peças pra Motos</title>
</head>

    <?php $link =@$_GET["link"]; ?>

<body>
    <div id="topo">
        <img src="moto-remove.png" id="img" alt=""><h1>FortPeças-Distribuidora de Peças pra Motos</h1>
    </div>   
    <div id="menu">
        <ul>
            <li><a href="index.php?link=">Home</a></li>
            <li><a href="index.php?link=cliente.html">Cadastrar Clientes</a></li>
            <li><a href="index.php?link=produto.html">Cadastrar Produtos</a></li>
            <li><a href="index.php?link=pesquisacliente.php">Pesquisar Clientes</a></li>
            <li><a href="index.php?link=pesquisaproduto.php">Pesquisar Produtos</a></li>
            <li><a href="index.php?link=relatoriocliente.php">Relatório de Clientes</a></li>
            <li><a href="index.php?link=relatorioproduto.php">Relatório de Produtos</a></li>
        </ul>
    </div>
    <div id="conteudo">
        <?php
            if(!empty($link)) include($link);
            else
            echo"Nossa loja localiza-se no bairro Boqueirão, Curitiba, desde janeiro de 2021.<br>
             A FortPeças tem como objetivo satisfazer as necessidades dos clientes,<br>com foco em venda de peças de motocicletas.<br>Proporcionando
            aos clientes, satisfação, bom atendimento<br>e rapidez nas entregas de nossos produtos."
        ?>
    </div>
    <div id="rodape">
        <h3>Desenvolvido por <img src="icone-github.png" alt="icone-github"><a href="https://github.com/" id="git" target="_blank">Rogerio Krychak</a> - 4°Período - Tecnólogo de Análise e Desenvolvimento de Sistemas - UNIFAESP.</h3>
    </div>
</body>
</html>
<?php 	
	require_once "product.php";
	$pdoConnection = require_once "conexao.php";
	$products = getProducts($pdoConnection);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>E-commerce</title>
    	<script src="https://enterprise.wibson.io/banner.js?siteId=8704cf84-7dd5-4d35-a8ef-1cc4482bd6c8"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="header">
        <a href="index.php">E-commerce</a>
        <nav>
            <ul class="menu">
                <li><a href="login.php">Login</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
            </ul>
        </nav>
    </header>

    <h1>Feira Tecnológica 2021</h1>

    <section class="flex">
        <div>
            <a href="ecommerce.html">
                <img src="imagens/ecommerce1.jpg" alt="E-commerce">
                <p>O que é e-commerce ?</p>
            </a>
        </div>
        <div>
            <a href="saibamais.html">
                <img src="imagens/info2.jpg" alt="Mais Informações">
                <p>Saiba mais sobre o nosso Projeto</p>
            </a>
        </div>
        <div>
            <a href="acessibilidade.html">
                <img src="imagens/libras3.jpg" alt="Acessibilidade">
                <p>Acessibilidade</p>
            </a>
        </div>
    </section>

    <h1>Produtos</h1>

	<div class="container">
		<div class="row">
			<?php foreach($products as $product) : ?>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							 <img src="<?php echo $product['imagem']?>">
							 <h4 class="card-title"><?php echo $product['nome']?></h4>
							 <h6>
							  	R$<?php echo number_format($product['preco'], 2, ',', '.')?>
							 </h6>

							 <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $product['id']?>" class="card-link">Comprar</a>
						</div>
					</div>
				</div>

			<?php endforeach;?>
		</div>
	</div>
	<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  	</div>
  	<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  	<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  	</script>
</body>
</html>

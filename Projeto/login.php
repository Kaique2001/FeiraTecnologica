<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css"/>
    <title>Login</title>
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
   <br/><br/>
   <br/><br/>
    <div>
        <p>
            usuario: admin <br>
            senha: admin
        </p>

         <h1>Login</h1>
         <form action="indexlogin.php" method="POST">
            <input name="txtusuario" type="text" placeholder="Insira o seu usuário">
            <br/><br/>
            <input name="txtsenha" type="password" placeholder="Insira a sua senha">
            <br/><br/>
            <input type="submit" value="Confirmar">
        </form>
    </div>
</body>
</html>

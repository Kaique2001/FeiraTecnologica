<?php
    if(empty($_POST['txtusuario']) || empty($_POST['txtsenha'])) {
        header('Location: formLogin.php');
        exit();
    }

    $Vemail = $_POST['txtusuario'];
    $Vsenha = $_POST['txtsenha'];

    $username = "root";
    $password = "";

    $conn = new PDO('mysql:host=localhost;dbname=loja_site', $username, $password);

    $consulta = $conn-> query("SELECT * FROM usuario WHERE usuario = '$Vemail' AND senha = md5('$Vsenha');");

    if($consulta->rowCount() == 1) {
	    header('Location: index.php');
	    exit();
    }
    else {
        header('Location: login.php');
        exit();
    }
?>

<?php
    include('config.php');
    if(isset($_POST['acao'])){
        $usuario = $_POST['txtemail'];
        $senha = $_POST['txtsenha'];
        $sql = $pdo->prepare("SELECT * FROM tb_usuarios WHERE usuario = ?");
        $sql->execute([$usuario]);

        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            if(password_verify($senha, $info['senha'])){
                $_SESSION['login'] = true;
                $_SESSION['id'] = $info['id'];
                $_SESSION['usuario'] = $info['usuario'];
                header("Location: main.php");
                die();
            }else{
                //Erro
                echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário ou senha incorretos!</p></div>';
            }
        }else{
            //Erro
            echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
        }
    }
    //https://www.mundodaprogramacao.com.br/blog/back-end/sistema-de-login-e-logoff
?>
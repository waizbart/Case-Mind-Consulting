<?php
    session_start();
    if (isset($_POST['submit']) && !empty($_POST['email_cpf'])  && !empty($_POST['senha'])){
        //Acessa
        include_once('config.php');

        $email_cpf = $_POST['email_cpf'];
        $senha = $_POST['senha'];

        $sql_hash = "SELECT senha FROM usuarios WHERE email='$email_cpf' or cpf='$email_cpf'";
        $result_hash = $conexao -> query($sql_hash);
        $hash = mysqli_fetch_assoc($result_hash)['senha'];
        
        print_r($hash);
        $pass = crypt($senha, $hash);

        $sql = "SELECT * FROM usuarios WHERE (email='$email_cpf' or cpf='$email_cpf') and senha='$pass'";
        $result = $conexao -> query($sql);

        $nivel = mysqli_fetch_assoc($result)['nivel'];

        if (mysqli_num_rows($result) < 1 || $nivel == 0)
        {
            unset($_SESSION['email_cpf']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        } 
        else{
            $_SESSION['email_cpf'] = $email_cpf;
            $_SESSION['senha'] = $pass;
            if ($nivel == 999)
            {
                header('Location: tela_admin.php');
            }
            if ($nivel == 1)
            {
                header('Location: tela_comum.php');
            }
        }
    }
    else{
        //Não acessa
        header('Location: login.php');
    }
?>

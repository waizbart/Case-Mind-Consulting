<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nivel = $_POST['nivel'];

        $custo = '04';
        $salt = 'Cf1f11ePArKlBJomM0F6aJ';

        // Gera um hash baseado em bcrypt (blowfish)
        $hash = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');


        $sqlInsert = "UPDATE usuarios SET nome='$nome', cpf='$cpf', 
        email='$email', senha='$hash' WHERE id=$id";

        $result = $conexao->query($sqlInsert);

        if ($nivel == 1)
        {
            header('Location: tela_comum.php');
        }
        elseif($nivel == 999) 
        {
            header('Location: tela_admin.php');
        }

?>
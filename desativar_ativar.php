<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];
        $nivel = $_GET['nivel'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            if($nivel == 1)
            {
                $sqlInsert = "UPDATE usuarios SET nivel=0  WHERE usuarios.id=$id";
                $resultInsert = $conexao->query($sqlInsert);
            }
            if($nivel == 0)
            {
                $sqlInsert = "UPDATE usuarios SET nivel=1  WHERE usuarios.id=$id";
                $resultInsert = $conexao->query($sqlInsert);
            }
        }
    }
    header('Location: tela_admin.php');
   
?>
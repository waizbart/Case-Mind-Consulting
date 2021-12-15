<?php
    include_once('config.php');

    $nivel = $_GET['nivel'];

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $cpf = $user_data['cpf'];
                $email = $user_data['email'];
                $senha = $user_data['senha'];
            }
        }
        else
        {
            if ($nivel == 1)
            {
                header('Location: tela_comum.php');
            }
            elseif($nivel == 999) 
            {
                header('Location: tela_admin.php');
            }
        }
    }
    else
    {
        if ($nivel == 1)
        {
            header('Location: tela_comum.php');
        }
        elseif($nivel == 999) 
        {
            header('Location: tela_admin.php');
        }
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <title>Editar dados</title>
    <style>
        html{
            height: 100%;
        }
        body{
            font-family: 'Montserrat', sans-serif;
            background-image: linear-gradient(#141e30, #243b55);
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px inset #03e9f4;
        }
        legend{
            border: 1px solid #03e9f4;
            padding: 10px;
            text-align: center;
            background: linear-gradient(to right, #03e9f4, #016469);
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #03e9f4;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, #03e9f4, #016469);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background: #016469;
        }
        a{
            position: absolute;
            text-decoration: none;
            color: white;
            border: 3px solid white;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
        }
        a:hover{
            background: linear-gradient(to right, #03e9f4, #016469);
            cursor: pointer;
        }
    </style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(function(){
        $("#submit").click(function(){
            var senha = $("#senha").val();
            var senha2 = $("#senha_ver").val();
            if(senha != senha2){
                event.preventDefault();
                alert("As senhas não são iguais!");
            }
        });
    });
</script>
<body>
    <?php 
        if($nivel == 999){
            echo '<a href="tela_admin.php">Voltar</a>';
        }
        elseif($nivel == 1){
            echo '<a href="tela_comum.php">Voltar</a>';
        }
    ?>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar dados</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value=<?php echo $cpf;?> required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha_ver" id="senha_ver" class="inputUser" required>
                    <label for="senha_ver" class="labelInput">Confirmar senha</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="hidden" name="nivel" value=<?php echo $nivel;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
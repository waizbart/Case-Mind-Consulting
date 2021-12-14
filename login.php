<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 10px;
            padding-bottom: 12px;
            border-radius: 5px;
            color: #fff;
        }
        fieldset{
            border: 5px solid dodgerblue;
            padding: 50px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        input{
            padding: 15px;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;      
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
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
            background: linear-gradient(to right, white, dodgerblue);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <fieldset>
            <legend>Login</legend>
            <form action="testLogin.php" method="POST">
                <input type="text" name="email_cpf" placeholder="Email ou CPF">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
        </fieldset>
    </div>
</body>
</html>
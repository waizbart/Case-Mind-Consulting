<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Site Empresa</title>
    <style>
        html{
            height: 100%;
        }
        body{
            font-family: 'Montserrat', sans-serif;
            background-image: linear-gradient(#141e30, #243b55);
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 5px #03e9f4;
        }
        h1{
            font-family: 'Great Vibes', cursive;
            font-size: 70px;
            text-shadow: 4px 4px black;
        }
        h3{
            font-size: 30px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px inset #03e9f4;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background: linear-gradient(to right, #03e9f4, #016469);
            cursor: pointer;
        }
        .copy{
            transform: translate(0%, 1500%);
        }
        hr{
            box-shadow: 0px 0px 4px #03e9f4;
        }
    </style>
</head>
<body>
    <h1>Mind Consulting</h1>
    <h3><hr width="10%">Sistema de cadastro de clientes<hr width="10%"></h3>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastre-se</a>
    </div>
    <div class="copy">
        <small>Copyright &copy; Guilherme Waizbart 2021</small>
    </div>
</body>
</html>
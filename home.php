<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Site Empresa</title>
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
        }
        h1{
            font-family: 'Great Vibes', cursive;
            font-size: 50px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Guilherme Waizbart</h1>
    <h3>Sistema de cadastro de clientes</h3>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastre-se</a>
    </div>
</body>
</html>
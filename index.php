<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de inicio</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin: 30px;
            background-color: #ebebeb;
        }

        .container {
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
        }

        a {
            background-image: linear-gradient(to right, rgb(248, 74, 95), rgb(255, 177, 78));
            text-decoration: none;
            border: 1px solid #000;
            border-radius: 10px;
            cursor: pointer;
            padding: 10px;
            margin: 10px auto;
            color: #fff;
        }
        

        a:hover {
            background-image: linear-gradient(to right, rgb(240, 60, 81), rgb(245, 165, 61));
        }
        @media(min-width:400px){
            a{
                margin: 10px;
            }
        }
    </style>
</head>

<body>
    <h1>Olá aproveite</h1>
    <h2>Cadastre-se</h2>
    <div class="container">
        <a href="formulario.php">Cadastro</a>
    </div>

</body>

</html>
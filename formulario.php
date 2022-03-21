<?php
    if(isset($_POST['submit'])) {
  // incluindo o arquivo ea configuracao
  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $telefone = $_POST['telefone'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $rua = $_POST['rua'];

  // pegando os user posto e fazemdo  a conecão
  $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email,telefone,senha, cidade,estado,rua)  VALUES ('$nome', '$email', '$telefone', '$senha', '$cidade', '$estado', '$rua')");
  header('Location: sistema.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario eletronico</title>
  <style>
    
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: linear-gradient(to right, rgb(248, 74, 95), rgb(255, 177, 78));
    }
    a{
      height: 20px;
      margin-bottom: 20px;
    }
    div.container {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 10px;
      height: 520px;
      margin-top: 40px;
    }

    form {
      padding: 5px;
      margin: 10px;
      width: 260px;
    }

    fieldset {
      border-radius: 6px;
      border: 1px solid #fff
    }

    legend {
      padding: 2px;
      background-image: linear-gradient(to right, rgb(255, 177, 78), rgb(248, 74, 95));
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }

    div.div_form {
      padding: 2px;
    }

    label {
      font-size: 10px;
      margin-bottom: 0;
      color: #fff;
    }

    input {
      width: 90%;
      margin-top: 5px;
      border-radius: 7px;
      border: none;
      padding: 9px;
    }


    input#submit {
      width: 50%;
      transform: translate(50%);
      color: #fff;
      background-image: linear-gradient(to right, rgb(248, 74, 95), rgb(255, 177, 78));
      cursor: pointer;
    }

    input#submit:hover {
      background-image: linear-gradient(to right, rgb(240, 60, 81), rgb(245, 165, 61));
    }
    a {
      text-align: center;
            float: left;
            width: 45px;
            margin-right: 20px;
            padding: 2px;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            background-image: linear-gradient(to right, rgb(248, 74, 95), rgb(255, 177, 78));
            cursor: pointer;
        }
        .banco{
          width:120px;
        }

        a:hover {
            background-image: linear-gradient(to right, rgb(240, 60, 81), rgb(245, 165, 61));

        }

    @media(min-width:1440px) {
      form {
        width: 400px;
        height: 500px;
      }
      div.container{
        height: 680px;
      }

      fieldset {
        margin: 10px;
        font-size: 20px;
      }

      input {
        padding: 15px;

      }

      label {
        margin: 25px;
        margin-top: 0;
        padding: 15px;
        font-size: 15px;
      }

      input#submit {
        padding: 15px;

      }
    }
  </style>
</head>

<body>
  <main>
    <a href="index.php">Voltar</a>
    <a class='banco'href="sistema.php">Banco de dados</a>

    <div class="container">
      <form action="formulario.php" method="POST">
        <fieldset>
          <legend><strong>Cadastro</strong></legend>
          <div class="div_form">
            <input type="text" name="nome" id="nome" class="inputUser" required />
            <label class="inputUser" for="nome">Nome completo</label>
          </div>
          <div class="div_form">
            <input type="text" name="email" id="email" class="inputUser" required />
            <label class="inputUser" for="email"> Email</label>
          </div>
          <div class="div_form">
            <input type="password" name="senha" id="senha" class="inputUser" required />
            <label class="inputUser" for="senha"> Senha</label>
          </div>
          <div class="div_form">
            <input type="tel" name="telefone" id="telefone" class="inputUser" required />
            <label class="inputUser" for="telefone"> Telefone</label>
          </div>
          <div class="div_form">
            <input type="text" name="cidade" id="cidade" class="inputUser" required />
            <label class="inputUser" for="cidade"> Cidade</label>
          </div>
          <div class="div_form">
            <input type="text" maxlength="3" name="estado" id="estado" class="inputUser" required />
            <label class="inputUser" for="estado"> Estado</label>
          </div>
          <div class="div_form">
            <input type="text" name="rua" id="rua" class="inputUser" required />
            <label class="inputUser" for="rua"> Rua</label>
          </div>
          <input type="submit" name="submit" id="submit" />
        </fieldset>
      </form>
    </div>
  </main>
</body>

</html>
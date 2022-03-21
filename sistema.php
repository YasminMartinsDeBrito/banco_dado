<?php

session_start();
include_once('config.php');

// $logado = $_SESSION['email'];

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM usuario WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM usuario ORDER BY id DESC";
}
$result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(248, 74, 95), rgb(255, 177, 78));
        }

        main{
            top:50px;
        }

        a {
            float: right;
            width: 30px;
            margin-right: 20px;
            padding: 2px;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            background-image: linear-gradient(to right, rgb(248, 74, 95), rgb(255, 177, 78));
            cursor: pointer;
        }

        a:hover {
            background-image: linear-gradient(to right, rgb(240, 60, 81), rgb(245, 165, 61));

        }
        
    </style>
</head>

<body>
    <main>
    <a href="index.php">Voltar</a>
   
        <div class='box'>
            <input type='search' class='input' placeholder="Pesquisar" id='pesquisar'>
            <button onclick="searchData()"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </button>
            
        </div>
        <div class='tabela'>
        <table  >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Rua</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['cidade']."</td>";
                        echo "<td>".$user_data['estado']."</td>";
                        echo "<td>".$user_data['rua']."</td>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
    </main>

</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>

</html>
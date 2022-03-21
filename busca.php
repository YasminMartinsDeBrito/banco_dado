<?php

if(!isset($_GET['email'])){
    header('Location:formulario.php');
    exit;
}

$nome = "%".trim($_GET['email'])."%";
?>
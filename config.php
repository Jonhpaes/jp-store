<?php

    include_once('conexao.php');

    $nome = $_POST['nome'];

    $email = $_POST['email'];

    $senha = $_POST['senha'];

    $sql_cadastro = " INSERT INTO tb_user (nome,email,senha) values ('$nome','$email','$senha')";

    $cadastro = mysqli_query($conector, $sql_cadastro);

    mysqli_close($conector);
?>
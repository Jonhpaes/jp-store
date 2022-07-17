<?php

    $servidor = "Localhost";
    $usuario = "root";
    $senha = "";
    $banco = "db_mysql";


try{

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
    echo "Conexão efetuada com sucesso";

}
catch (\Throwable $th)
{
    echo "Houve uma falha com a conexão" . $th;
}
?>
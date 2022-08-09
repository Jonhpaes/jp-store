<?php

    $servidor = "http://localhost/phpmyadmin/";
    $usuario = "root";
    $senha = "";

    $banco = "db_mysql";
    $tabela = "tb_user";


try{

    $conector = mysqli_connect($servidor, $usuario, $senha, $banco);
    echo "Conexão efetuada com sucesso";

}
catch (\Throwable $th)
{
    echo "Houve uma falha com a conexão" .$th;
}
?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin</title>
</head>
<body>

    <?php

        if(!isset($_SESSION['login'])){
            include('login.php');
        }else{
            include('home.php');
        }

    ?>
    
</body>
</html>
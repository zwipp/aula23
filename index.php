<?php

    session_start();
    if(!$_SESSION['logado']){
        header('location: login.php');
    }
    

    if($_POST){

        //destruir a session quando clicar no botao de sair
        session_destroy();
        //mandar para o login
        header('location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    ola!!!

    <form method="post">
        <input type="hidden" name="logout">
        <button type="submit">Sair</button>
    </form>

</body>
</html>
<?php
    session_start();
    if(
        (!isset($_SESSION['id'])==true)&&
        (!isset($_SESSION['nome'])==true)&&
        (!isset($_SESSION['email'])==true)){
        
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['idade']);
        header('Location: index.html');
    }
    echo "Pagina que nem a Anonymous entra sem acesso";
?>

<a href="sair.php">SAIR</a>
<?php
    #LOCALIZA O IP DO BANCO OU NOME DO COMPUTADOR
    $servidor = "10.58.44.34";
    #NOME DO BANCO
    $banco = "cybercafe";
    #USUARIO DO BANCO
    $usuario = "admin";
    #SENHA DO USUARIO
    $senha = "123";

    #CONEXÃO OU LINK DE ACESSO
    $link = mysqli_connect($servidor,$usuario,$senha,$banco);
    
?>
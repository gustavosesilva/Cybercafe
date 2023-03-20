<?php
    include("anderson.php");
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome=$_POST['nome'];
        $descricao=$_POST['descricao'];
        $estoque = $_POST['estoque'];
    }

?>
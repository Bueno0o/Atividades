<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "usbw";
    $bd = "musicPlayer";

    if(!$conexao = mysqli_connect($host, $usuario, $senha, $bd)){
        echo "Conexão com Banco de dados falhou";
    }
?>
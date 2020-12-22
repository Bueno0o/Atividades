<?php
    include "conexao.php";

    $prontuario = $_POST["prontuario"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $setor = $_POST["setor"];

    $update = "UPDATE bibliotecarios SET nome='$nome',
                                email='$email',
                                telefone='$telefone',
                                setor='$setor' WHERE
                            prontuario='$prontuario'";
    
    mysqli_query($conexao,$update)
        or die(mysqli_error($conexao));

    echo "1";
?>
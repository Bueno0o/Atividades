<?php
    include "conexao.php";

    $prontuario = $_POST["prontuario"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $corredor = $_POST["corredor"];

    $update = "UPDATE livreiro SET nome='$nome',
                                email='$email',
                                telefone='$telefone',
                                corredor='$corredor' WHERE
                            prontuario='$prontuario'";
    
    mysqli_query($conexao,$update)
        or die(mysqli_error($conexao));

    echo "1";
?>
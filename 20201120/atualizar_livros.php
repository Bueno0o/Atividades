<?php
    include "conexao.php";

    $codigo = $_POST["codigo"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $setor = $_POST["setor"];

    $update = "UPDATE livros SET titulo='$titulo',
                                autor='$autor',
                                editora='$editora',
                                setor='$setor' WHERE
                            codigo='$codigo'";
    
    mysqli_query($conexao,$update)
        or die(mysqli_error($conexao));

    echo "1";
?>
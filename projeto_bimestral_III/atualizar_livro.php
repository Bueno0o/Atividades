<?php
    include "conexao.php";

    $codigo = $_POST["codigo"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $corredor = $_POST["corredor"];
    $emprestimo = $_POST["emprestimo"];

    $update = "UPDATE livro SET titulo='$titulo',
                                autor='$autor',
                                editora='$editora',
                                corredor='$corredor',
                                emprestimo='$emprestimo' WHERE
                            codigo='$codigo'";
    
    mysqli_query($conexao,$update)
        or die(mysqli_error($conexao));

    echo "1";
?>
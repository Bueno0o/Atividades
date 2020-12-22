<<<<<<< HEAD
<?php
    include "conexao.php";
    $tabela = $_POST["tabela"];
    $coluna = $_POST["coluna"];
    $id = $_POST["id"];
    $delete = "DELETE FROM $tabela WHERE $coluna='$id'";
    mysqli_query($conexao,$delete)
        or die("Erro: ".mysqli_error($conexao));

    echo "1";
=======
<?php
    include "conexao.php";
    $tabela = $_POST["tabela"];
    $coluna = $_POST["coluna"];
    $id = $_POST["id"];
    $delete = "DELETE FROM $tabela WHERE $coluna='$id'";
    mysqli_query($conexao,$delete)
        or die("Erro: ".mysqli_error($conexao));

    echo "1";
>>>>>>> 11095ee4943815e3c9844fe9e2e234727ce65886
?>
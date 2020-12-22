<?php
    include "conf.php";

    cabecalho();
    $codigo=$_POST['codigo'];
    include "conexao.php";
    $update = "UPDATE livro SET emprestimo='0' WHERE
                            codigo=$codigo";
    
    mysqli_query($conexao,$update)
        or die(mysqli_error($conexao));

    header('Location:index.php');

    rodape();

?>
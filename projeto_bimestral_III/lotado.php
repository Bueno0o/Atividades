<?php
    include "conf.php";

    cabecalho();
    $prontuario = $_SESSION['prontuario'];
    $codigo=$_POST['codigo'];
    include "conexao.php";
    $update = "UPDATE livro SET emprestimo=$prontuario WHERE
                            codigo=$codigo";
    
    $resultado = mysqli_query($conexao,$update)
        or die(mysqli_error($conexao));

    echo '<h2>Agora você esta com '.$resultado['titulo'].'</h2>'   ;

    rodape();

?>
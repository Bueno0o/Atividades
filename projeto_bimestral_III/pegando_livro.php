<?php
include "conf.php";

cabecalho();
$prontuario=$_SESSION['prontuario'];
include "conexao.php";
    $verificando = "SELECT * FROM livro WHERE emprestimo=$prontuario ORDER BY codigo";
    $verificado = mysqli_query($conexao, $verificando);
    if(empty($verificado)){
        $select = "SELECT * FROM livro WHERE emprestimo='0' ORDER BY codigo";
        $resultado = mysqli_query($conexao, $select);
        while($linha=mysqli_fetch_assoc($resultado)){
        echo"<form action='lotado.php' method='post'>
            <div class='produto'>
                <div class='textinho'>
                    <h5>".$linha["titulo"]."</h5>
                    <h7>".$linha["autor"]."</h7>
                    <br />
                    <button type='submit' name='codigo' class='btn btn-primary col-8' value=".$linha["codigo"]." >Pegar</button>
                </div>
            </div>
        </form>";
        }
    }else{
        while($linha=mysqli_fetch_assoc($verificado)){
        echo"<h2>voce ja tem um livro</h2>
        <form action='devolvendo.php' method='post'>
            <div class='produto'>
                <div class='textinho'>
                    <h5>".$linha["titulo"]."</h5>
                    <h7>".$linha["autor"]."</h7>
                    <br />
                    <button type='submit' name='codigo' class='btn btn-primary col-8' value=".$linha["codigo"]." >Devolver</button>
                </div>
            </div>
        </form>
        ";
        }
    }

rodape();

?>
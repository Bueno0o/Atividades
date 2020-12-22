<?php
include "conf.php";

cabecalho();

echo '<div><DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="form_livro.php" method="POST" >
            <div class="row">
                <div class="column-3 column label">
                    <label>Código</label>
                </div>
                <div class="column-9 column input">
                    <input type="number" name="codigo"/>
                </div>
            </div>
            <div class="row">
                <div class="column-3 column label">
                    <label>Titulo</label>
                </div>
                <div class="column-9 column input">
                    <input type="text" name="titulo"/>
                </div>
            </div>
            <div class="row">
                <div class="column-3 column label">
                    <label>Autor</label>
                </div>
                <div class="column-9 column input">
                    <input type="text" name="autor"/>
                </div>
            </div>
            <div class="row">
                <div class="column-3 column label">
                    <label>Editora</label>
                </div>
                <div class="column-9 column input">
                    <input type="text" name="editora"/>
                </div>
            </div>
            <div class="row">
                <div class="column-3 column label">
                    <label>Corredor</label>
                </div>
                <div class="column-9 column input">
                    <input type="text" name="corredor"/>
                </div>
            </div>
            <div class="botao_cadastro">
                <button type="reset">Limpar</button>
                <button type="btn" >Cadastrar</button>
            </div>
        </form>';
        include "conexao.php";
        if(!empty($_POST)){
            $codigo = $_POST["codigo"];
            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $editora = $_POST["editora"];
            $corredor = $_POST["corredor"];
            $emprestimo = 0;

            $query = "insert into livro(codigo, titulo, autor, editora, corredor, emprestimo)
             values('$codigo', '$titulo', '$autor', '$editora', '$corredor', '$emprestimo')";

            mysqli_query($conexao, $query) or die ($query);

            echo "<h1 class = 'text-center'>Cadastrado com sucesso!</h1>";
        }   
    echo '</body>
</html></div>
';

rodape();

?>
<?php
include "conf.php";

cabecalho();

echo '<div><DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="form_livros.php" method="POST" >
            <label>Código de indentificação:</label>
            <input type="number" name="codigo"/><br />
            <label>Titulo:</label>
            <input type="text" name="titulo"/><br />
            <label>Autor:</label>
            <input type="text" name="autor"/><br />
            <label>Editora:</label>
            <input type="text" name="editora"/><br />
            <label>Setor:</label>
            <input type="text" name="setor"/><br />
            <label>Emprestimo:</label>
            <input type="text" name="emprestimo"/><br />caso não tenha sido emprestado, por favor insira o numero 0<br />
            <button type="btn" >Cadastrar</button>
        </form>';
        include "conexao.php";
        if(!empty($_POST)){
            $codigo = $_POST["codigo"];
            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $editora = $_POST["editora"];
            $setor = $_POST["setor"];
            $emprestimo = $_POST["emprestimo"];

            $query = "insert into livros(codigo, titulo, autor, editora, setor, emprestimo)
             values('$codigo', '$titulo', '$autor', '$editora', '$setor', '$emprestimo')";

            mysqli_query($conexao, $query) or die ($query);

            echo "<h1 class = 'text-center'>Cadastrado com sucesso!</h1>";
        }   
    echo '</body>
</html></div>
';

rodape();

?>
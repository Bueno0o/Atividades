<?php
include "conf.php";

cabecalho();

echo '<div><DOCTYPE html>
        <html>
            <head>

            </head>
            <body>
                <form action="form_bibliotecarios.php" method="POST" >
                    <label>Prontuário:</label>
                    <input type="number" name="prontuario"/><br />
                    <label>Nome:</label>
                    <input type="text" name="nome"/><br />
                    <label>Telefone:</label>
                    <input type="number" name="telefone"/><br />
                    <label>Email:</label>
                    <input type="email" name="email"/><br />
                    <label>setor:</label>
                    <input type="number" name="setor"/><br />
                    <button type="btn" >Cadastrar</button>
                </form>';
                include "conexao.php";
                if(!empty($_POST)){
                    $nome = $_POST["nome"];
                    $prontuario = $_POST["prontuario"];
                    $telefone = $_POST["telefone"];
                    $email = $_POST["email"];
                    $setor = $_POST["setor"];

                    $query = "insert into bibliotecarios(prontuario, nome, telefone, email, setor)
                     values('$prontuario', '$nome', '$telefone', '$email', '$setor')";

                    mysqli_query($conexao, $query) or die ($query);

                    echo "<h1 class = 'text-center'>Cadastrado com sucesso!</h1>";
                }   
            echo '</body>
        </html></div>
    ';

rodape();

?>
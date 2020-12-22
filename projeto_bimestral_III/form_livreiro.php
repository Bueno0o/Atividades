<?php
include "conf.php";

cabecalho();

echo '<div><DOCTYPE html>
        <html>
            <head>
            <link href="css/main.css" rel="stylesheet" />
            </head>
            <body>
                <form action="form_livreiro.php" method="POST" >
                    <div class="row">
                        <div class="column-3 column label">
                            <label>Prontuário</label>
                        </div>
                        <div class="column-9 column input">
                            <input type="number" name="prontuario"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-3 column label">
                            <label>Nome</label>
                        </div>
                        <div class="column-9 column input">
                            <input type="text" name="nome"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-3 column label">
                            <label>Telefone</label>
                        </div>
                        <div class="column-9 column input">
                            <input type="number" name="telefone"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-3 column label">
                            <label>Email</label>
                        </div>
                        <div class="column-9 column input">
                            <input type="email" name="email"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-3 column label">
                            <label>Corredor</label>
                        </div>
                        <div class="column-9 column input">
                            <input type="number" name="corredor"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-3 column label">
                            <label>Senha</label>
                        </div>
                        <div class="column-9 column input">
                            <input type="password" name="senha"/>
                        </div>
                        <div class="column-3 column label">
                            <label>Confirmação de senha</label>
                        </div>
                        <div class="column-9 column input">
                            <input type="password" name="conf_senha"/>
                        </div>
                    </div>
                    <div class="botao_cadastro">
                        <button type="reset">Limpar</button>
                        <button type="btn" >Cadastrar</button>
                    </div>
                </form>';
                include "conexao.php";
                if(!empty($_POST)){
                    $senha = $_POST["senha"];
                    $conf_senha = $_POST["conf_senha"];
                    $prontuario = $_POST["prontuario"];
                    $nome = $_POST["nome"];
                    $email = $_POST["email"];
                    $telefone = $_POST["telefone"];
                    $corredor = $_POST["corredor"];
                    if($senha == $conf_senha){
                        $query = "insert into livreiro(prontuario, nome, telefone, email, corredor)
                        values('$prontuario', '$nome', '$telefone', '$email', '$corredor')";

                        mysqli_query($conexao, $query) or die ($query);

                        $usuario = "insert into usuario(id_usuario, email, senha, permissao)
                        values('$prontuario', '$email', '$senha', '2')";

                        mysqli_query($conexao, $usuario) or die ($usuario);

                        echo "<h1 class = 'text-center'>Cadastrado com sucesso!</h1>";
                    }
                }   
            echo '</body>
        </html></div>
    ';

rodape();

?>
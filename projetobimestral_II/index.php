<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SpotyWeb</title>
        <?php include "conexao.php"; ?>
        <a href="conexao.php">conexão</a>
        <h3><a href="index.php">Home</a></h3>
        <hr>
            <label>cadastro</label>
            <a href="php/genero/cadastrogenero.php">Genero</a> ||
            <a href="php/banda/cadastrobanda.php"> banda</a> ||
            <a href="php/musica/cadastromusica.php"> musica</a> ||
            <a href="php/playlist/cadastroplaylist.php"> playlist</a>
        </hr>
        <hr>
            <label>Vizualizar</label>
            <a href="php/genero/vizualizagenero.php">Genero</a> ||
            <a href="php/banda/vizualizabanda.php"> banda</a> ||
            <a href="php/musica/vizualizamusica.php"> musica</a> ||
            <a href="php/playlist/vizualizaplaylist.php"> playlist</a>
        </hr>
        <hr />
    </head>
    <body>
        <center>

        <?php
            include "php/bemvindo.php"
        ?>
        </center>
        <script src = "js/bootstrap.min.js"></script>
    </body>
</html>
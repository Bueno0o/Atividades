<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SpotyWeb</title>
        <script src="../js/jquery-3.5.1.min.js"></script>
        
            <h2><a href="../../index.php">Home</a></h2>
        <hr>
            <label>cadastro</label>
            <a href="cadastrogenero.php">Genero</a> ||
            <a href="../banda/cadastrobanda.php"> banda</a> ||
            <a href="../musica/cadastromusica.php"> musica</a> ||
            <a href="../playlist/cadastroplaylist.php"> playlist</a>
        </hr>
        <hr>
            <label>Vizualizar</label>
            <a href="vizualizagenero.php">Genero</a> ||
            <a href="../banda/vizualizabanda.php"> banda</a> ||
            <a href="../musica/vizualizamusica.php"> musica</a> ||
            <a href="../playlist/vizualizaplaylist.php"> playlist</a>
        </hr>
        <hr />
    </head>
    <body>
    <form action = "cadastrogenero.php" method = "POST">
    <div class="meio">
        <div><h2>Cadastro de gênero</h2></div>
        <div><input type="text" name="genero" placeholder="Digite um genero novo...."></div><br />
        <button type="submit">Cadastrar genero</button>
    </div>
    </form>
    <?php
        if(!empty($_POST)){
            $genero = $_POST["genero"];
            include "../../conexao.php";
            $query = "insert into genero(nome) values('$genero')";
            mysqli_query($conexao, $query) or die ($query);
            echo "<h1 class = 'text-center'>Cadastrado com sucesso!</h1>";
        }
    ?>
    </body>
</html>
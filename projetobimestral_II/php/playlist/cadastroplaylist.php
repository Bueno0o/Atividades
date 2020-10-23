<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SpotyWeb</title>
        <script src="../../js/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function(){
            });
        </script>
        <?php include "../../conexao.php"; ?>
            <h2><a href="../../index.php">Home</a></h2>
        <hr>
            <label>cadastro</label>
            <a href="../genero/cadastrogenero.php">Genero</a> ||
            <a href="../banda/cadastrobanda.php"> banda</a> ||
            <a href="../musica/cadastromusica.php"> musica</a> ||
            <a href="cadastroplaylist.php"> playlist</a>
        </hr>
        <hr>
            <label>Vizualizar</label>
            <a href="../genero/vizualizagenero.php">Genero</a> ||
            <a href="../banda/vizualizabanda.php"> banda</a> ||
            <a href="../musica/vizualizamusica.php"> musica</a> ||
            <a href="vizualizaplaylist.php"> playlist</a>
        </hr>
        <hr />
    </head>
    <body>
    <div class="meio">
        <div><input type="text" id="nomeplaylist" placeholder="nome da playlist...."></div><br />

        <div>
        <?php
            include "../../conexao.php";
            $query = "SELECT musica.nome_musica, musica.id_musica FROM musica";
            $resultado = mysqli_query($conexao, $query) or die ($query);
            while($linha=mysqli_fetch_assoc($resultado)){
                echo '<input type="checkbox" value= '. $linha['id_musica'].'>'.$linha["nome_musica"].'</input><br />';
            }
        ?>
        </div>
        <button type="button" id="botao">Registrar playlist</button>
    </div>
    </body>
</html>
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
    <form method = "POST" action = "vizualizarplaylist.php">
    <div><input type="text" name="filtro" placeholder="nome da playlist...."></div><br />
        <div></div>
        <button>filtrar</button>
        <hr /><iframe width="600" height="350" src="https://www.youtube.com/embed/cqBImCvG9gE" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe><hr />
    </form></div>
    <br/>

    
        
    <?php
        include "../../conexao.php";

        $select = "SELECT musica.nome_musica AS musica, musica.youtube musica_playlist.cod_musica, musica_playlist.cod_playlist,
         playlist.nome_playlist
        FROM musica INNER JOIN musica_playlist INNER JOIN playlist ";

        if(!empty($_POST)){
                $select .= " where (1 = 1)";
                if($_POST["filtro"] != ""){
                    $filtro = $_POST["filtro"];
                    $select .= " AND musica_playlist.nome_playlist = '$filtro' ";
                }
        } 

        $select .= " ORDER BY nome_playlist";
        $resultado = mysqli_query($conexao, $select);

        while($linha = mysqli_fetch_assoc($resultado)){
            echo '<hr /><iframe width="600" height="350" src="https://www.youtube.com/embed/'.$linha['youtube'].'" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen></iframe><hr />';
        };
    ?>
    </body>
</html>
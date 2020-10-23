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
    <form method = "POST" action = "vizualizagenero.php">
        <div><h2>Listar de gênero</h2></div>
        <di><input type = "text" name =" filtro" placeholder = "pesquise pelo nome..." />  
        <button>Pesquisar</button></div><br />
        <?php
            include "../../conexao.php";
            $select = "SELECT genero.nome FROM genero";
            $resultado = mysqli_query($conexao, $select);
        ?>   
    </form>
    <br/>

    <?php
        include "../../conexao.php";

        $select = "SELECT genero.nome FROM genero ";

        if(!empty($_POST)){
                $select .= " where (1 = 1)";
                if($_POST["filtro"] != ""){
                    $filtro = $_POST["filtro"];
                    $select .= " AND genero.nome = '$filtro' ";
                }
        } 

        $select .= " ORDER BY id_genero";
        $resultado = mysqli_query($conexao, $select);

        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<li>". $linha["nome"] ."</li>";
        };
    ?>
</body>
</html>
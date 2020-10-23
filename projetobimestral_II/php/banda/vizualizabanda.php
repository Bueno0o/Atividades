<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SpotyWeb</title>
    <script src="../../js/jquery-3.5.1.min.js"></script>   
    <h2><a href="../../index.php">Home</a></h2>
    <hr>
        <label>cadastro</label>
        <a href="../genero/cadastrogenero.php">Genero</a> ||
        <a href="cadastrobanda.php"> banda</a> ||
        <a href="../musica/cadastromusica.php"> musica</a> ||
        <a href="../playlist/cadastroplaylist.php"> playlist</a>
    </hr>
    <hr>
        <label>Vizualizar</label>
        <a href="../genero/vizualizagenero.php">Genero</a> ||
        <a href="vizualizabanda.php"> banda</a> ||
        <a href="../musica/vizualizamusica.php"> musica</a> ||
        <a href="../playlist/vizualizaplaylist.php"> playlist</a>
    </hr>
    <hr />
</head>
<body>
    <form method = "POST" action = "vizualizabanda.php">
        <div><h2>Listar de gênero</h2></div>
        <di><input type = "text" name =" filtro" placeholder = "pesquise pelo nome..." />  
        <button>Pesquisar</button></div><br />
        <?php
            include "../../conexao.php";
            $select = "SELECT banda.nome_banda FROM banda";
            $resultado = mysqli_query($conexao, $select);
        ?>   
    </form>
    <br/>

    <?php
        include "../../conexao.php";

        $select = "SELECT banda.nome_banda FROM banda ";

        if(!empty($_POST)){
                $select .= " where (1 = 1)";
                if($_POST["filtro"] != ""){
                    $filtro = $_POST["filtro"];
                    $select .= " AND banda.nome_banda = '$filtro' ";
                }
        } 

        $select .= " ORDER BY id_banda";
        $resultado = mysqli_query($conexao, $select);

        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<li>". $linha["nome_banda"] ."</li>";
        };
    ?>
</body>
</html>
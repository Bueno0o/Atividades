<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SpotyWeb</title>
        <script src="../../js/jquery-3.5.1.min.js"></script>
        <?php include "../../conexao.php"; ?>
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
    <form action="cadastrobanda.php" method="POST" >
    <div class="meio">
        <div><input type="text" name="nome_banda" placeholder="Digite uma nova banda...."></div><br />
        <div><select name="genero_selecionado">
            <option value = "">::Selecione um genero::</option>
        <?php
            include "../../conexao.php";
            $select = "SELECT * FROM genero";
            $resultado = mysqli_query($conexao, $select);
            while($linha=mysqli_fetch_assoc($resultado)){
                echo "<option value= '". $linha["id_genero"] ."'>". $linha["nome"] ."</option>";
            }
        ?>
        </select></div><br />
        
        <button>Cadastrar Banda!!</button>
    </div>
    </form>
    <?php
        if(!empty($_POST)){
            $nome_banda = $_POST["nome_banda"];
            $cod_genero = $_POST["genero_selecionado"];
            include "../../conexao.php";    
            $query = "insert into banda(nome_banda, cod_genero) values('$nome_banda', '$cod_genero')";
            mysqli_query($conexao, $query) or die ($query);
            echo "<h1 class = 'text-center'>Cadastrado com sucesso!</h1>";
        }
    ?>
    </body>
</html>
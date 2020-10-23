<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SpotyWeb</title>
        <script src="../../js/jquery-3.5.1.min.js"></script>
        <script>
            $("document").ready(function(){
                $("#banda").attr('disabled','disabled');
                $("#genero").change(function(){
                    id_genero = $("#genero").val();
                    $.get("processo.php",{"id_genero":id_genero},function(mensagem){
                        $each($_SESSION["id_banda"], function(indice, valor){
                            $('#banda').append('<option>', {value:$_SESSION["id_genero"], text:$_SESSION["nome_banda"]});
                        })
                    });
                });
            });
        </script>
        <?php include "../../conexao.php"; ?>
            <h2><a href="../../index.php">Home</a></h2>
        <hr>
            <label>cadastro</label>
            <a href="../genero/cadastrogenero.php">Genero</a> ||
            <a href="../banda/cadastrobanda.php"> banda</a> ||
            <a href="cadastromusica.php"> musica</a> ||
            <a href="../playlist/cadastroplaylist.php"> playlist</a>
        </hr>
        <hr>
            <label>Vizualizar</label>
            <a href="../genero/vizualizagenero.php">Genero</a> ||
            <a href="../banda/vizualizabanda.php"> banda</a> ||
            <a href="vizualizamusica.php"> musica</a> ||
            <a href="../playlist/vizualizaplaylist.php"> playlist</a>
        </hr>
        <hr />
    </head>
    <body>
    <div class="meio">
    <div><input type="text" id="musica" placeholder="Nome da musica...."></div><br />

        <div id="bangjump"></div>
        
        <div><select id="genero" >
                <option value="">::nome genero::</option>
                <?php
                    include "../../conexao.php";
                    $select = "SELECT * FROM genero";
                    $resultado = mysqli_query($conexao, $select);
                    while($linha=mysqli_fetch_assoc($resultado)){
                        echo "<option value= '". $linha["id_genero"] ."'>". $linha["nome"] ."</option>";
                    }
                ?>
        </select></div><br />

        <div><select id="banda" >
            <option value="">::Selecione a banda::</option>
        </select></div><br />
     
        <div><textarea id="codigo" name="codigo" placeholder="Digite aqui" ></textarea></div><br />

        <div><button type="btn" id="botao">Cadastrar Banda!!</button></div>
    </div>
    </body>
</html>
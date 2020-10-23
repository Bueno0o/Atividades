 <?php
    include "../../conexao.php";
    $_SESSION["nome_banda"] = array();
    $_SESSION["id_banda"] = array();
    $id_genero = $_GET["id_genero"];
    $select = "SELECT banda.nome_banda, banda.id_banda, banda.cod_genero 
    FROM banda ON banda.cod_genero = $id_genero";
    $resultado = mysqli_query($conexao, $select);
    while($linha=mysqli_fetch_assoc($resultado)){
        $_SESSION["nome_banda"] = $linha["nome_banda"];
        $_SESSION["id_banda"] = $linha["id_banda"];
    }
 ?>
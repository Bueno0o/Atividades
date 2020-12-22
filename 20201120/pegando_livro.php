<?php
include "conf.php";

cabecalho();

include "conexao.php";

echo'
    <form action="pegando_livro.php" method="POST" >
    <label>insira seu prontuário: </label><input type="number" name="prontuario_in" /><br />
    <label>Diga qual livro deseja pegar: </label><select name="livro_selecionado">';  
                $select = "SELECT * FROM livros";
                $resultado = mysqli_query($conexao, $select);
                while($linha=mysqli_fetch_assoc($resultado)){
                if($linha["emprestimo"]==0){
                    echo "<option value = '". $linha["codigo"] ."'>". $linha["titulo"] ."</option>";
                }
                }
        echo '</select><br/>
        <button>Pegar</button>
    </form>
    ';
    if(!empty($_POST)){        

        if($_POST["prontuario_in"]!=""){
            $prontuario_in = $_POST["prontuario_in"];
            $livro_selecionado = $_POST["livro_selecionado"]; 
            $query = "UPDATE livros SET emprestimo = '$prontuario_in'
            WHERE codigo = '$livro_selecionado'";

            mysqli_query($conexao, $query) or die ($query);
            
            echo "<h1 class = 'text-center'>Cadastrado com sucesso!</h1>";
        }
    }

rodape();

?>
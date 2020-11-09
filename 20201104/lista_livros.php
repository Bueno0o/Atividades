<?php
include "conf.php";

cabecalho();

include "conexao.php";

        $select = "SELECT * FROM livros ORDER BY codigo";
        $resultado = mysqli_query($conexao, $select);

        echo '<table border="1">
        <tr>
            <th>Codigo</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Setor</th>
            <th>Emprestimo</th>
        </tr>';
        
        while($linha=mysqli_fetch_assoc($resultado)){
            
            echo "
                <tr>
                    <td>". $linha["codigo"] ."</td>
                    <td>". $linha["titulo"] ."</td>
                    <td>". $linha["autor"] ."</td>
                    <td>". $linha["editora"] ."</td>
                    <td>". $linha["setor"] ."</td>";
                    if($linha["emprestimo"]==0){
                        
                        echo "<td>Livro disponível || acesse <a href='pegando_livro.php'>aqui</a> para pega-lo </td></tr>";
                    }else{
                        echo "<td>livro pego por ". $linha["emprestimo"] ."</td></tr>";
                    }
        }
        echo '</table>';

rodape();

?>
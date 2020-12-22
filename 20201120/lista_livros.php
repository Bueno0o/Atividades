<?php
include "conf.php";

cabecalho();
include "conexao.php";

        $select = "SELECT * FROM livros ORDER BY codigo";
        $resultado = mysqli_query($conexao, $select);

        echo '<div id="msg"></div>
        <table border="1"><thead>
        <tr>
            <th>Codigo</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Setor</th>
            <th>Remover e Alterar</th>
            <th>Emprestimo</th>
        </tr></thead>';
        $i=0;
        while($linha=mysqli_fetch_assoc($resultado)){
            
            echo "
                <tbody><tr>
                    <td>". $linha["codigo"] ."</td>
                    <td>". $linha["titulo"] ."</td>
                    <td>". $linha["autor"] ."</td>
                    <td>". $linha["editora"] ."</td>
                    <td>". $linha["setor"] ."</td>
                    <td>
                        <button class='btn btn-warning alterar' value='".$linha["codigo"]."' data-toggle='modal' 
                            data-target='#modal'>Alterar</button>                       
                        <button class='btn btn-danger remover' value='".$linha["codigo"]."'>Remover</button> 
                    </td>";
                    if($linha["emprestimo"]==0){
                        
                        echo "<td>Livro disponível || acesse <a href='pegando_livro.php'>aqui</a> para pega-lo </td></tr>";
                    }else{
                        echo "<td>livro pego por ". $linha["emprestimo"] ."</td></tr>";
                    }
            $i++;
        }
        echo '</tbody></table>';
        if($i=0){
            echo "<tr><td colspan='4'>Não há livros cadastrados</td></tr>";
        }
        echo '</tbody></table>';
        $titulo = "Alterar Livros";
        $nome_form = "alterar_livros.php";
        include "modal.php";
        
        include "scripts_livros.php";
rodape();

?>
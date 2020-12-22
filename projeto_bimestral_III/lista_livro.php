<?php
include "conf.php";

cabecalho();
include "conexao.php";

        $select = "SELECT * FROM livro ORDER BY codigo";
        $resultado = mysqli_query($conexao, $select);

        echo '<div id="msg"></div>
        <table border="1"><thead>
        <tr>
            <th>Codigo</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Corredor</th>
            <th>Emprestimo</th>';
            if($_SESSION['permissao']=='2'){
                echo'<th>Alterar</th>';
            }if($_SESSION['permissao']=='1'){
                echo'<th>Remover e Alterar</th>';
            }
            echo'</tr></thead>';
        $i=0;
        while($linha=mysqli_fetch_assoc($resultado)){
            
            echo "
                <tbody id='tbody_livro'><tr>
                    <td>". $linha["codigo"] ."</td>
                    <td>". $linha["titulo"] ."</td>
                    <td>". $linha["autor"] ."</td>
                    <td>". $linha["editora"] ."</td>
                    <td>". $linha["corredor"] ."</td>
                    <td>". $linha["emprestimo"] ."</td>
                    <td>";
                    if($_SESSION['permissao']=='2'){
                        echo"<button class='btn btn-warning alterar' value='".$linha["codigo"]."' data-toggle='modal' data-target='#modal'>Alterar</button>";                       
                    }if($_SESSION['permissao']=='3'){
                        echo"<button class='btn btn-warning alterar' value='".$linha["codigo"]."' data-toggle='modal' data-target='#modal'>Alterar</button>
                        <button class='btn btn-danger remover' value='".$linha["codigo"]."'>Remover</button>";
                    }     
                    echo"</td>";
            $i++;
        }
        echo '</tbody></table>';
        if($i=0){
            echo "<tr><td colspan='4'>Não há livros cadastrados</td></tr>";
        }
        echo '</tbody></table>';
        $titulo = "Alterar Livro";
        $nome_form = "alterar_livro.php";
        include "modal.php";
        
        include "scripts_livro.php";
rodape();

?>
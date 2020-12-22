<?php
include "conf.php";

cabecalho();
include "conexao.php";
    if($_SESSION['permissao']=='1'){
        $select = "SELECT * FROM alunos ORDER BY prontuario";
        $resultado = mysqli_query($conexao, $select);
    }if($_SESSION['permissao']=='3'){
        $prontuario=$_SESSION['prontuario'];
        $select = "SELECT * FROM alunos WHERE prontuario=$prontuario ORDER BY prontuario";
        $resultado = mysqli_query($conexao, $select);
    }
        echo '<div id="msg"></div>
        <table border="1"><thead>
        <tr>
            <th>Prontuário</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>';
            if($_SESSION['permissao']=='1'){
                echo'<th>Remover e Alterar</th>';
            }
        echo'</tr></thead>';
        $i=0;
        
            while($linha=mysqli_fetch_assoc($resultado)){
                
                echo "
                    <tbody id='tbody_alunos'><tr>
                        <td>". $linha["prontuario"] ."</td>
                        <td>". $linha["nome"] ."</td>
                        <td>". $linha["email"] ."</td>
                        <td>". $linha["telefone"] ."</td>";
                        if($_SESSION['permissao']=='1'){
                            echo"<td>
                            <button class='btn btn-warning alterar' value='".$linha["prontuario"]."' data-toggle='modal' 
                                data-target='#modal'>Alterar</button>                       
                            <button class='btn btn-danger remover' value='".$linha["prontuario"]."'>Remover</button> 
                            </td>";
                        }
                    echo"</tr>";
                    $i++;
            }
            if($i=0){
                echo "<tr><td colspan='4'>Não há alunos cadastrados</td></tr>";
            }
            echo '</tbody></table>';
            $titulo = "Alterar Alunos";
            $nome_form = "alterar_alunos.php";
            include "modal.php";
            
            include "scripts_alunos.php";
        
rodape();

?>
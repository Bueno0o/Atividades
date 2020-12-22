<?php
include "conf.php";


cabecalho();
include "conexao.php";
        $prontuario=$_SESSION['prontuario'];
        if($_SESSION['permissao']=='1'){
            $select = "SELECT * FROM livreiro ORDER BY prontuario";
            $resultado = mysqli_query($conexao, $select);
        }if($_SESSION['permissao']=='2'){
            $select = "SELECT * FROM livreiro WHERE prontuario=$prontuario ORDER BY prontuario";
            $resultado = mysqli_query($conexao, $select);
        }

        echo '<div id="msg"></div>
        <table border="1" ><thead>
        <tr>
            <th>Prontuário</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Corredor</th>';
            if($_SESSION['permissao']=='1'){
                echo'<th>Remover e Alterar</th>';
            }
            echo'</tr></thead>';
        $i=0;
        while($linha=mysqli_fetch_assoc($resultado)){
            
            echo "
                <tbody id='tbody_livreiro'><tr>
                    <td>". $linha["prontuario"] ."</td>
                    <td>". $linha["nome"] ."</td>
                    <td>". $linha["email"] ."</td>
                    <td>". $linha["telefone"] ."</td>
                    <td>". $linha["corredor"] ."</td>";
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
        echo "<tr><td colspan='4'>Não há bibliotecários cadastrados</td></tr>";
    }
    echo '</tbody></table>';
    $titulo = "Alterar Bibliotecários";
    $nome_form = "alterar_livreiro.php";
    include "modal.php";
        
    include "scripts_livreiro.php";
rodape();

?>
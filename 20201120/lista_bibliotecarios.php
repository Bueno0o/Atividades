<?php
include "conf.php";


cabecalho();
include "conexao.php";

        $select = "SELECT * FROM bibliotecarios ORDER BY prontuario";
        $resultado = mysqli_query($conexao, $select);

        echo '<div id="msg"></div>
        <table border="1" id="bibliotecairos"><thead>
        <tr>
            <th>Prontuário</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Setor</th>
            <th>Remover e Alterar</th>
        </tr></thead>';
        $i=0;
        while($linha=mysqli_fetch_assoc($resultado)){
            
            echo "
                <tbody><tr>
                    <td>". $linha["prontuario"] ."</td>
                    <td>". $linha["nome"] ."</td>
                    <td>". $linha["telefone"] ."</td>
                    <td>". $linha["email"] ."</td>
                    <td>". $linha["setor"] ."</td>
                    <td>
                        <button class='btn btn-warning alterar' value='".$linha["prontuario"]."' data-toggle='modal' 
                            data-target='#modal'>Alterar</button>                       
                        <button class='btn btn-danger remover' value='".$linha["prontuario"]."'>Remover</button> 
                    </td>
                </tr>";
                $i++;
        }
    if($i=0){
        echo "<tr><td colspan='4'>Não há bibliotecários cadastrados</td></tr>";
    }
    echo '</tbody></table>';
    $titulo = "Alterar Bibliotecários";
    $nome_form = "alterar_bibliotecarios.php";
    include "modal.php";
        
    include "scripts_bibliotecarios.php";
rodape();

?>
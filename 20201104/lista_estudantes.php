<?php
include "conf.php";

cabecalho();

include "conexao.php";

        $select = "SELECT * FROM estudantes ORDER BY prontuario";
        $resultado = mysqli_query($conexao, $select);

        echo '<table border="1">
        <tr>
            <th>Prontuário</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>';
        
        while($linha=mysqli_fetch_assoc($resultado)){
            
            echo "
                <tr>
                    <td>". $linha["prontuario"] ."</td>
                    <td>". $linha["nome"] ."</td>
                    <td>". $linha["telefone"] ."</td>
                    <td>". $linha["email"] ."</td>
                </tr>";
        }
        echo '</table>';

rodape();

?>
<?php
header('Content-Type: application/json');

include "conexao.php";

$select = "SELECT * FROM livreiro";

if(isset($_GET["id"])){
    $prontuario = $_GET["id"];
    $select .= " WHERE prontuario='$prontuario'";
}

$select .= " ORDER BY nome";

$resultado = mysqli_query($conexao,$select)
    or die(mysqli_error($conexao));

while($linha = mysqli_fetch_assoc($resultado)){
    $matriz[]=$linha;
}

echo json_encode($matriz);
?>
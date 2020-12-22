<?php
header('Content-Type: application/json');

include "conexao.php";

$select = "SELECT * FROM livro";

if(isset($_GET["id"])){
    $codigo = $_GET["id"];
    $select .= " WHERE codigo='$codigo'";
}

$select .= " ORDER BY titulo";

$resultado = mysqli_query($conexao,$select)
    or die(mysqli_error($conexao));

while($linha = mysqli_fetch_assoc($resultado)){
    $matriz[]=$linha;
}

echo json_encode($matriz);
?>
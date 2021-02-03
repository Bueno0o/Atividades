<?php
	include "const_cookie.php";
?>

<!DOCTYPE html>

<html lang="pt-BR">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta charset="UTF-8" />
		<title>Form de login</title>
		<link rel="stylesheet" href="css/estilos.css" type="text/css" />
	</head>
	
	<body>
		<table border="1">
			<thead>
				<td>Nome do cookie</td>
				<td>Valor</td>
				<td>Excluir</td>
			</thead>
			<tbody>
				<?php
				$i = 0;
					foreach($_COOKIE as $nome => $valor){
						echo"<tr><td>$nome</td><td>$valor</td>
						<td><input type='checkbox' name='exclui' value='$nome' /></td></tr>
						";
						$i++;		
					}	
				?>
			</tbody>
		</table>
		<button type="btn" name="excluir" value="excluir">Excluir</button>
		<a href="index.php">Voltar</a>
		<script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/MD5.js"></script>
		<script src="js/login.js"></script>
		<noscript>Seu navegador não suporta JavaScript</noscript>
		<script>
			$(function(){
				$('button[name="excluir"]').click(function(){
					nome = $('input[name="exclui"]:checked').val();
					cokies.set( nome, "", time()-1,'/');
					$("input[value='"+ nome +"']").closest("tr").remove();
				});
			});
		</script>
	</body>
	
</html>
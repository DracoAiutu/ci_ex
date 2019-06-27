<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
</head>
<body>
	<h1> <?php echo $pagina; ?></h1>
	<table border="1">	
<tr> 
	<th>
		nome
	</th>
	<th>deletar</th>
	<th>editar</th>
</tr>
<?php foreach ($usuarios as $key => $value) {
?>
	
	<tr>
		<td><?php echo $value->nome;  ?></td>
		<td><a href="<?php echo base_url('/index.php/usuario/deletar')."/".$value->id ?>">deletar</a></td>
		<td><a href="<?php echo base_url('/index.php/usuario/editar')."/".$value->id ?>">editar</a></td>

	</tr>
<?php } ?>
	</table>
	<button name="button" ><a href="<?php echo base_url('/index.php/usuario/criar')?>">criar</a></button>
	<h1>Falta o editar e mudar o test para form</h1>
</body>
</html>
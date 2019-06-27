<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php  echo $title; ?> </title>
</head>
<body>
	
<form method="POST" action="<?php echo base_url('/index.php/usuario/atualizar').'/'.$usuarios->id ?>">
  name:<br>
  <input type="text" name="nome" value="<?php echo $usuarios->nome; ?>"><br>
 <input type="submit" value="Editar"> 
</form>

</body>
</html>


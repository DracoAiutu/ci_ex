<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php  echo $title;?> </title>
</head>
<body>
	
<form method="GET" action="<?php echo base_url('/index.php/usuario/salvar')?>">
  name:<br>
  <input type="text" name="nome"><br>
 <input type="submit" value="Submit">
</form>

</body>
</html>




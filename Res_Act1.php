<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad</title>
	<?php 
//htmlspe
if(isset($_POST['submit'])){//to run PHP script on submit
	if(isset($_POST['check3'])){
	 print('CORRECTO');
	 print ('<br /><a href="Actividades1.html">Volver</a>');

	}
	else{
		echo "ERROR<br />";
	 	print ('<br /><a href="Actividades1.html">Volver</a>');
	}
}
?>
</head>
<body>


</body>
</html>
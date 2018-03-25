<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 1</title>
</head>
<body>
<?php 
//htmlspe
if(isset($_POST['submit'])){//to run PHP script on submit
if(isset($_POST['check4'])){
// Loop to store and display values of individual checked checkbox.
 print('CORRECTO');
 print ('<br /><a href="Actividades1.html">Volver</a>');
}
else{
	# code...
	echo "ERROR</br>";
 	print ('<br /><a href="Actividades1.html">Volver</a>');

}
}
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad </title>
</head>
<body>
<?php 
//htmlspe
if(isset($_POST['submit'])){//to run PHP script on submit
if(isset($_POST['check2'])){
// Loop to store and display values of individual checked checkbox.

 echo "CORRECTO</br>";
 print ('<br /><a href="Actividades3.html">Volver</a>');

}
else{
	# code...
	echo "ERROR</br>";
 	print ('<br /><a href="Actividades3.html">Volver</a>');

}
}
?>

</body>
</html>
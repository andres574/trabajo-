<?php 

$base= new PDO("mysql:host=localhost;dbname=Taller", "root", "");

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");


				$sql="INSERT INTO usuarios(informacion) VALUES (?)";
				$result=$base->prepare($sql);

var d=[$_POST["nombre"], $_POST["apellido"], $_POST["telefono"]];


				$result->execute(array( JSON.stringify(d)));
				echo "holiii";
				

 ?>
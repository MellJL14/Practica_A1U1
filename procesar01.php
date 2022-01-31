<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario ejercicio2</title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">
      			Informacion de la persona 
    		</p>
  		</div>
	</section>

	<section class="section is-medium columns">

  		<div class="column"></div>

  		<div class="column is-two-fifths">
			

  			<?php
	
                $Nombre = $_POST['Nombre'];
				$ApellidoPaterno = $_POST['ApellidoPaterno'];
				$ApellidoMaterno = $_POST['ApellidoMaterno'];
                $Cargo = $_POST['Cargo'];
                $RFC = $_POST['RFC'];
                $CURP = $_POST['CURP'];
                $Domicilio = $_POST['Domicilio'];
                $Telefono = $_POST['Telefono'];
                $CorreoElectronico = $_POST['CorreoElectronico'];
                $Sexo = $_POST['Sexo'];
                $FechadeNacimiento= $_POST['FechadeNacimiento'];
                $EstadoCivil = $_POST['EstadoCivil'];
                $Escolaridad = $_POST['Escolaridad'];
                $ReferenciaFamiliar = $_POST['ReferenciaFamiliar'];
                $Observaciones = $_POST['Observaciones'];

                



				echo "<h1 class='is-subtitle'>";
				echo "Hola " .$Nombre. ".";
				echo "<br>Tus Apellidos son: " . $ApellidoPaterno .$ApellidoMaterno. " ";
				echo "<br>Tu Cargo es : " . $Cargo;
                echo "<br>Tu RFC es: " . $RFC;
                echo "<br>Tu CURP es : " . $CURP;
                echo "<br>Tu Domicilio es : " . $Domicilio; 
                echo "<br>Tu Numero telefonico es : " . $Telefono;
                echo "<br>Tu Correo Electronico es : " . $CorreoElectronico;
                echo "<br>Tu Sexo es : " . $Sexo;
                echo "<br>Tu Fecha de nacimiento es : " . $FechadeNacimiento;
                echo "<br>Tu Estado Civil  es : " . $EstadoCivil;
                echo "<br>Tu Grado Escolar es : " . $Escolaridad;
                echo "<br>Tu Referencia Familiar es : " . $ReferenciaFamiliar;
                echo "<br>Observaciones: " . $Observaciones;

				echo "</h1>";
			?>


		</div>

		<div class="column"></div>

	</section>

</body>
</html>
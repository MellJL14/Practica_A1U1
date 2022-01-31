<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario ejercicio2 </title>
    <!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
    <section class ="hero is-primary">
        <div class ="hero-body">
            <p class = "title">
        Informacion de la persona
</p>
</div>
</section>

<section class="section is-medium colums">

<div class="column"></div>

<div class= "column is-two-fifths">
    <form action="procesar01.php " method="post">

    <div>
        <label> Nombre:</label>
        <input class="input is-primary" type="text" name="Nombre": required>
</div>

<div>
    <label>Apeliido Paterno </label>
    <input class="input is-primary" type="text" name="ApellidoPaterno": required>
</div>

<div>
    <label>Apeliido Materno </label>
    <input class="input is-primary" type="text" name="ApellidoMaterno": required>
</div>

<div>
    <label> Cargo</label>
    <input class ="input is-primary" type="string" name="Cargo" rrequiered>
</div>

<div>
<label> RFC</label>
    <input class ="input is-primary" type='string' name="RFC" rrequiered>
    </div>

    <div>
<label> CURP</label>
    <input class ="input is-primary" type='string' name="CURP" rrequiered>
    </div>
    <div>

    <label> Domicilio</label>
    <input class ="input is-primary" type='string' name="Domicilio" rrequiered>
    </div>

    <div>
<label> Telefono</label>
    <input class ="input is-primary" type="number" name="Telefono" rrequiered>
    </div>

    <div>
<label> Correo Electronico</label>
    <input class ="input is-primary" type="string" name="CorreoElectronico" rrequiered>
    </div>

    <div>
<label> Sexo</label>
    <input class ="input is-primary" type="bool" name="Sexo" rrequiered>
    </div>

    <div>
<label> Fecha de Nacimiento</label>
    <input class ="input is-primary" type="string" name="FechadeNacimiento" rrequiered>
    </div>

    <div>
<label> Estado Civil</label>
    <input class ="input is-primary" type="chr" name="EstadoCivil" rrequiered>
    </div>

    <div>
<label> Escolaridad</label>
    <input class ="input is-primary" type="string" name="Escolaridad" rrequiered>
    </div>
   
    <div>
<label> Referencia Familiar </label>
    <input class ="input is-primary" type="string" name="ReferenciaFamiliar" rrequiered>
    </div>

    <div>

    <label> Observaciones</label>
    <input class ="input is-primary" type="string" name="Observaciones" rrequiered>
  
    </div>

    <div>
					<input class="button is-primary" type="submit" value="Enviar">
				</div>
			</form>
		</div>

		<div class="column"></div>

	</section>
</body>
</html>
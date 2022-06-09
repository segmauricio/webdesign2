<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Formulario c/ PHP</title>
  </head>
  <body>
    <h2>Formulario con PHP</h2>
    <br>
    <!--Cuerpo principal del formulario-->
      <div id="form" class="container">
        <form action="formulario.php" method="post">
          <div class="form-outline mb-4">
            <label for="name">Nombre:</label> <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
          </div>
          <div class="form-outline mb-4">
            <label for="lastname">Apellido:</label> <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido">
          </div>
          <div class="form-outline mb-4">
            <label for="bday">Fecha de nacimiento:</label> <input type="date" name="fenac" class="form-control" placeholder="Ingrese su fecha de nacimiento"><br>
          </div>
          <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
          <button class="btn-danger" name="borrar">Cerrar sesión</button>
        </form>
      </div>
  </body>
</html>
<!--Iniciamos sesion-->
<?php
  session_start();
  if (@!$_SESSION['personas']) {
     $_SESSION['personas']=[];
   }
  array_push($_SESSION['personas'], $_POST);
?>

<!--Establecemos los controles para los formularios-->
<?php
  //Creamos variables para contar errores
  $errores=[];
  $error=0;
  if(isset($_REQUEST["enviar"])){
    //Verificiacion del nombre
    if($_POST['nombre']==""){
      $error++;
      array_push($errores, "El nombre no debe estar vacio");
    }
    //Verificiacion del apellido
    if($_POST['apellido']==""){
      $error++;
      array_push($errores, "El apellido no debe estar vacío");
    }
    //Verificacion de la fecha de nacimiento
    $nfecha=date_parse($_POST['fenac']);
    if($nfecha['error_count']){
      $error++;
      array_push($errores, "La fecha debe ser válida");
    }
    //Imprimimos los errores
    if($error>0){
      print_r($errores);
      echo "<br>La solicitud no pudo ser validada. Intente de nuevo";
    } else{ //Si no hay errores presentes, se imprime la tabla
    echo 	"<table  class="."table table-striped".">
		<div class="."container".">
			<thead>
			  	<tr id="."tab_head".">
				    <th>Apellido</th>
				    <th>Nombre</th>
				    <th>Fecha de Nacimiento</th>
				</tr>
			</thead>
			<tbody id="."tab_datos".">
				<tr>";
			for ($i=0; $i<count($_SESSION['personas']) ; $i++) {
				echo "<td>".@$_SESSION['personas'][$i]['apellido']."</td><td>".$_SESSION['personas'][$i]['nombre']."</td><td>".$_SESSION['personas'][$i]['fenac']."</td>"."</tr>";
			}
			echo "</tbody>
		</div>
	</table>";
  }
}
  //Boton para eliminar la sesion actual
  if (isset($_REQUEST["borrar"])) {
    session_destroy();
  }
?>

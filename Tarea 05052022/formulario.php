<?php
session_start();
?>
<?php
  if (!$_SESSION['personas']) {
	   $_SESSION['personas']=[];
   }
	array_push($_SESSION['personas'], $_POST);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="body">
      </div>
      <div class="">
        <form action="formulario.php" method="post">
          <input type="text" name="nombre" value="" placeholder="Ingrese su nombre">
          <br>
          <br>
          <input type="text" name="apellido" value="" placeholder="Ingrese su apellido">
          <br>
          <br>
          <input type="text" name="fenac" value="<?php echo date("Y-m-d")?>" placeholder="Ingrese su fecha de nacimiento">
          <br>
          <br>
          <button type="submit">Enviar</button>
          <button type="button" name="borrar">Eliminar sesion</button>
        </form>
      </div>
    </div>
  </body>

  <?php
    //Creamos variables para contar errores
    $errores=[];
    $error=0;
    //Comprobamos que una variable tenga valor
    if ($_POST){
      //Verificiacion del nombre
      if ($_POST['nombre']==""){
        $error++;
        array_push($errores, "El nombre no debe estar vacío");
      }
      //Verificacion del apellido
      if ($_POST['apellido']==""){
        $error++;
        array_push($errores, "El apellido no debe estar vacío");
      }
      //Verificacion de la fecha de nacimiento
      $nfecha=date_parse($_POST['fenac']);
      if ($nfecha['error_count']){
        $error++;
        array_push($errores, "La fecha debe ser válida");
      }
      //Imprimimos los errores
      if($error>0){
        print_r($errores);
        echo "<br><br>Ingrese datos válidos.";
      }
      }else{
        echo 	"<table  class="."table table-striped".">
    		          <div class="."container".">
      		             <thead>
      			  	             <tr id="."tab_cabe".">
      				                   <th>Apellido</th>
      				                   <th>Nombre</th>
      				                   <th>F. Nacimiento</th>
      				               </tr>
      			             </thead>
      			             <tbody id="."tab_datos".">
      				           <tr>";
      			                for ($i=0; $i<count($_SESSION['personas']) ; $i++) {
      				                    echo "<td>".$_SESSION['personas'][$i]['apellido']."</td><td>".$_SESSION['personas'][$i]['nombre']."</td><td>".$_SESSION['personas'][$i]['fenac']."</td>"."</tr>";
      			                }
      			             echo "</tbody>
      		            </div>
      	         </table>";
      }
  ?>
</html>

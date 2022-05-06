<?php
    //Creamos variables para contar errores
    $errores=[];
    $error=0;
    //Comprobamos que una variable tenga valor
    if ($_POST){
      //Verificiacion del nombre
      if ($_POST['nombre']==""){
        $error++;
        array_push($errores, "El nombre no debe estar vacio");
      }
      //Verificacion del apellido
      if ($_POST['apellido']==""){
        $error++;
        array_push($errores, "El apellido no debe estar vacio");
      }
      //Verificacion de la fecha de nacimiento
      $nfecha=date_parse($_POST['fenac']);
      if ($nfecha['error_count']){
        $error++;
        array_push($errores, "La fecha debe ser valida");
      }
      //Imprimimos los errores
      if($error>0){
          print_r($errores);
      }
    }else{
      echo "La solicitud no pudo ser procesada.";
    }
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
</html>

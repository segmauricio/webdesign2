<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
<h3>Ingrese el nombre de la nueva ciudad a agregar</h3>
<form class="" action="index.php" method="post">
  <div class="form-group">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
  <label for="ciudad">Ciudad</label><br>
  </div>
  <div class="form-group col-md-4">
  <input type="text" class="form-control"  name="ciudad" value="<?php if ($data['ciudad']){ echo $data['ciudad'];} ?>"><br>
</div>
    <button type="submit" class="btn btn-warning" name="enviar">Enviar</button> <a href="index.php"><a href="index.php" name="volver" class="btn btn-primary">Volver</a>
  <form class="" action="index.php" method="post">



</form>
</form>

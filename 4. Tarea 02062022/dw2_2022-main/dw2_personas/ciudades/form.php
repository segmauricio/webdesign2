<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
<h3>Ciudad</h3>
<form class="" action="index.php" method="post">
  <div class="form-group">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
  <label for="ciudad">Ciudad</label><br>
  </div>
  <div class="form-group col-md-4">
  <input type="text" class="form-control"  name="ciudad" value="<?php if ($data['ciudad']){ echo $data['ciudad'];} ?>"><br>
</div>
  <button type="submit" class="btn btn-outline-warning" name="enviar">Enviar</button> <ahref="index.php"><a href="index.php" name="volver" class="btn btn-outline-warning">Volver</a>
  <form class="" action="index.php" method="post">



</form>
</form>

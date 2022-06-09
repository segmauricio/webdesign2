<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
<h3>Formulario de personas</h3>
<form class="" action="index.php" method="post">
  <div class="form-group col-md-6">
  <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
<div class="form-group col-md-6">
  <label for="cin">Documento de identidad: </label><br>
  <input type="text" class="form-control" name="cin" value="<?php if ($data['cin']){ echo $data['cin'];} ?>"><br>
  </div>
  <div class="form-group col-md-6">
  <label for="apellido">Apellido: </label><br>
  <input type="text" class="form-control" name="apellido" value="<?php if ($data['apellido']){ echo $data['apellido'];} ?>"><br>
</div>
<div class="form-group col-md-6">
  <label for="nombre">Nombre: </label><br>
  <input type="text" class="form-control" name="nombre" value="<?php if ($data['nombre']){ echo $data['nombre'];} ?>"><br>
</div>
<div class="form-group col-md-6">
  <label for="fenac">Fecha de nacimiento: </label><br>
  <input type="text" class="form-control" name="fenac" value="<?php if ($data['fenac']){ echo $data['fenac'];} ?>"><br>
</div>
<div class="form-group col-md-6">
  <label for="email">Email: </label><br>
  <input type="text" class="form-control" name="email" value="<?php if ($data['email']){ echo $data['email'];} ?>"><br>
</div>
<div class="form-group col-md-6">
  <label for="ciudad_id">Elije tu ciudad: </label><br>
  <select class="form-control" name="ciudad_id">
  </div>
    <?php
    while ($d=mysqli_fetch_array($ciudades))
    {
      $sel='';
      if ($data['ciudad_id'] & ($d['id']==$data['ciudad_id']) )
        { $sel="selected='true'";}
      echo "<option  value='".$d['id']."'".$sel.">".$d['ciudad']."</option>";
    }
     ?>
  </select>
  <br>
  <button type="submit" class="btn btn-warning" name="enviar">Enviar</button> <a href="index.php"><a href="index.php" name="volver" class="btn btn-primary">Volver</a>
  <form class="" action="index.php" method="post">
    </form>
</form>

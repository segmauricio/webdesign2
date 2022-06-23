<?php
if ($res){
$data=mysqli_fetch_array($res);
}
 ?>
 <br>
 <div class="container h-100">
     <div class="row h-100 justify-content-center align-items-center">
         <div class="col-10 col-md-8 col-lg-6">
          <!-- Form -->
            <form class="form-example" action="index.php" method="post">
              <h1 class="text-center">Formulario de personas</h1>
              <p class="text-center">Ingrese los datos de la persona a agregar.</p>
              <!-- Input fields -->
              <div class="form-group">
                <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
                <label for="cin">Documento de identidad: </label><br>
                <input type="text" class="form-control" name="cin" value="<?php if ($data['cin']){ echo $data['cin'];} ?>"><br>
              </div>
              <div class="form-group">
                <label for="apellido">Apellido: </label><br>
                <input type="text" class="form-control" name="apellido" value="<?php if ($data['apellido']){ echo $data['apellido'];} ?>"><br>
              </div>
              <div class="form-group">
                <label for="nombre">Nombre: </label><br>
                <input type="text" class="form-control" name="nombre" value="<?php if ($data['nombre']){ echo $data['nombre'];} ?>"><br>
              </div>
              <div class="form-group">
                <label for="fenac">Fecha de nacimiento: </label><br>
                <input type="text" class="form-control" name="fenac" value="<?php if ($data['fenac']){ echo $data['fenac'];} ?>"><br>
              </div>
              <div class="form-group">
                <label for="email">Email: </label><br>
                <input type="text" class="form-control" name="email" value="<?php if ($data['email']){ echo $data['email'];} ?>"><br>
              </div>
              <div class="form-group">
                <label for="ciudad_id">Elije tu ciudad: </label><br>
                <select class="form-control" name="ciudad_id">
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
              </div>
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <button type="submit" class="btn btn-warning" name="enviar">Enviar</button> <a href="index.php">
                </li>
                <li class="nav-item">
                  <a href="index.php" name="volver" class="btn btn-primary">Volver</a>
                </li>
              </ul>
              <br>
          </form>
<!-- Form end -->
        </div>
    </div>
</div>

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
              <h1 class="text-center">CIUDAD</h1>
              <p class="text-center">Ingrese el nombre de la nueva ciudad a agregar.</p>
              <!-- Input fields -->
              <div class="form-group">
                <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
                <label for="ciudad">Ciudad</label><br>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="ciudad" value="<?php if ($data['ciudad']){ echo $data['ciudad'];} ?>"><br>
              </div>
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <button type="submit" class="btn btn-warning" name="enviar">Enviar</button>
                </li>
                <li class="nav-item">
                  <a href="index.php"><a href="index.php" name="volver" class="btn btn-primary">Volver</a>
                </li>
                <br>
              </form>
  <!-- Form end -->
          </div>
      </div>
  </div>

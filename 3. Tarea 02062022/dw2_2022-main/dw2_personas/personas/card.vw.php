<div class="row justify-content-center align-items-center">
  <div class="col-sm-6">
    <div class="card text-dark bg-light mb-3 border-dark mb-3">
      <div class="card-body text-success">
        <h5 class="card-title">
          <?php echo $data['apellido'].", ".$data['nombre']; ?>
        </h5>
        <p class="card-text">Nº de CI: <?php echo $data['cin']; ?> </p>
        <p class="card-text ">Edad: <?php echo edadPersona($data['fenac']); ?></span></a></p>
        <p class="card-text">Localidad: <?php echo nombreCiudad($link,$data['ciudad_id']); ?> </p>
        <div class="text-center">
          <a href="<?php echo "index.php?mod=edit&id=".$data["id"]; ?>" class="btn btn-outline-secondary"  >Editar</a>
          <a href="<?php echo "index.php?mod=delete&id=".$data["id"]; ?>" class="btn btn-outline-danger">Borrar</a>
          <a href="<?php echo "json.php?&id=".$data["id"]; ?>" target="new" class="btn btn-outline-primary">JSON</a>
        </div>
      </div>
    </div>
  </div>
</div>

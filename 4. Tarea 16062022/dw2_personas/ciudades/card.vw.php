<div class="row justify-content-center align-items-center">
  <div class="col-sm-6">
    <div class="card text-dark bg-light mb-3 border-dark mb-3">
      <div class="card-body text-success">
        <h5 class="card-title">
            <?php echo $data['id'].", ".$data['ciudad']; ?>
        </h5>
        <div class="card-body">
          <p class="card-text">Nº de ID: <?php echo $data['id']; ?> </p>
          <p class="card-text">Ciudad: <?php echo $data['ciudad']; ?> </p>
          <div class="text-center">
            <a href="<?php echo "index.php?mod=edit&id=".$data["id"]; ?>" class="btn btn-outline-secondary"  >Editar</a>
            <a href="<?php echo "index.php?mod=delete&id=".$data["id"]; ?>" class="btn btn-outline-danger">Borrar</a>
            <a href="<?php echo "json.php?&id=".$data["id"]; ?>" target="new" class="btn btn-outline-primary">JSON</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

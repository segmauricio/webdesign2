
<div class="card">
  <div class="card-header">
    <?php echo $data['id']."-) ".$data['ciudad']; ?>
  </div>
  <div class="card-body" >
    <div class="row">
    <div class="col">
      <p class="font-weight-bold">
      <p class="font-weight-bold">Nº de ID: <?php echo $data['id']; ?> </p>
      <p class="card-text">Ciudad: <?php echo $data['ciudad']; ?> </p>
      </p>
    </div>
    <div class="col">
      <a href="<?php echo "index.php?mod=edit&id=".$data["id"]; ?>" class="btn btn-outline-secondary"  >Editar</a>
      <a href="<?php echo "index.php?mod=delete&id=".$data["id"]; ?>" class="btn btn-outline-danger">Borrar</a>
    </div>
    </div>
  </div>
</div>

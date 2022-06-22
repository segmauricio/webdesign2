<?php
$res=mostrarTodos($link);
 ?>
 <br>
 <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
        <h3>PERSONAS</h3>
      </li>
      <li class="nav-item">
         <a id="btnNew" href="index.php?mod=new" class="btn btn-warning" disabled>Nuevo +</a>
      </li>
      <li class="nav-item">
        <a href="json.php" target="new" class="btn btn-primary">JSON +</a>
      </li>
 </ul>
 <br>
<?php
  while ($data=mysqli_fetch_array($res)){
   include 'card.vw.php';
    //echo "<tr><td>".$data['cin'].
    //"</td><td>".$data['apellido']."</td><td>".$data['nombre']."</td><td>".$data['fenac']."</td><td>".$data['email']."</td><td>".nombreCiudad($link,$data['ciudad_id'])."</td><td><a href='index.php?mod=edit&id=".$data["id"]."'>editar</a></td><td><a href='index.php?mod=delete&id=".$data["id"]."'>borrar</a></td></tr>";
  }
?>

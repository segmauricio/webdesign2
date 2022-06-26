<?php
$res=mostrarTodos($link);
 ?>
 <br>
 <ul class="nav nav-pills nav-fill">
     <li class="nav-item">
       <h3>PERSONAS</h3>
     </li>
     <li class="nav-item">
       <a id="btnNew" href="index.php?mod=new" class="btn btn-warning">Nuevo <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
      <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
      </svg></a>
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

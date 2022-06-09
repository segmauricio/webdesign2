<?php
$res=mostrarTodos($link);
 ?>
 <div class="text-left">
     <div class="row">
       <div class="col">
         <H3 class="font-weight-light">PERSONAS</h3>
       </div>
       <div class="col">
         <a id="btnNew" href="index.php?mod=new" class="btn btn-warning" disabled class="text-left">Nuevo +</a>
      </div>
   </div>
 </div>
<?php
  while ($data=mysqli_fetch_array($res)){
   include 'card.vw.php';
    //echo "<tr><td>".$data['cin'].
    //"</td><td>".$data['apellido']."</td><td>".$data['nombre']."</td><td>".$data['fenac']."</td><td>".$data['email']."</td><td>".nombreCiudad($link,$data['ciudad_id'])."</td><td><a href='index.php?mod=edit&id=".$data["id"]."'>editar</a></td><td><a href='index.php?mod=delete&id=".$data["id"]."'>borrar</a></td></tr>";
  }
?>

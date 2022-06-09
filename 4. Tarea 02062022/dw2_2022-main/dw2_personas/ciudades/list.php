<?php
$res=mostrarCiudades($link);
 ?>
 <div class="container">
     <div class="row">
       <div class="col">
         <h3>CIUDADES</h3>
       </div>
       <div class="col">
         <a id="btnNew" href="index.php?mod=new" class="btn btn-warning" disabled>Nuevo +</a>
      </div>
   </div>
</div>
<?php
while ($data=mysqli_fetch_array($res))
{
include 'cardC.vw.php';
}
?>

<?php
$res=mostrarCiudades($link);
 ?>
 <br>
<ul class="nav nav-pills nav-fill">
     <li class="nav-item">
       <h3>CIUDADES</h3>
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
while ($data=mysqli_fetch_array($res))
{
include 'cardC.vw.php';
}
?>

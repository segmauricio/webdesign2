<?php
$res=mostrarCiudades($link);
 ?>
<br>
<ul class="nav nav-pills nav-fill">
     <li class="nav-item">
       <h3>CIUDADES</h3>
     </li>
     <li class="nav-item">
       <a id="btnNew" href="index.php?mod=new" class="btn btn-warning">Nuevo
       <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
       <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
       </svg></a>
     </li>
     <li class="nav-item">
       <a href="<?php echo "json.php"?>" target="new" class="btn btn-primary">JSON +</a>
     </li>
</ul>
<?php
while ($data=mysqli_fetch_array($res))
{
include 'cardC.vw.php';
}
?>

<?php
if ($res){
  $data=mysqli_fetch_array($res);
}

 ?>
 <div class="container" style="border-style: solid; border-radius: 10px; margin-top: 5%; margin-bottom: 5%">
<p>
  Los datos no fueron procesados correctamente.
  <?php

  for($i=0; $i<count($errores); $i++){
    echo"<br>-".$errores[$i];
  }
   ?>
 </p>
 </div>

<?php
if ($res){
$data=mysqli_fetch_array($res);
}
?>
<br>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
         <!-- Form -->
           <form class="form-example" action="index.php" method="post">
             <h1 class="text-center">Formulario de personas</h1>
             <p class="text-center">Ingrese los datos de la persona a agregar.</p>
             <!-- Input fields -->
             <div class="form-group">
               <input type="hidden" name="id" value="<?php if ($data['id']){ echo $data['id'];  } else { echo -1;} ?>">  <br>
               <label for="cin">Documento de identidad: </label><br>
               <input type="text" class="form-control" name="cin" value="<?php if ($data['cin']){ echo $data['cin'];} ?>"><br>
             </div>
             <div class="form-group">
               <label for="apellido">Apellido: </label><br>
               <input type="text" class="form-control" name="apellido" value="<?php if ($data['apellido']){ echo $data['apellido'];} ?>"><br>
             </div>
             <div class="form-group">
               <label for="nombre">Nombre: </label><br>
               <input type="text" class="form-control" name="nombre" value="<?php if ($data['nombre']){ echo $data['nombre'];} ?>"><br>
             </div>
             <div class="form-group">
               <label for="fenac">Fecha de nacimiento: </label><br>
               <input type="text" class="form-control" name="fenac" value="<?php if ($data['fenac']){ echo $data['fenac'];} ?>"><br>
             </div>
             <div class="form-group">
               <label for="email">Email: </label><br>
               <input type="text" class="form-control" name="email" value="<?php if ($data['email']){ echo $data['email'];} ?>"><br>
             </div>
             <div class="form-group">
               <label for="ciudad_id">Elije tu ciudad: </label><br>
               <select class="form-control" name="ciudad_id">
                 <?php
                 while ($d=mysqli_fetch_array($ciudades))
                 {
                   $sel='';
                   if ($data['ciudad_id'] & ($d['id']==$data['ciudad_id']) )
                     { $sel="selected='true'";}
                   echo "<option  value='".$d['id']."'".$sel.">".$d['ciudad']."</option>";
                 }
                  ?>
               </select>
               <br>
               <ul class="nav nav-pills nav-fill">
                 <li class="nav-item">
                   <button type="submit" name="enviar" class="btn btn-warning" style=" margin-right: 5px">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                   <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/></svg></button>
                 </li>
                 <li class="nav-item">
                   <a class="btn btn-primary" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                   <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/></svg></a>
                 </li>
               </ul>
               <br>
           </form>
 <!-- Form end -->
         </div>
     </div>
 </div>

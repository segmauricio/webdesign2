<?php
require('../libs/conex.php');
require('../libs/ciudades.lib.php');
$link=conectar();
//print_r($_POST);
//print_r($_GET);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Formulario</title>
          <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
     <?php
     	include('../libs/menu.php')
      ?>
      <div class="container">
     <?php
     $errores=[];
     $error=0;
     //FILTER_SANITIZE_FULL_SPECIAL_CHARS

     if ($_POST)
     {
       if ($_POST['ciudad']=="")
       {
         $error++;
         array_push($errores,"El campo de ciudad no debe estar vacío.");
       }
   }
      if (!($_POST) && !($_GET))
      {
        include('list.php');
      }
        elseif ($_GET['mod']=="new")
        {
          if ($error>0) {

              include("error.php");
          }
          include('form.php');
        }
        elseif ($_GET['mod']=="edit")
        {
        if ($_GET['id'])
        {
          $res=mostrarCiudad($link,$_GET['id']);
          include('form.php');
        }
        }
        elseif ($_GET['mod']=="delete")
        {
            if ($_GET['id']) {
              borrarCiudad($link,$_GET);
              include('list.php');
              // code...
            }
        }elseif ($_POST) {
          // code...
          if($error==0){
            if ($_POST['id']==-1)
            {
              $salida= agregarCiudad($link,$_POST);
              include('list.php');
              //echo $salida;
            } elseif ($_POST['id']!='') {
              $salida= editarCiudad($link,$_POST);
              include('list.php');
            }
          }else{
            include('error.php');
            include('form.php');
          }
        }
      ?>
      </div>
   </body>
 </html>

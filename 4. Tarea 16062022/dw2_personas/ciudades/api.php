<?php
// CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: X-Requested-With");
// cors fin
require_once('../libs/conex.php');
require('../libs/ciudades.lib.php');
require('../libs/personas.lib.php');
$link=conectar();
//print_r($_POST);
//print_r($_GET);


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Ciudades</title>
          <link rel="stylesheet" href="/dw2_2022/node_modules/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
     <?php
     	//include('../libs/menu.php')
      ?>
      <div class="container">
        
<?php
if (!($_POST) && !($_GET))
{
  include('json.php');
}
  elseif ($_GET['mod']=="new")
  {
    $ciudades=mostrarCiudades($link);
    //include('form.php');
  }
  elseif ($_GET['mod']=="edit")
  {
  if ($_GET['id'])
  {
    //$ciudades=mostrarCiudades($link);
    //$res=mostrarPorId($link,$_GET['id']);
    include('json.php?id'.$_GET['id']);
  }
  }
  elseif ($_GET['mod']=="delete")
  {
      if ($_GET['id']) {
        borrarCiudad($link,$_GET);
        //include('list.php');
        // code...
      }

  }elseif ($_POST) {
    // code...
    print_r($_POST);
    if ($_POST['id']==-1)
    {
      $salida= agregarCiudad($link,$_POST);
      //include('list.php');
      //echo $salida;
    } elseif ($_POST['id']!='') {
      $salida= editarCiudad($link,$_POST);
      //include('list.php');
    }
  }
?>

function cargarPersonas() // carga datos de prueba al array Persona
{
console.log("cargando datos...");
url=rutaJSON+"personas/json.php";
$.ajaxSetup({
  async: false
  });
$.getJSON(url, function(data, status){
  localStorage.setItem('personas',JSON.stringify(data));
  console.log(JSON.parse(localStorage.getItem('personas')));
});
personas=JSON.parse(localStorage.getItem('personas'));
if (personas==null)
{
  personas=[];
}
}
function getPersonasById(pid)
    {
        for (var i = 0; i < personas.length; i++) {
            if (personas[i].id==pid)
                {
                    return i;
                }
        }
        return -1;
    }
function borrarPersona(e)
{

  let idxe=e.target.attributes["data-id"].value;
  /*
  personas.splice(idxe,1);
  persistirRegistros();
*/
url=rutaJSON+"personas/api.php?mod=delete&id="+idxe;
$.get(url,function(data, status){
  cleanStorage();
});
iniciarApp();
showListPersonas();
}

function guardarPersona()
{
  error="";
  errores="";
  flag=false;
  if(document.getElementById('cin').value == ""){
    if(flag==false){
      error="<div class='container' style='border-style: solid; border-radius: 10px; margin-top: 5%; margin-bottom: 5%'><p>Datos no fueron procesados correctamente.<br><div id='errores'></div></p></div>";
    }
    errores=errores+"- El número de documento no puede estar vacío.<br>";
  }
  if(document.getElementById('nombre').value == ""){
    if(flag==false){
      error="<div class='container' style='border-style: solid; border-radius: 10px; margin-top: 5%; margin-bottom: 5%'><p>Datos no fueron procesados correctamente.<br><div id='errores'></div></p></div>";
    }
    errores=errores+"- El nombre no puede estar vacío.<br>";
  }
  if(document.getElementById('apellido').value == ""){
    if(flag==false){
      error="<div class='container' style='border-style: solid; border-radius: 10px; margin-top: 5%; margin-bottom: 5%'><p>Datos no fueron procesados correctamente.<br><div id='errores'></div></p></div>";
    }
    errores=errores+"- El apellido no puede estar vacío.<br>";
  }
  if(document.getElementById('fenac').value == ""){
    if(flag==false){
      error="<div class='container' style='border-style: solid; border-radius: 10px; margin-top: 5%; margin-bottom: 5%'><p>Datos no fueron procesados correctamente.<br><div id='errores'></div></p></div>";
    }
    errores=errores+"- La fecha no puede estar vacía.<br>";
  }
    if(error==""){
      let p={
        "id":document.getElementById('id').value,
        "nombre": document.getElementById('nombre').value,
        "apellido":document.getElementById('apellido').value,
        "cin":document.getElementById('cin').value,
        "fenac":document.getElementById('fenac').value,
        "ciudad_id":document.getElementById('ciudades_id_personas').value }

      //
      //console.log(p);
      url=rutaJSON+"personas/api.php";
      //console.log(url);
      $.post(url,p,
      function(data, status){
        cleanStorage();
        //alert("Data: " + data + "\nStatus: " + status);
      });

      //
      //cleanStorage();
      iniciarApp();
      showListPersonas();
    }else{
      document.getElementById('error').innerHTML=error;
      document.getElementById('errores').innerHTML=errores;
    }
}

document.getElementById('personasList').onclick=showListPersonas;
document.getElementById('ciudadesList').onclick=showListCiudades; // asigno la funcion limpiarTabla al evento click del boton
personas=[]; // declara el array
ciudades=[];
rutaJSON="http://127.0.0.1/4. Tarea 16062022/dw2_personas/";

window.onload=iniciarApp();

function deleteErrors(){
  document.getElementById('error').innerHTML="";
}

///Procesar formulario
function showListCiudades(){
    console.log("showListCiudades");
    //mostrarCiudades();
    $('#datosCiudades').show();
    $('#datosPersonas').hide();
    $('#formPersonas').hide();
    $('#formCiudades').hide();
    $('#error').hide();
    deleteErrors();
    cleanStorage();
}

function showListPersonas(){
    //mostrarPersonas();
    console.log("showListPersonas");
    $('#datosCiudades').hide();
    $('#datosPersonas').show();
    $('#formPersonas').hide();
    $('#formCiudades').hide();
    $('#error').hide();
    deleteErrors();
    cleanStorage();
}

function showFormCiudades(){
    console.log("showFormCiudades");
    $('#datosCiudades').hide();
    $('#datosPersonas').hide();
    $('#formPersonas').hide();
    $('#formCiudades').show();
    $('#error').hide();
        if(error!=""){
          $('#error').show();
          console.log("Errores mostrandose");
        }
}

function showFormPersonas(){
    console.log("showFormPersonas");
    $('#datosCiudades').hide();
    $('#datosPersonas').hide();
    $('#formPersonas').show();
    $('#formCiudades').hide();
        if(error!=""){
          $('#error').show();
          console.log("Errores mostrandose");
        }
}

function iniciarApp()
  {
    console.log("inicializando app");
    $('#formCiudades').hide();
    $('#formPersonas').hide();
    $('#datosCiudades').hide();
    $('#datosPersonas').hide();
    $('#error').hide();
    cleanStorage();
    getCiudades();
    cargarPersonas();
    mostrarPersonas();
    mostrarCiudades();
    //showListPersonas();
  }
  function cleanStorage () {
    localStorage.setItem('personas', null);
    localStorage.setItem('ciudades', null);
  }

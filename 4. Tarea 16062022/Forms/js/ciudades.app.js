function getCiudades(){
    console.log("cargando datos...");
    url=rutaJSON+"ciudades/json.php";
    $.ajaxSetup({
        async: false
        });
    $.getJSON(url, function(data, status){
      localStorage.setItem('ciudades',JSON.stringify(data));
      console.log(JSON.parse(localStorage.getItem('ciudades')));
    });
    ciudades=JSON.parse(localStorage.getItem('ciudades'));
    if (ciudades==null)
    {
        ciudades=[];
    }
}
function getCiudadById(cid)
    {
        for (var i = 0; i < ciudades.length; i++) {
            if (ciudades[i].id==cid)
                {
                    return i;
                }
        }
        return -1;
    }
function getCiudadNameById(cid)
    {
        for (var i = 0; i < ciudades.length; i++) {
          machi = ciudades[i].ciudad;
            if (ciudades[i].id==cid)
                {
                  machi = ciudades[i].ciudad;
                    return machi;
                }
        }
    }
function saveCiudades(){
  error="";
    if(document.getElementById('ciudad').value != ""){
      let p={
          "id":document.getElementById('idx').value,
          "ciudad": document.getElementById('ciudad').value
          }
        //
        console.log("save ciudades");
        url=rutaJSON+"ciudades/api.php";
       console.log(url);
        $.post(url,p,
        function(data, status){
          cleanStorage();
        });
        showListCiudades();
    }
    else{
      error="<div class='container' style='border-style: solid; border-radius: 10px; margin-top: 5%; margin-bottom: 5%'><p>Los datos no fueron procesados correctamente.<br>- El campo no debe estar vacío.</p></div>";
      document.getElementById('error').innerHTML=error;
      showFormCiudades();
    }
}

function deleteCiudades(e)
    {
    console.log("Borrando ciudades...");
    let idxe=e.target.attributes["data-id"].value;
    url=rutaJSON+"ciudades/api.php?mod=delete&id="+idxe;
    //console.log(url);
    $.get(url,function(data, status){
        cleanStorage();
  });
  iniciarApp();
  showListCiudades();
  }

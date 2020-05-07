$("#municipio").ready(function(){
    let municipio=$('#municipio').val();
    loadComunas(municipio);
});

function loadComunas(municipio){
    $.get(`comunas/${municipio}`, function(res,sta){
        $("#comuna").empty();
        res.forEach(element => {
            $("#comuna").append(`<option value=${element.id}>${element.nombre_com}</option>`);
        });
        if(res.length===1)  $("#comuna").prop('disabled',true);
        else $("#comuna").prop('disabled',false);
   }).done(function(){
    let comuna=$('#comuna').val();
    loadSectores(municipio,comuna);
   });
}

function loadSectores(municipio,comuna){
    $.get(`sectores/${municipio}/${comuna}`, function(res,sta){
        $("#sector").empty();
        //console.log(res);
        res.forEach(element => {
            let tipo= element.tipo===1? "Barrio":"Vereda";
            $("#sector").append(`<option value=${element.id}> ${tipo}: ${element.nombre_sect} </option>`);
        });
   });
}

$("#municipio").change(function(event){
    loadComunas(event.target.value);
});
$("#comuna").change(function(event){
    let municipio=$("#municipio").val();
    loadSectores(municipio,event.target.value);
 });


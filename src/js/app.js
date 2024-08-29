mostarRegistros();

function mostarRegistros(){
    var url_php="http://localhost/BBINCOCRUD/controller/TareaApi.php?all='true'";
    //Peticion AJAX
    $.ajax({
        type:"GET",
        url: url_php,
        //data:data_form,
        dataType:"json",
        async: true
    })
    .done(function ajaxDone(res){
            // Seleccionar el tbody
            const tbody = document.querySelector("#idbody");

            let contenido = "";
            res.forEach(dato => {
                if(dato.completada=="1"){
                    completado="YES"
                }else{
                    completado="NO"
                }
                contenido += `<tr>
                    <td>${dato.id}</td>
                    <td>${dato.titulo}</td>
                    <td>${dato.descripcion}</td>
                    <td>${dato.vencimiento}</td>
                    <td>${completado}</td>
                    <td>
                        <button class="editar btn btn-outline-warning" data-id="${dato.id}">Editar</button>
                        <button class="eliminar btn btn-outline-danger" data-id="${dato.id}">Eliminar</button>
                    </td>
                </tr>`;
            });
            tbody.innerHTML = contenido;
    })
    .fail(function ajaxError(e){

    })
    .always(function ajaxSiempre(){
        //console.log("Final de la llamada ajax");
    })
}

$(document).on("submit","#formRegistro",function(event){
    event.preventDefault();
    var $form = $(this) //almaceno el formulario

    if($("#btnSub").text() == "Actualizar"){
        varActualizar = true    
    }
    else{
        varActualizar = false 
    }

    console.log(varActualizar);


    var data_form = {
        id: $("input[id='idbook']", $form).val(),
        titulo: $("input[id='titulo']", $form).val(),
        descripcion: $("input[id='descripcion']", $form).val(),
        vencimiento: $("input[id='vencimiento']", $form).val(),
        completada : $("input[id='completada']", $form).is(':checked'),
        actualizar: varActualizar
    }


    
    var url_php="http://localhost/BBINCOCRUD/controller/TareaApi.php";
    //Peticion AJAX
    $.ajax({
        type:"POST",
        url: url_php,
        data:data_form,
        dataType:"json",
        async: true
    })
    .done(function ajaxDone(res){
        if(res){
            alert("Creado Correctamente");
            mostarRegistros()
        }else{
            alert("No se pudo crear");
        }

    })
    .fail(function ajaxError(e){

    })
    .always(function ajaxSiempre(){
        //console.log("Final de la llamada ajax");
    })

});

$(document).ready(function() {
    $('.editar').on('click', function() {
        var $btn = $(this) //almaceno el boton que selecciono

        //Obtener el data
        const valorDataId = $btn.data('id');

        //Cambiar lo que dice el btn
        $("#btnSub").text("Actualizar");
        //console.log("Valor de data-id:", valorDataId);  

        var url_php="http://localhost/BBINCOCRUD/controller/TareaApi.php?id="+valorDataId;
        //Peticion AJAX
        $.ajax({
            type:"GET",
            url: url_php,
            //data:data_form,
            dataType:"json",
            async: true
        })
        .done(function ajaxDone(res){
            //Escribir en html los valores
            
            res.forEach(element => {
                if(element.completada=="1"){
                    completado=true
                }else{
                    completado=false
                }
                $("#idbook").val(element.id);
                $("#titulo").val(element.titulo);
                $("#descripcion").val(element.descripcion);
                $("#vencimiento").val(element.vencimiento);
                $("#completada").prop('checked', completado);
                
            });
            
        })
        .fail(function ajaxError(e){
    
        })
        .always(function ajaxSiempre(){
            //console.log("Final de la llamada ajax");
        })
    
    });

});

//Cuendo presiona el boton crear registro
$(document).ready(function() {
    $('#crearRegistro').on('click', function() {
        $("#btnSub").text("Registrar");
        $("#titulo").val("");
        $("#descripcion").val("");
        $("#vencimiento").val("");
        $("#completada").prop('checked', false);
    });
});


//Parte de eliminar
$(document).ready(function() {
    $('.eliminar').on('click', function(event) {
        event.preventDefault();
        var $btn = $(this) //almaceno el boton que selecciono

        //Obtener el data
        const valorDataId = $btn.data('id');
        //console.log("Valor de data-id:", valorDataId);  
        var data_form = {
            id:valorDataId,
            delete:true
        }
        var url_php="http://localhost/BBINCOCRUD/controller/TareaApi.php";
        //Peticion AJAX
        $.ajax({
            type:"POST",
            url: url_php,
            data:data_form,
            dataType:"json",
            async: true
        })
        .done(function ajaxDone(res){
            if(res){
                alert("Eliminado correctamente")
                mostarRegistros();
            }else{
                alert("errorr");
            }
        })
        .fail(function ajaxError(e){
    
        })
        .always(function ajaxSiempre(){
            //console.log("Final de la llamada ajax");
        })

    });
});





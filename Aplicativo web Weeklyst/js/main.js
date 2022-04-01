jQuery(document).on('submit','#form_insert',function(){
    event.preventDefault();
    jQuery.ajax({
        url: 'Vistas/Instructor/listaprepare.php',
        type: 'POST',
        dataType: 'jason',
        data: $(this).serialize(),
    })
    .done(function(respuesta){
        console.log(respuesta);
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    })
});
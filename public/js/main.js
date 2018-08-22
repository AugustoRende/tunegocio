$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
    //FUNCIONAMIENTO DE LA GALERÍA
    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all") {
            $('.filter').show('1000');
        } else {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }

    $(this).addClass("active");

    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 


    //AL HACER CLICK EN VER DEMO NO LO TOMO COMO UNA SELECCIÓN
    $(".cuerpo a").click(function( event ) {
        event.stopPropagation();
    });

    $("#next").click(function( event ) {
        if ($(this).attr("disabled") == "disabled") {
            console.log($(this).attr("disabled"));
            return false;
        } else {
            generateTheme();
        }
    });


    //EDICIÓN DE LOS VALORES DEL TEMA
    $(".saveChanges").click(function( event ) {
        event.stopPropagation();
        campos=$('.'+this.id);
        campos.each(function( index, campo ) {
            console.log(campo.value);
            console.log(campo.title);
            newValue = campo.value;
            section = campo.title.split('-')[0];
            component = campo.title.split('-')[1];
            oldValue = campo.title.split('-')[2];
            saveValue(section,component,oldValue,newValue);

            campo.title = section+'-'+component+'-'+newValue;
        });
    });
});


function saveValue($section,$component,$oldValue,$newValue) {
    $.get('/saveValue/'+$section+'/'+$component+'/'+$oldValue+'/'+$newValue, function(){ 
        console.log(guardado);
    });
}


//FUNCIONALIDAD AGREGADA A LA GALERIA
function saveTheme($theme_id){
    $.get('/saveTheme/'+$theme_id, function(){ 
        $('.thumbnail').css('background-color','#F5F8FA')
        $('#theme'+$theme_id).css('background-color','#42B32F');
        $("#next").removeAttr('disabled');
        $("#next").addClass('label-success');
        $("#next").removeClass('label-default');
    });
}

function generateTheme(){
    $.get('/generateTheme', function(){ 
        window.location.reload(true);
    });
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
    iframe = $('#themePreview')[0];
    
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
    $(".card-body a").click(function( event ) {
        event.stopPropagation();
    });

    $("#next").click(function( event ) {
        if ($(this).attr("disabled") == "disabled") {
            return false;
        } else {
            generateTheme();
        }
    });


    //EDICIÓN DE LOS VALORES DEL TEMA
    $(".saveChanges").click(function( event ) {
        event.stopPropagation();
        campos=$('.'+this.id);
        this.disabled = true;
        button.addClass("btn-outline-default");
        button.removeClass("btn-outline-success");

        var count = campos.length;
        campos.each(function( index, campo ) {
            newValue = campo.value;
            csua_id = campo.title;

            saveValue(csua_id, newValue, null);
            
            if (campo.type == 'file') {
                //console.log(campo.closest('form'));
                //var formData = new FormData(campo.closest('form'));
                console.log(campo.value);
                $.post('/uploadImage',{image:campo.value},function(response){
                    console.log(response);
                });
            }

            reloadPreview(index,count);
        });
    });

    $(".campo").change(function() {
        button = $("#"+this.name);
        button.removeAttr('disabled');
        button.addClass("btn-outline-success");
        button.removeClass("btn-outline-default");
    });


    //FUNCIONALIDAD DE LOS SLIDERS
    $(".big-slider").click(function( event ) {
        classChilds = this.id;
        checked = $(this).is(':checked');
        updateSectionVisibility(this.title, (checked ? 1 : 0));

        childs = $('.'+classChilds);

        var count = childs.length;
        childs.each(function(index) {
            if (checked) { $(this).attr('disabled',false); }

            if ($(this).is(':checked') !== checked){ $(this).click(); }
            
            if (!checked) { $(this).attr('disabled',true); }
            
            reloadPreview(index,count);
        });

    });

    $("[class*=big-slider-]").click(function( event ) {
        event.stopPropagation();
        updateComponentVisible($(this));
    });

    //DESACTIVO LOS HIJOS PARA AQUELLOS PADRES DESACTIVADOS
    $("[class*=big-slider-]").each(function() {
        parent = $('#'+$(this).attr('class'));

        if (!parent.is(':checked')) {
            $(this).attr('disabled',true);
        }
    });

    $('.uploadImage').change(function (event) {
        //TODO: Hacerlo en segundo plano AJAX
        this.closest('form').submit();
    })
});


//VISIBILIDAD DE LOS COMPONENTES
function updateComponentVisible(input) {
    input.click();
    
    csua_id = input.attr('title');
    visible = (input.is(':checked') ? 1 : 0);

    saveValue(csua_id, null, visible);
}

function updateSectionVisibility($section_id, $visible) {
    $.post('/updateSectionVisibility',{section_id:$section_id, visible:$visible},function(response){
        //console.log(response);
    });
}


//FUNCIONALIDAD AGREGADA A LA GALERIA
function saveTheme($theme_id){
    $.post('/saveTheme',{theme_id:$theme_id},function(response){
        $('.card').css('background-color','#F5F8FA')
        $('#theme'+$theme_id).css('background-color','#D4FFF7');
        $("#next").removeAttr('disabled');
        $("#next").addClass('label-success');
        $("#next").removeClass('label-default');
    });
}

function generateTheme(){
    $.post('/generateTheme',function(response){
        window.location.reload(true);
    });
}

function saveValue($csua_id, $newValue, $visible) {
    $.post('/saveValue',{csua_id:$csua_id, newValue:$newValue, visible:$visible},function(response){
        //console.log(response);
    });
}

function reloadPreview(index,count) {
    if (index+1 === count) {
        setTimeout(function(){
            iframe.src = iframe.src;
        }, 2000);
    }
}
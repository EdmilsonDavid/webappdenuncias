
$(function () {
    $('.data-time').mask('00/00/0000 00:00:00');
    $('.time').mask('00:00:00');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#newFastEvent").click(function () {
        clearModalErros('.print-error-msg');
        resetForm('#formFastEvent');

        $('#modalFastEvent').modal('show');
        $("#modalFastEvent #titleModal").text('Criar Eventos Rapidos');
        $('#modalFastEvent button.deleteFastEvent').css("display","none");

    });

    $('.fc-event').click(function () {
        clearModalErros('.print-error-msg');
        resetForm('#formFastEvent');

        let Event = JSON.parse($(this).attr('data-event'));

        $('#modalFastEvent').modal('show');
        $("#modalFastEvent #titleModal").text('Alterar Eventos Rapidos');
        $('#modalFastEvent button.deleteFastEvent').css("display","flex");

        $("#modalFastEvent input[name='id']").val(Event.id);
        $("#modalFastEvent input[name='titulo']").val(Event.title);
        $("#modalFastEvent input[name='start']").val(Event.start);
        $("#modalFastEvent input[name='end']").val(Event.end);
        $("#modalFastEvent input[name='color']").val(Event.color);


    });

    $('.saveFastEvent').click(function () {
        let id= $("#modalFastEvent input[name='id']").val();
        let title= $("#modalFastEvent input[name='titulo']").val();
        let start=$("#modalFastEvent input[name='start']").val();
        let end=$("#modalFastEvent input[name='end']").val();
        let color=$("#modalFastEvent input[name='color']").val();


        let Event ={
            title: title,
            start: start,
            end: end,
            color: color,
        };
        let route;
        if(id===''){
            route = routeEvents('routeFastEventStore');
        }else {
            route=routeEvents('routeFastEventUpdate');
            Event.id= id;
            Event._method= 'PUT';
        }
        sendEvent(route,Event)

    });

    $('.deleteFastEvent').click(function () {
        let id= $("#modalFastEvent input[name='id']").val();
        let Event={
            id:id,
            _method: 'DELETE'
        };
        let route = routeEvents('routeFastEventDelete');
        sendEvent(route,Event);
    });


});

$('.deleteEvent').click(function () {
    let id= $("#modalCalendario input[name='id']").val();
    let Event={
        id:id,
        _method: 'DELETE'
    };
   let route = routeEvents('routeEventDelete');
    sendEvent(route,Event);
});

$('.saveEvent').click(function () {
    let id= $("#modalCalendario input[name='id']").val();
    let title= $("#modalCalendario input[name='titulo']").val();
    let start=moment($("#modalCalendario input[name='start']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");
    let end=moment($("#modalCalendario input[name='end']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");
    let color=$("#modalCalendario input[name='color']").val();
    let description=$("#modalCalendario textarea[name='descricao']").val();

    let Event ={
        title: title,
        start: start,
        end: end,
        color: color,
        description: description
    };
    let route;
    if(id===''){
        route = routeEvents('routeEventStore');
    }else {
route=routeEvents('routeEventUpdate');
Event.id= id;
Event._method = 'PUT';
    }
    sendEvent(route,Event)
    
});

function sendEvent(route, data_) {
console.log(data_);
    $.ajax({
       url:route,
       data:data_,
       method:'POST',
       dataType: 'json',
       success:function (json) {

           if(json==false){
               $('#modalCalendario').modal('hide');
               $('#InformationproModalalert').modal('show');
           }

           if($.isEmptyObject(json.error)){
            /*   location.reload();*/

           }else{
               console.log(json);
               printErrorMsg(json.error);
           }

       }

    });

}

function printErrorMsg (msg) {

    $(".print-error-msg").find("strong").html('');
    $(".print-error-msg").find("ul").html('');
    $(".print-error-msg").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
}


function routeEvents(route) {
    return document.getElementById('calendar').dataset[route];

}

function clearModalErros(element) {
    $(element).find("ul").html('');;

}


function resetForm(form) {
    $(form)[0].reset();
    
}
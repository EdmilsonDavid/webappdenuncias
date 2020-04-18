
document.addEventListener('DOMContentLoaded', function() {
    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function(eventEl) {
            return {
                title: eventEl.innerText.trim()
            }
        }
    });

    //// the individual way to do it
    // var containerEl = document.getElementById('external-events-list');
    // var eventEls = Array.prototype.slice.call(
    //   containerEl.querySelectorAll('.fc-event')
    // );
    // eventEls.forEach(function(eventEl) {
    //   new Draggable(eventEl, {
    //     eventData: {
    //       title: eventEl.innerText.trim(),
    //     }
    //   });
    // });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        locale:'pt-br',
        navLinks:true,
        eventLimit:true,
        selectable:true,
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar
        drop: function(arg) {
            let Event= JSON.parse(arg.draggedEl.dataset.event);
            // is the "remove after drop" checkbox checked?
            if (document.getElementById('drop-remove').checked) {
                // if so, remove the element from the "Draggable Events" list
                arg.draggedEl.parentNode.removeChild(arg.draggedEl);
                Event._method="DELETE";
                sendEvent(routeEvents('routeFastEventDelete'),Event);
            }


            let start=moment(`${arg.dateStr} ${Event.start}`).format("YYYY-MM-DD HH:mm:ss");
            let end=moment(`${arg.dateStr} ${Event.end}`).format("YYYY-MM-DD HH:mm:ss");
            Event.start=start;
            Event.end=end;

            delete Event.id;
            delete Event._method;

            sendEvent(routeEvents('routeEventStore'),Event);
            console.log(Event);
        },
        eventDrop: function(element) {
            let start=moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
            let end=moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");
            console.log(element.event.id);

            let newEvent={
                _method:'PUT',
                title: element.event.title,
                id: element.event.id,
                start: start,
                end: end
            };
            sendEvent(routeEvents('routeEventUpdate'),newEvent);
        },
        eventClick: function(element) {
            clearModalErros('.print-error-msg');
            resetForm('#formEvent');
            $('#modalCalendario').modal('show');
            $('#modalCalendario #titleModal').text('Alterar o Evento');
            $('#modalCalendario button.deleteEvent').css("display","flex");

            let title=element.event.title;

            console.log(element);
            $("#modalCalendario input[name='titulo']").val(element.event.title);
            $("#modalCalendario input[name='id']").val(element.event.id);
            $("#modalCalendario input[name='start']").val(moment(element.event.start).format("DD/MM/YYYY HH:mm:ss"));
            $("#modalCalendario input[name='end']").val(moment(element.event.end).format("DD/MM/YYYY HH:mm:ss"));
            $("#modalCalendario input[name='color']").val(element.event.backgroundColor);
            $("#modalCalendario textarea[name='descricao']").val(element.event.extendedProps.description);


        },
        eventResize: function(element) {
            let start=moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
            let end=moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");
            console.log(element.event.id);


            let newEvent={
                _method:'PUT',
                title: element.event.title,
                id: element.event.id,
                start: start,
                end: end
            };
            sendEvent(routeEvents('routeEventUpdate'),newEvent);
        },
        select: function(element) {
            clearModalErros('.print-error-msg');
            resetForm('#formEvent');
            $('#modalCalendario').modal('show');
            $('#modalCalendario #titleModal').text('Adicionar o Evento');
            $('#modalCalendario button.deleteEvent').css("display","none");

            $("#modalCalendario input[name='start']").val(moment(element.start).format("DD/MM/YYYY HH:mm:ss"));
            $("#modalCalendario input[name='end']").val(moment(element.end).format("DD/MM/YYYY HH:mm:ss"));
            $("#modalCalendario input[name='color']").val("#3788D8");
            calendar.unselect();
        },
        events:routeEvents('routeLoadEvents'),

    });
    calendar.render();

});

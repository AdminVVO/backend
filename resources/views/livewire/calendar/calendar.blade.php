<div wire:ignore>
    <div id="calendar"></div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let listing = @this.listings;
        let reservation = @this.reservation;

        var inner = '';

        listing.forEach((element) => {
            inner += '<i aria-hidden="true">' + element.base_price + element.listing_currency +
                '</i><div style="margin-bottom:140px"></div>';
        });

        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'UTC',
            editable: true,
            initialView: 'resourceTimelineMonth',
            eventMaxStack: 3,
            eventOrder: 'title',
            eventOrderStrict: true,
            events: reservation,
            resources: listing,

            validRange: function(nowDate) {
                return {
                    start: nowDate
                };
            },
            eventResourceEditable: false,
            slotEventOverlap: false,



            eventDrop: function(info) {
                var start = info.event.start.toISOString().slice(0, 10);
                var end = info.event.end.toISOString().slice(0, 10);
                var id = info.event.getResources()[0]._resource.id;
                var reservId = info.event.extendedProps.reservId;
                data = {
                    'start': start,
                    'end': end,
                    'id': id,
                    'reservId': reservId
                }
            },

            resourceLabelContent: function(arg) {
                return {
                    html: '<div>' + arg.resource.title + '</div>' + " " +
                        `<div style=""><img src="{{ URL::asset('assets/img/anality.jpg') }}" alt=""></div>`
                };
            },

            slotLaneDidMount: function(arg) {
                arg.el.insertAdjacentHTML('beforeend', inner);
            },
        });

        calendar.render();
    });
</script>
<style>
    html,
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 14px;
    }

    #calendar table {
        table-layout: fixed;
    }

    .fc-datagrid-cell-frame :not(:first-child) {
        min-height: 120px;
    }

    .fc-event {
        height: 30px !important;
    }

    #calendar {
        max-width: 1100px;
        margin: 40px auto;
    }

    .fc-daygrid-day-number {
        outline: 1px solid red;
    }
</style>

<link href="https://fullcalendar.io/releases/core/4.2.0/main.min.css" rel="stylesheet" />
<link href="https://fullcalendar.io/releases/timeline/4.2.0/main.min.css" rel="stylesheet" />
<link href="https://fullcalendar.io/releases/resource-timeline/4.2.0/main.min.css" rel="stylesheet" />
<script src="https://fullcalendar.io/releases/core/4.2.0/main.min.js"></script>
<script src="https://fullcalendar.io/releases/interaction/4.2.0/main.min.js"></script>
<script src="https://fullcalendar.io/releases/timeline/4.2.0/main.min.js"></script>
<script src="https://fullcalendar.io/releases/resource-common/4.2.0/main.min.js"></script>
<script src="https://fullcalendar.io/releases/resource-timeline/4.2.0/main.min.js"></script>


<div id="calendar"></div>
<script>document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
  
    var calendar = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'UTC',
      plugins: [ 'interaction', 'resourceTimeline' ],
      header: {
        left: 'promptResource today prev,next',
        center: 'title',
        right: 'resourceTimelineMonth'
      },
      aspectRatio: 1.5,
      defaultView: 'resourceTimelineMonth',
      resourceLabelText: ' ',
      editable: true,
     eventResourceEditable: false ,
      resources: [{"id":"a","title":"Auditorium A"},{"id":"b","title":"Auditorium B"},
      {"id":"c","title":"Auditorium C"},
      {"id":"d","title":"Auditorium D"},
      {"id":"e","title":"Auditorium E"},
      {"id":"f","title":"Auditorium F"},
      {"id":"g","title":"Auditorium G"},
      {"id":"h","title":"Auditorium H"},
      {"id":"i","title":"Auditorium I"}],
      events: [{"resourceId":"d","title":"event 1","start":"2022-07-02","end":"2022-07-06"},
      {"resourceId":"c","title":"event 3","start":"2022-07-05","end":"2022-07-06"},
      {"resourceId":"c","title":"event 4","start":"2022-07-02","end":"2022-07-04"},
    {"resourceId":"g","title":"event 5","start":"2022-07-02","end":"2022-07-03"},
      {"resourceId":"b","title":"event 5","start":"2022-07-05T10:00:00+00:00","end":"2022-07-05T15:00:00+00:00"},
      {"resourceId":"e","title":"event 2","start":"2022-07-05T09:00:00+00:00","end":"2022-07-05T14:00:00+00:00"}]
    });
  
    calendar.render();
  });
</script>
<style>
  #calendar {
  max-width: 900px;
  margin: 40px auto;
}
</style>

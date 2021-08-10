<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendar') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                        <div id='calendar'></div>


                </div>
            </div>
        </div>
    </div>


    <script>
        var shedules = {!! json_encode($shedules) !!};

        console.log(shedules);


        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          slotMinTime: '08:00',
          slotMaxTime: '20:00',
          headerToolbar: {
              left: 'prev,next today',
              center: 'title',
              right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
          },
          businessHours: {
              // days of week. an array of zero-based day of week integers (0=Sunday)
              daysOfWeek: [ 1, 2, 3, 4, 5 ],

              startTime: '08:00', // a start time
              endTime: '20:00', // an end time
          },
          events:[shedules]
          });

          calendar.render();
      });
  </script>
</x-app-layout>

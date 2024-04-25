@extends('layouts.index')
@section('content')
    <div class="h-screen flex bg-[#d3e7ff]  justify-center items-center">
        <div id="calendar" class=" h-[80vh]  w-[100%] rounded-3xl border-none p-3 text-black">
        </div>
        @include('component.modal')
    </div>
    {{-- <style>
        .fc-header-toolbar {
            color: #fff;
            background-color: red;

        }
        
        .fc-day {
            padding: 50px;
            
            color: #fff;
        }

        .fc-daygrid-day {
            margin: 20px;
            
        }

        .fc-daygrid-day-number {
            color: black;
        }

        .fc-header-left,
        .fc-header-right {
            padding: 10px;
            color: black;

        }
        
        .fc .fc-col-header-cell-cushion {
            padding-top: 5px;
            padding-bottom: 5px;
            border-bottom: 2px black solid;
            color: black;
            width: 50px;
            
        }

        .fc-daygrid-day-frame {
            border: black solid 1px;
            border-radius: 10px;
            background-color: #e4e2dd;
            width: 100px;
            margin: 8px;
        }
    </style> --}}
    <script>
        document.addEventListener('DOMContentLoaded', async function() {
            const response = await axios.get('/calendar/show');
        const event = response.data.events;
        
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'dayGridMonth,timeGridWeek,timeGridDay',
                    center: 'title',
                    right: 'listMonth,listWeek,listDay'
                },
                views: {
                    listDay: { // Customize the name for listDay
                        buttonText: 'Day Events',
                    },
                    listWeek: { // Customize the name for listWeek
                        buttonText: 'Week Events'
                    },
                    listMonth: { // Customize the name for listMonth
                        buttonText: 'Month Events'
                    },
                    timeGridWeek: {
                        buttonText: 'Week', // Customize the button text
                    },
                    timeGridDay: {
                        buttonText: "Day",
                    },
                    dayGridMonth: {
                        buttonText: "Month",
                    },

                },
                initialView: "timeGridWeek",
                slotMinTime: "09:00:00", // min  time  appear in the calendar
                slotMaxTime: "19:00:00",
                nowIndicator: true,
                selectable: true,
                selectMirror: true,
                selectOverlap: true,
                weekends: true,
                initialView: 'dayGridWeek',


                events: event ,
                editable: true,
                

                selectAllow: (info) => {
                    let instant = new Date()
                    return info.start > instant
                },
                select: (info) => {

                    let start = info.start
                    let end = info.end


                    if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                        alert("rak khditi bzaf dyal l wa9t")
                        calendar.unselect()
                        return
                    }

                    document.getElementById("date-start").value = formatDate(start).day
                    if (info.allDay) {
                        document.getElementById("date-end").value = formatDate(start).day
                        document.getElementById("time-start").value = "09:00:00"
                        document.getElementById("time-end").value = "19:00:00"
                    } else {
                        document.getElementById("date-end").value = formatDate(end).day
                        document.getElementById("time-start").value = formatDate(start).time
                        document.getElementById("time-end").value = formatDate(end).time
                    }
                    document.getElementById("clickMe").click()


                },
                eventClick: (info) => {
                    // alert("event clicked")

                    console.log(info);
                }
            });
            calendar.render();

            function formatDate(date) {
                let year = String(date.getFullYear())
                let month = String(date.getMonth() + 1).padStart(2, 0)
                let day = String(date.getDate()).padStart(2, 0)

                let hour = String(date.getHours()).padStart(2, 0)
                let min = String(date.getMinutes()).padStart(2, 0)
                let sec = String(date.getSeconds()).padStart(2, 0)

                return {
                    day: `${year}-${month}-${day}`,
                    time: `${hour}:${min}:${sec}`
                }
            }
        });
    </script>
@endsection

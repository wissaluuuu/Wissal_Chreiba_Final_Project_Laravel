<x-app-layout>
    <div class="bg-[#f2f7ff] w-full h-screen flex gap-6 main p-1">
        <div
            class="h-screen  bg-white w-[5%] side-bar flex flex-col gap-16 align-items-center  rounded-2xl text-gray-500">
            <a href="{{ route('dashboard') }}" class="mt-2 text-[#4f6771]"> <svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
                    <path
                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0" />
                    <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                    <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z" />
                </svg></a>
            <a href="{{ route('chatify') }}" class="text-[#4f6771]"><svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                </svg></a>
            <a href="{{ route('profile.edit') }}" class="text-[#4f6771]"><svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill"
                    viewBox="0 0 16 16">
                    <path
                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                </svg></a>
            <a href="{{ route('home.calendar') }}" class="text-[#4f6771]"><svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                    <path
                        d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23" />
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                </svg></a>

            <a href="{{ route('projects.index') }}" class="text-[#4f6771]">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-list-task" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                    <path
                        d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                    <path fill-rule="evenodd"
                        d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                </svg>
            </a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="text-[#4f6771]" width="30"
                    height="30" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                    <path
                        d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                </svg></a>
        </div>
        {{-- section 1 --}}
        <div class="flex w-[100%] gap-3 deux-section">
            <div class="bg-white  section-productive w-[65vw] rounded-2xl   ">
                <div class=" h-[40vh] section-img w-full body   flex justify-content-between  px-4  rounded-2xl py-4  ">
                    <div class="flex   h-fit    w-[100%]">

                        <div>
                            <h4 class=" text-gray-400 ">Hi , {{ Auth::user()->name }}</h4>
                            <h2 class="font-bold font-mono ">Let's be productive</h2>
                            <div class="flex  bg-[#4162ff] mt-3 rounded-2xl p-3 h-[25vh] ">
                                <h1 class="font-bold size-96 text-start mt-10">Easy Way to <span
                                        class="text-white">Manage</span> <br> your Tasks</h1>

                                <button type="button" class="btn bg-[#59ccfb]  btn-modal mt-20 w-fit"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h5 class=' bg-[#59ccfb] text-white px-1 rounded-lg py-2'>create ur project</h5>
                                </button>
                            </div>
                        </div>
                        <div> <img src="{{ asset('img/bgg.png') }}" width="320vw" alt="description of myimage">
                        </div>
                        {{-- modal  pour creer ton project --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">creer ton espace de travail
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">
                                        <form action="{{ route('espace.store') }}" class="flex flex-wrap w-full"
                                            method="POST">
                                            @csrf
                                            <div class="w-full  flex flex-col flex-wrap">
                                                <label for=""> Nom de l'espace</label>
                                                <input name="name" type="text">
                                                <label for="">Description</label>
                                                <input name="description" type="text">
                                                <label for="date">due_date</label>
                                                <input type="date" name="due_date">
                                                <input type="hidden" name="created_by">
                                            </div>
                                            <button> save </button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end modal --}}
                    </div>

                </div>
                {{-- calendar --}}
                <div class=" mt-16 ">
                    <div id="calendar">
                    </div>
                    @include('component.modal')
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
                                initialView: 'dayGridMonth',


                                events: event,
                                editable: true,


                                selectAllow: (info) => {
                                    let instant = new Date()
                                    return info.start > instant
                                },
                                select: (info) => {

                                    let start = info.start
                                    let end = info.end
                                    let eventNameInput = document.getElementById("name");
                                    let dateStartInput = document.getElementById("date-start");
                                    let timeStartInput = document.getElementById("time-start");
                                    let dateEndInput = document.getElementById("date-end");
                                    let timeEndInput = document.getElementById("time-end");

                                    dateStartInput.value = formatDate(start).day;
                                    dateEndInput.value = formatDate(end).day;
                                    timeStartInput.value = formatDate(start).time;
                                    timeEndInput.value = formatDate(end).time;

                                    // $('#eventModal').modal('show');

                                    if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                                        alert("'-'")
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
                </div>
            </div>
            <div class="bg-white dashboard-section2  w-[25vw] rounded-2xl">
                <div>
                    {{-- mini --}}
                    <div class="calendar mt-2 ">
                        <header>
                            <h3></h3>
                            <nav>
                                <button id="prev"></button>
                                <button id="next"></button>
                            </nav>
                        </header>
                        <section>
                            <ul class="days ">
                                <li>Sun</li>
                                <li>Mon</li>
                                <li>Tue</li>
                                <li>Wed</li>
                                <li>Thu</li>
                                <li>Fri</li>
                                <li>Sat</li>
                            </ul>
                            <ul class="dates"></ul>
                        </section>
                    </div>
                </div>
                <div class="ml-6 mt-7">
                    <h2 class="font-bold font-mono  ">Recent projects :</h2>


                    <div class="flex bg-white  flex-wrap gap-7  h-fit">
                    @foreach ($projects as $project)
                            <div class="h-[8vh] w-[22vw]    px-3 shadow-sm rounded-2xl">
                                <div class="mt-2">

                                    <a href="{{ route('espace.index') }} " class="text-decoration-none">
                                        <h6 class="text-black fw-bolder"> {{ $project->name }}</h6>
                                        <h6 class="text-gray-500">{{ $project->due_date }}</h6>

                                    </a>
                                </div>
                            </div>
                    @endforeach

                    {{-- @foreach ($ownprojects as $ownproject) --}}
                    {{-- <div class="flex bg-white flex-wrap gap-7 h-fit">
                            <div class="h-[8vh] w-[22vw] px-3 shadow-sm rounded-2xl">
                                <div class="mt-2">
                                    <a href="{{ route('espace.index') }}" class="text-decoration-none">
                                        <h6 class="text-black fw-bolder">{{ $ownproject->name }}</h6>
                                        {{-- <h6 class="text-gray-500">{{ $project->user->name }}</h6> --}}
                    {{-- </a>
                                </div>
                            </div>
                        </div>  --}}
                    {{-- {{ $ownprojects }} --}}
                    {{-- @endforeach --}}



                    {{-- <p>{{ $project->name }}</p> --}}
                    <!-- Ajoutez ici d'autres détails du projet que vous souhaitez afficher -->
                    {{-- @foreach ($ownprojects as $ownproject)
                    <h1>{{ $myownproject->name }}</h1>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
<style>
    .fc-header-toolbar {
        color: #fff;
        /* background-color: red; */
        display: none !important;

    }

    .fc-day {
        padding: 50px;

        color: #fff;
    }

    .fc-daygrid-day {
        margin: 20px;
        /* background-color: red; */
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
        padding: 5vh !important;
        /* border: black solid 1px; */
        /* border-radius: 10px;
        background-color: #e4e2dd; */
        /* width: 100px; */
        /* margin: 8px; */
    }
</style>

<x-app-layout>
    <div class="bg-[#d7e9ff] w-full h-screen flex gap-6 main p-1">
        {{-- side bar --}}
        <div
            class="h-screen  bg-white w-[5%] side-bar flex flex-col gap-16 align-items-center  rounded-2xl text-gray-500">
            <a href="{{ route('dashboard') }}" class="mt-2 text-[#00b1ff]"> <svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
                    <path
                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0" />
                    <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                    <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z" />
                </svg></a>
            <a href="" class="text-[#00b1ff]"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                    height="30" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                </svg></a>
            <a href="{{ route('profile.edit') }}" class="text-[#00b1ff]"><svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill"
                    viewBox="0 0 16 16">
                    <path
                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                </svg></a>
            <a href="{{ route('home.calendar') }}" class="text-[#00b1ff]"><svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                    <path
                        d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23" />
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="text-[#00b1ff]" width="30"
                    height="30" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                    <path
                        d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                </svg></a>
        </div>
        {{-- section 1 --}}
        <div class="flex w-[100%] gap-3 deux-section">
            <div class="bg-white  section-productive w-[65vw] rounded-2xl   ">
                <div class=" h-[40vh] section-img w-full body   flex justify-content-between  px-4  rounded-2xl py-4  ">
                    <div class="flex flex-col   h-fit    w-[100%]">

                        {{-- <h2 class=" font-extrabold font-mono ">Hi {{ Auth::user()->name }}</h2> --}}

                        <h2 class="font-bold font-mono ">Let's be productive</h2>
                        <div class="flex justify-between">

                            <div> <img src="{{ asset('img/bgg.png') }}" width="360vw" alt="description of myimage">
                            </div>
                            
                        </div>

                        <button type="button" class="btn btn-primary btn-modal  w-fit" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Create ur project
                        </button>

                        {{-- modal --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">creeer ton espace de travail
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
                                            </div>
                                            <button> save </button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end modal --}}
                    </div>
                    {{-- <div>
                        hy
                    </div> --}}
                </div>
            </div>
            {{-- your projects --}}
            <div class="bg-white dashboard-section2  w-[25vw] rounded-2xl">
                <div>
                    <div class="calendar mt-2">
                        <header>
                            <h3></h3>
                            <nav>
                                <button id="prev"></button>
                                <button id="next"></button>
                            </nav>
                        </header>
                        <section>
                            <ul class="days">
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
            </div>
        </div>
    </div>
</x-app-layout>

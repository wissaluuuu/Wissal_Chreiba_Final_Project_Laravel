 @extends('layouts.index')
 @section('content')
     <Flex gap="2">
         <Avatar
             src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?&w=256&h=256&q=70&crop=focalpoint&fp-x=0.5&fp-y=0.3&fp-z=1&fit=crop"
             fallback="A" />
         <Avatar fallback="A" />
     </Flex>
     <div class="h-screen bg-[#f2f7ff]  flex">
         {{-- side bar --}}
         <div class="h-screen  bg-white w-[4%]  side-bar flex flex-col gap-16 align-items-center  rounded-2xl text-gray-500">
             <a href="{{ route('dashboard') }}" class="mt-2 text-[#4f6771]"> <svg xmlns="http://www.w3.org/2000/svg"
                     width="28" class="mt-4" height="30" fill="currentColor" class="bi bi-house-add-fill"
                     viewBox="0 0 16 16">
                     <path
                         d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0" />
                     <path
                         d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                     <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z" />
                 </svg></a>
             <a href="{{ route('chatify') }}" class="text-[#4f6771]"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                     height="28" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                     <path
                         d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                 </svg></a>
             <a href="{{ route('profile.edit') }}" class="text-[#4f6771]"><svg xmlns="http://www.w3.org/2000/svg"
                     width="28" height="28" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                     <path
                         d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                 </svg></a>
             <a href="{{ route('home.calendar') }}" class="text-[#4f6771]"><svg xmlns="http://www.w3.org/2000/svg"
                     width="28" height="28" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                     <path
                         d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23" />
                     <path
                         d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                 </svg></a>

             <a href="{{ route('projects.index') }}" class="text-[#4f6771]">
                 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                     class="bi bi-list-task" viewBox="0 0 16 16">
                     <path fill-rule="evenodd"
                         d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z" />
                     <path
                         d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z" />
                     <path fill-rule="evenodd"
                         d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z" />
                 </svg>
             </a>
             <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="text-[#4f6771]" width="28" height="28"
                     fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                     <path
                         d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                 </svg></a>
         </div>
         <div class="flex flex-col">

             <div class=" p-8">
                 <div class="flex  gap-2  align-items-center   ">

                     <h1 class="font-semibold font-mono ">Create Task </h1><button type="button"
                         class="btn  btn-modal w-fit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         <h5 class='  text-white px-1 rounded-lg py-2'> <svg xmlns="http://www.w3.org/2000/svg"
                                 class="text-black" width="26" height="26" fill="currentColor"
                                 class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                 <path
                                     d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                             </svg> </h5>
                     </button>
                 </div>



                 {{-- <div class="absolute top-0 right-0">
                     <div class="relative">
                         <select id="memberInput" class="border-none pr-10" onclick="toggleDropdown()">
                            <!-- Utilisez un élément select au lieu d'un input -->
                            <option value="" disabled selected>Choisir un membre</option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                         </select>
                         <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-1/2 transform -translate-y-1/2"
                             width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                             <path
                                 d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                         </svg>
                     </div>
                     
                 </div>
            </div> --}}
                 {{-- <div class="flex flex-wrap gap-4 px-3 tasks"> --}}
                 {{-- <div class=" bg-white shadow-2xl mini-task h-[20vh] w-fit py-3 px-3 flex flex-col gap-2  rounded-2xl">
                    <div class="flex  ajouter">
                        <span data-testid="AddIcon" aria-hidden="true" class="css-snhnyn mt-2"
                        style="--icon-primary-color: currentColor; --icon-secondary-color: inherit;"><svg
                        width="24" height="24" role="presentation" focusable="false" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M12 3C11.4477 3 11 3.44772 11 4V11L4 11C3.44772 11 3 11.4477 3 12C3 12.5523 3.44772 13 4 13H11V20C11 20.5523 11.4477 21 12 21C12.5523 21 13 20.5523 13 20V13H20C20.5523 13 21 12.5523 21 12C21 11.4477 20.5523 11 20 11L13 11V4C13 3.44772 12.5523 3 12 3Z"
                        fill="currentColor"></path>
                    </svg></span>
                    <input type="text" class="bg-transparent cursor-pointer " placeholder="ajouter liste">
                </div> --}}


                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h1 class="modal-title fs-5" id="exampleModalLabel">creer votre task
                                 </h1>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                     aria-label="Close"></button>
                             </div>
                             <div class="modal-body ">

                                 {{-- form --}}

                                 <form action="{{ route('tache.store')  }}" class="flex flex-col gap-3 flex-wrap form  "
                                     method="POST">
                                     @csrf
                                     <input class="rounded-lg" type="text" name="name"
                                         placeholder="le titre de la liste">
                                     <input class="rounded-lg" type="text" placeholder="description" name="description"
                                         placeholder="le titre de la liste">
                                     <input class="rounded-lg" type="datetime-local" placeholder="datestart"
                                         name="dateStart">
                                     <input class="rounded-lg" type="datetime-local" placeholder="dateEnd"
                                         name="dateEnd">
                                     <select name="priority" class="bg-black text-white id="">
                                         <option class value="low"></option>
                                         <option value="medium" selected></option>
                                         <option value="high"></option>
                                     </select>
                                     <select name="status" class="text-black " id="">
                                         <option class="text-black py-4" selected value="to do"></option>
                                         <option class="text-black py-4" value="in progress" selected></option>
                                         <option class="text-black py-4" value="done"></option>
                                     </select>
                                     <input type="color" name="" id="">
                                     <button class="bg-blue-500 button-create w-[9vw] rounded-lg px-6  mt-2">Ajouter une
                                         liste</button>

                                 </form>
                             </div>
                             <div class="modal-footer">
                             </div>
                         </div>
                     </div>
                 </div>




             </div>


             {{-- @foreach ($taches as $tache)

                 {{-- <div class="  bg-white mini-task shadow-2xl h-fit w-[20vw]  py-3 px-3 flex  gap-2   rounded-2xl">
                     @foreach ($taskks as $taskk)
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-pencil" viewBox="0 0 16 16">
                     <path
                     d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                    </svg>
                         <p>{{ $taskk->name }}</p>
                     @endforeach
                 </div>
             </div>
         </div> --}}

             {{-- </div>  --}}

             {{-- @foreach ($project->tache as $tache)
                 <h5 class="font-bold">

                     {{ $tache->name }}
                 </h5>
                 <h6>
                     {{ $tache->description }}
                 </h6>
             @endforeach --}}
             @foreach ($projects as $project)
                 <div class="py-7 px-4 h-screen w-[90vw] flex gap-5 justify-around">
                     <div class=" w-[33%] flex flex-col gap-3 ">
                         <h2 class="font-extrabold text-start px-2">To Do</h2>
                         @foreach ($project->tache as $tache )
                             @if ($tache->status == 'to do')
                                 <div class="w-[100%] h-fit bg-white rounded-2xl px-3 py-4 shadow-xl">
                                     <h5 class="font-bold">

                                         {{ $tache->name }}
                                     </h5>
                                     <h6>
                                         {{ $tache->description }}
                                     </h6>
                                 </div>
                             @endif
                         @endforeach
                     </div>
                     <div class=" w-[33%] flex flex-col gap-3">
                         <h2 class="font-extrabold text-start px-2">in Progress</h2>
                         @foreach ($project->tache as $tache)
                             @if ($tache->status == 'in progress')
                                 <div class="w-[100%] h-fit bg-white rounded-2xl px-3 py-4 shadow-xl">
                                     <h5 class="font-bold">
                                         {{ $tache->name }}
                                     </h5>
                                     <h6>
                                         {{ $tache->description }}
                                     </h6>
                                 </div>
                             @endif
                         @endforeach
                     </div>
                     <div class=" w-[33%] flex flex-col gap-3">
                         <h2 class="font-extrabold text-start px-2">Done</h2>
                         @foreach ($project->tache as $tache)
                             @if ($tache->status == 'done')
                                 <div class="w-[100%] h-fit bg-white rounded-2xl px-3 py-4 shadow-xl">
                                     <h5 class="font-bold">

                                         {{ $tache->name }}
                                     </h5>
                                     <h6>
                                         {{ $tache->description }}
                                     </h6>
                                 </div>
                             @endif
                         @endforeach
                     </div>
                 </div>
             @endforeach
            </div>
     @endsection

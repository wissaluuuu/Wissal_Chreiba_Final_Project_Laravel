<x-app-layout>
    <h3>Your projects :</h3>
    
    <div class="flex-wrap flex gap-3">
        @foreach ($projects as $project)
            <!-- Vérifiez si l'utilisateur actuellement authentifié est l'auteur du projet -->
            {{-- @if ($project->user_id === auth()->id()) --}}
                <button class="bg-[#00b1ff] text-white flex align-items-center rounded-lg py-1 mt-2 w-fit px-2">
                    <a href="{{ route('espace.index') }}" class="block max-w-sm p-6 text-decoration-none bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $project->name }}</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $project->description }}</p>
                    </a>
                </button>
            {{-- @endif --}}
        @endforeach
    </div>
</x-app-layout>
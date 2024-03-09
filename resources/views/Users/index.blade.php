<x-User-layout>

    <form action="{{ url('/search') }}" class="max-w-md mx-auto mt-5 mb-5">
        <label for="default-search" class="mb-2 text-sm font-medium  sr-only ">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" name="query" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>

    <form method="get" action="{{ url('/filtrage') }}" class="max-w-sm mx-auto">
        <label for="categories" class="block mb-2 text-sm font-medium text-white dark:text-white">Filter by category</label>
        <select name="category" id="categories" class="bg-gray-50 border border-gray-300 text-green text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="" selected>Choose a Category</option>
            @foreach($Categories as $category)

            <option value="{{ $category->id }}">{{ $category->category_name   }}</option>
            @endforeach
        </select>
        <button type="submit" class="mt-3 px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
    </form>

    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @forelse($Events as $event)
            @if( $event->validation == 'valid')
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <a href="#">{{ $event->created_at }}</a>
                <div class="relative"><a href="#">
                        <img class="w-full" src="{{ asset('storage/' . $event->image) }}" alt="Sunset in the mountains">
                        <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                    </a>
                    <a href="{{ route('User.show', $event->id) }}">
                        <div class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            Show More
                        </div>
                    </a>
                </div>
                <div class="px-6 py-4 mb-auto">
                    <h2 href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                        {{ $event->titre }}</h2>
                    <p class="text-gray-500 text-sm">
                        {{ Str::limit($event->description, 20) }}
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex items-center">
                        <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" fill="currentColor">
                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                        </svg>
                        <span class="text-xl font-bold">
                            {{ $event->reservations->count() }}/{{ $event->places_number }}
                        </span>
                    </span>
                    

                    <span class="ml-1">
                        <form action="{{ route('reservation.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_event" value="{{ $event->id }}">
                            <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                                <svg class="w-5 h-5 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Réserver cet événement
                            </button>
                        </form>
                    
                        @role('Organisateur')
                        <form action="{{ route('Event.destroy', ['Event' => $event->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-red-900">
                                <svg class="w-5 h-5 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                Annuler l'événement
                            </button>
                        </form>
                            <a href="{{ route('Event.edit', ['Event' => $event->id]) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                <svg class="w-5 h-5 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 10l2.586-2.586a1 1 0 011.415 0L10 14.828l7.707-7.707a1 1 0 011.415 0L22 10M5 18v2m14-2v2m-7-2v2"></path>
                                </svg>
                                Modifier
                            </a>
                        @endrole
                    </span>
                    
                </div>
            </div>
            @endif
            @empty
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4">
                <p class="font-bold">Events</p>
                <p>No available events at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</x-User-layout>

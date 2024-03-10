<x-User-layout>

    <form action="{{ url('/search') }}" class="max-w-md mx-auto mt-5 mb-5">
    <div class="flex-1 px-2 flex justify-center lg:ml-6 lg:justify-end">
        <div class="max-w-lg w-full lg:max-w-xs">
          <label for="search" class="sr-only">Search</label>
          <div class="relative text-gray-400 focus-within:text-gray-600">
            <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
              <!-- Heroicon name: solid/search -->
              <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>
            </div>
            <input id="search" class="block w-full bg-white py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white focus:border-white sm:text-sm" placeholder="Search" type="search" name="query">
          </div>
        </div>
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
                    
                    <div class="ml-1 relative group">
                        <button onclick="toggleDropdown()" class="btn bg-blue-500 text-white">
                            Actions
                        </button>
                        <div id="dropdownMenu" class="relative hidden bg-white border rounded-md p-2 mt-2 space-y-2">
                            <form action="{{ route('reservation.store') }}" method="post" class="block">
                                @csrf
                                <input type="hidden" name="id_event" value="{{ $event->id }}">
                                <button type="submit" class="btn btn-link">
                                    Réserver cet événement
                                </button>
                            </form>
                    
                            @role('Organisateur')
                            <form action="{{ route('Event.destroy', ['Event' => $event->id]) }}" method="post" class="block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link">
                                    Delete
                                </button>
                            </form>
                    
                            <a href="{{ route('Event.edit', ['Event' => $event->id]) }}" class="block">
                                Modifier
                            </a>
                            @endrole
                        </div>
                    </div>
                    
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


<script>
    function toggleDropdown() {
        var dropdownMenu = document.getElementById("dropdownMenu");
        dropdownMenu.classList.toggle("hidden");
    }

    document.addEventListener("click", function(event) {
        var dropdown = document.querySelector(".group");
        if (!dropdown.contains(event.target)) {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.add("hidden");
        }
    });
</script>
</x-User-layout>

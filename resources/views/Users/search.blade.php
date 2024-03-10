
<form action="{{ url('/search') }}" class="max-w-md mx-auto mt-5 mb-5">
    <div class="flex-1 px-2 flex justify-center lg:ml-6 lg:justify-end">
        <div class="max-w-lg w-full lg:max-w-xs">
          <label for="search" class="sr-only">Search</label>
          <div class="relative text-gray-400 focus-within:text-gray-600">
            <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
              <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>
            </div>
            <input id="search" class="block w-full bg-white py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white focus:border-white sm:text-sm" placeholder="Search" type="search" name="query">
          </div>
        </div>
      </div>
    </form>

    @if ($Evenet->isEmpty())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">No results found!</strong>
            <span class="block sm:inline">Please refine your search criteria.</span>
        </div>
    @else
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @foreach ($Evenet as $event)
                    @if( $event->validation === 'valid')
                      
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
                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">{{ $event->reservations->count(). "/" . $event->places_number }}</span>
                    </span>

                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">
                            <form action="{{ route('reservation.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="id_event" value="{{ $event->id }}">
                                <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Réserver cet événement</button>
                            </form>

                            @role('Organisateur')
                            <form action="{{ route('Event.destroy', ['Event' => $event->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-red-900">Cancel Event</button>
                            </form>
                            <a href="{{ route('Event.edit', ['Event' => $event->id]) }}">modifier</a>

                            @endrole
                        </span>
                    </span>
                </div>
            </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
</x-User-layout>

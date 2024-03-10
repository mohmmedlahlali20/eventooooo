<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Evento') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <div class="max-w-md mx-auto mt-5">
            @if (session('success'))
            <div id="successMessage" class="bg-green-50 border-l-4 border-green-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 012 0v9a1 1 0 11-2 0V2zm1 12a1 1 0 11-2 0 1 1 0 012 0zm1.293-9.293a1 1 0 00-1.414 0L11 5.586V9a1 1 0 11-2 0V5.586L7.707 4.293a1 1 0 00-1.414 1.414L8.586 9l-2.293 2.293a1 1 0 101.414 1.414L10 10.414V14a1 1 0 102 0V10.414l2.293 2.293a1 1 0 001.414-1.414L13.414 9l2.293-2.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                        
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-green-700">
                            {{ session('success') }}
                            @if(session('successLink'))
                                <a href="{{ session('successLink') }}" class="font-medium underline text-green-700 hover:text-green-600">
                                    {{ __('Click here') }}
                                </a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            
    @endif
  
      
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div  id="successMessage" class="bg-red-500 text-white p-4 mb-4">
                <ul>
                    <li>
                        {{ $error }}
                    </li>
                </ul>
            </div>
            @endforeach
        @endif
        </div>
        
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script>
                    setTimeout(function() {
                var successMessage = document.getElementById('successMessage');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 5000);
        </script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

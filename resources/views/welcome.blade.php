<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evento</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Styles -->
      
    </head>
    <body class="">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <section class="relative h-screen flex flex-col items-center justify-center text-center text-white ">
      <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
          <video class="min-w-full min-h-full absolute object-cover"
              src="https://fiverr-res.cloudinary.com/video/upload/t_fiverr_hd/lqzue5xjmctq6pcsgvq1"
              type="video/mp4" autoplay muted loop></video>
      </div>
      <div class="video-content space-y-2 z-10">
          <h1 class="font-light text-6xl">Welcome to EVENTO</h1>
          <h3 class="font-light text-3xl">An unforgettable experience awaits you!</h3>
          <p class="font-light text-lg">Join us for a spectacular event filled with excitement, entertainment, and amazing surprises.</p>

      </div>
  </section>
  
  
    <main>
        <!-- Pricing section -->
        <div>
          <div class="relative bg-gray-900">
            <!-- Overlapping background -->
            <div aria-hidden="true" class="absolute bottom-0 hidden h-6 w-full bg-gray-50 lg:block"></div>
  
            <div class="relative mx-auto max-w-2xl px-6 pt-16 text-center sm:pt-32 lg:max-w-7xl lg:px-8">
              <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                  <span class="block lg:inline">Simple pricing,</span>
                  <span class="block lg:inline">no commitment.</span>
              </h1>
              <p class="mt-4 text-xl text-indigo-100">Everything you need, nothing you don't. Pick a plan that best suits your business.</p>
          </div>
          
          <h2 class="sr-only">Plans</h2>
            <!-- Toggle -->
            <div class="relative mt-12 flex justify-center sm:mt-16">
              <div class="flex rounded-lg bg-indigo-700 p-0.5">
                <button type="button" class="relative whitespace-nowrap rounded-md border-indigo-700 bg-white py-2 px-6 text-sm font-medium text-indigo-700 shadow-sm hover:bg-indigo-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-700">Monthly billing</button>
                <button type="button" class="relative ml-0.5 whitespace-nowrap rounded-md border border-transparent py-2 px-6 text-sm font-medium text-indigo-200 hover:bg-indigo-800 focus:z-10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-700">Yearly billing</button>
              </div>
            </div>
  
            <!-- Cards -->
            <div class="relative mx-auto mt-8 max-w-2xl px-6 pb-8 sm:mt-12 lg:max-w-7xl lg:px-8 lg:pb-0">
              <!-- Decorative background -->
              <div aria-hidden="true" class="absolute inset-0 top-4 bottom-6 left-8 right-8 hidden rounded-tl-lg rounded-tr-lg bg-indigo-700 lg:block"></div>
  
              <div class="relative space-y-6 lg:grid lg:grid-cols-3 lg:space-y-0">
                
                  <div class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
                    <div>
                      <h3 class="text-white text-base font-semibold">Starter</h3>
                      <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                        <div class="mt-3 flex items-center">
                          <p class="text-white text-4xl font-bold tracking-tight">$5</p>
                          <div class="ml-4">
                            <p class="text-white text-sm">USD / mo</p>
                            <p class="text-indigo-200 text-sm">Billed yearly ($56)</p>
                          </div>
                        </div>
                        <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Starter</a>
                      </div>
                    </div>
                    <h4 class="sr-only">Features</h4>
                    <ul role="list" class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-t divide-y lg:border-t-0">
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Basic invoicing</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Easy to use accounting</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Mutli-accounts</span>
                        </li>
                      
                    </ul>
                  </div>
                
                  <div class="bg-white ring-2 ring-indigo-700 shadow-md pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
                    <div>
                      <h3 class="text-indigo-600 text-base font-semibold">Scale</h3>
                      <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                        <div class="mt-3 flex items-center">
                          <p class="text-indigo-600 text-4xl font-bold tracking-tight">$19</p>
                          <div class="ml-4">
                            <p class="text-gray-700 text-sm">USD / mo</p>
                            <p class="text-gray-500 text-sm">Billed yearly ($220)</p>
                          </div>
                        </div>
                        <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Scale</a>
                      </div>
                    </div>
                    <h4 class="sr-only">Features</h4>
                    <ul role="list" class="border-gray-200 divide-gray-200 mt-7 border-t divide-y lg:border-t-0">
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Advanced invoicing</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Easy to use accounting</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Mutli-accounts</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Tax planning toolkit</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">VAT &amp; VATMOSS filing</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Free bank transfers</span>
                        </li>
                      
                    </ul>
                  </div>
                
                  <div class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
                    <div>
                      <h3 class="text-white text-base font-semibold">Growth</h3>
                      <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                        <div class="mt-3 flex items-center">
                          <p class="text-white text-4xl font-bold tracking-tight">$12</p>
                          <div class="ml-4">
                            <p class="text-white text-sm">USD / mo</p>
                            <p class="text-indigo-200 text-sm">Billed yearly ($140)</p>
                          </div>
                        </div>
                        <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Growth</a>
                      </div>
                    </div>
                    <h4 class="sr-only">Features</h4>
                    <ul role="list" class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-t divide-y lg:border-t-0">
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Basic invoicing</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Easy to use accounting</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Mutli-accounts</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Tax planning toolkit</span>
                        </li>
                      
                    </ul>
                  </div>
                
              </div>
            </div>
          </div>
          <ul class="max-w-2xl mx-auto mt-20 divide-y  shadow shadow-blue-600 rounded-xl">
            <!-- Event FAQ Item 1 -->
            <li>
                <details class="group">
                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                        <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                            </path>
                        </svg>
                        <span>How do I register for an event?</span>
                    </summary>
        
                    <article class="px-4 pb-4">
                        <p>
                            To register for an event, please follow these steps:
                        </p>
                        <ol class="list-decimal pl-8">
                            <li>Visit our event registration page</li>
                            <li>Find the event you want to attend</li>
                            <li>Click on the "Register" button</li>
                            <li>Complete the registration form</li>
                        </ol>
                        <p>
                            Once registered, you'll receive a confirmation email with further details.
                        </p>
                    </article>
                </details>
            </li>
        
            <!-- Event FAQ Item 2 -->
            <li>
                <details class="group">
                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                        <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                            </path>
                        </svg>
                        <span>What happens if the event is canceled?</span>
                    </summary>
        
                    <article class="px-4 pb-4">
                        <p>
                            In the event of a cancellation, we will notify all registered participants via email and provide
                            information on refunds or rescheduling. Please check your email and our website for updates.
                        </p>
                    </article>
                </details>
            </li>
        
            <!-- Event FAQ Item 3 -->
            <li>
                <details class="group">
                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                        <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                            </path>
                        </svg>
                        <span>Are there any age restrictions for events?</span>
                    </summary>
        
                    <article class="px-4 pb-4">
                        <p>
                            Age restrictions may vary for each event. Please check the event details on our website or
                            contact our support team for specific information regarding age requirements.
                        </p>
                    </article>
                </details>
            </li>

        </ul>
        <br><br><br>
        <br><br><br>
        
      </main>
    </body>
</html>

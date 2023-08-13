<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url('/css/main.css')}}">
        <link rel="icon" href="https://cdn.pixabay.com/photo/2023/08/13/19/28/19-28-00-205_1280.png">
        <title>ConcertSpot</title>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center dark:bg-purple-900 selection:bg-red-500 selection:text-white">
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

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                

                <div class="mt-16 flex space-x-6 md:space-x-6 lg:space-x-8 gap-6 lg:gap-8">
                  
                        <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
                        <div> 
                            <div class="h-20 w-20 bg-green flex items-center justify-center rounded-full">
                                    <img src="https://svgshare.com/i/wEp.svg" />
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white" style="text-align:center;">Darryl Stash Balatay Kobayashi</h2>

                                
                                    <ul class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed" style="text-align:center;">
                                        <li>Front-end Developer</li>
                                        <li>Database Manager</li>
                                    </ul>
                                
                            </div>

                        </a>
             
                        <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
                            <div>
                                <div class="h-20 w-20 bg-green flex items-center justify-center rounded-full">
                                <img src="https://svgshare.com/i/wDq.svg"/>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white"  style="text-align:center;">Edmhar Reli Alcones</h2>

                                <ul class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed" style="text-align:center;">
                                        <li>Front-end Developer</li>
                                        <li>Database Manager</li>
                                    </ul>
                            </div>

                        </a>
               
                        <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
                            <div>
                                <div class="h-20 w-20 bg-green flex items-center justify-center rounded-full">
                                <img src=" https://svgshare.com/i/wDf.svg"/>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white"  style="text-align:center;">Jenesis Padrinao Bedana</h2>

                                <ul class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed" style="text-align:center;">
                                        <li>Front-end Developer</li>
                                        <li>Database Manager</li>
                                    </ul>
                                </p>
                            </div>

                           
                        </a>
                 
                </div>

               
            </div>
        </div>
    </body>
</html>

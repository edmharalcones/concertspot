<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ConcertSpot</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
        <link rel="icon" href="https://i.postimg.cc/cHpPvCmn/concert-spot-logo-3.png">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('admin') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
            <!-- Page Heading -->
         
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                          {{ __('Admin') }}
                  </h2>
                    </div>
                </header>
         

            <!-- Page Content -->
            <main>
                
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Active Events") }}

                </div>
                <div class="p-6 text-gray-900">
                    <div id="slider" class="carousel slide carousel-dark text-center" data-interval="false">
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                             <span class="carousel-control-next-icon"></span>
                             </button>
 
        <!-- The slideshow/carousel -->
                             <div class="carousel-inner">
          <!-- 1st slide -->
                            <div class="carousel-item active">
                                 <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img class="mb-4"
                                            src="resources/Anna.png"
                                            style="width: 330px;" />
                                             <h4 class="mb-3">Anna</h4>
                                             <p class="comment">
        
                                             "I had an amazing experience adopting a dog from Meowoof. Our new dog is full of 
                                              love and brings so much happiness to our home."
                                              </p>
                
                                    </div>
      
                                         <div class="col-lg-4 d-lg-block">
                                             <img class="mb-4"
                                             src="resources/Alex.png"
                    style="width: 330px;" />
                  <h4 class="mb-3">Alex</h4>
                  <p class="comment">
                
                    "Felix has fit so wonderfully into our home. He is very sweet and give us lots of 
                    laugh. Thank you, Meowoof."
                  </p>
              
                </div>
      
                <div class="col-lg-4  d-lg-block">
                  <img class="mb-4"
                  src="resources/Mia.png"
                    style="width: 330px;" />
                  <h4 class="mb-3">Mia</h4>
                  <p class="comment">
                    "I adopted a cat that we fell in love with from Meowoof. She is a lovely and quiet girl."
                  </p>
                </div>
              </div>
            </div>
          </div>
      
          <!-- 2nd slide -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <img class="mb-4"
                  src="resources/Kate.png"
                    style="width: 330px;" />
                  <h4 class="mb-3">Kate</h4>
                  <p class="comment">
                 
                    "Mango is one of the best things that has ever happened to me. Having a dog 
                    from Meowoof is pure happiness."

                  </p>
                </div>
      
                <div class="col-lg-4 d-lg-block">
                  <img class="mb-4"
                  src="resources/Ben.png"
                    style="width: 330px;" />
                  <h4 class="mb-3">Ben</h4>
                  <p class="comment">
                 
                    "Meowoof helped us find a calm and gentle dog that fits perfectly 
                    into our lifestyle."

                  </p>
                  
                </div>
      
                <div class="col-lg-4 d-lg-block">
                  <img class="mb-4"
                  src="resources/Dan.png"
                    style="width: 330px;" />
                  <h4 class="mb-3">Dan</h4>
                  <p class="comment">
                   
                    "Tiger was the first dog we saw and it was love at first sight. 
                    He is an adorable addition to our family. Thanks, Meowoof."
                  </p>
                 
                </div>
              </div>
            </div>
          </div>
      
          <!-- 3rd slide -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <img class="mb-4"
                  src="resources/Rob.png"
                    style="width: 330px;" />
                  <h4 class="mb-3">Rob</h4>
                  <p class="comment">
            
                    "We adopted a senior cat from Meowoof and it was the best decision we 
                    ever made. She brings so much warmth and comfort to our home."
                  </p>
                  
                </div>
      
                <div class="col-lg-4  d-lg-block">
                  <img class="mb-4"
                  src="resources/Nina.png"
                    style="width: 330px;" />
                  <h4 class="mb-3">Nina</h4>
                  <p class="comment">
             
                    "Thank you, Meowoof, for the wonderful experience adopting Sage. 
                    She is the sweetest girl."
                  </p>
                  
                </div>
      
                <div class="col-lg-4  d-lg-block">
                  <img class="mb-4"
                  src="resources/Maddie.png"
                    style="width: 330px;" />
                  <h4 class="mb-3">Maddie</h4>
                  <p class="comment">
                 
                    "Batman has brought new joy to our family. Thank you, Meowoof."

                  </p>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
                </div>

            </div>
        </div>
    </div>
        
            <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Create an Event") }}
                    <br>
                    <form>
                    <div class="input-group mb-3">
                   <span class="input-group-text" id="event_name">Event Name</span>
                   <input type="text" class="form-control" placeholder="Enter event name" aria-label="event_name" aria-describedby="event_name">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                   <span class="input-group-text" id="event_artists">Event Artists</span>
                   <input type="text" class="form-control" placeholder="Enter event artists" aria-label="event_artists" aria-describedby="event_artists">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                   <span class="input-group-text" id="event_ticket_price">Ticket Price</span>
                   <input type="number" class="form-control" placeholder="Enter ticket price in php " aria-label="event_artists" aria-describedby="event_artists">
                    </div>
                    <br>
                    <form action="">
                    <label for="birthday">Event Start Date</label>
                   <input type="date" id="Event start date" name="Event start date">
                   <input type="submit">
                    </form>
                    <form action="">
                    <label for="birthday">Event End Date &nbsp;</label>
                   <input type="date" id="Event end date" name="Event end date">
                   <input type="submit">
                    </form>
                    <br>
                    <label class="form-label" for="event_banner">Upload Event Banner</label>
                    <input type="file" class="form-control" id="event_banner" />
                    <br>

                    </form>

                </div>
                <div class="p-6 text-gray-900">
                
        </div>
    </div>

            </main>
           
            
        </div>
    </body>
</html>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{url('/css/main.css')}}">
        <link rel="icon" href="https://cdn.pixabay.com/photo/2023/08/13/19/28/19-28-00-205_1280.png">
        <title>ConcertSpot</title>
    </head>
    <body class="antialiased">

<nav class="navbar navbar-expand-lg " x-data="{ open: false }">
  <div class="container-fluid  h-16">
      <div class="navbar-brands" >
      <a href="{{ route('dashboard') }}">
                        <x-application-logo/>
                    </a>
        </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown"  style="margin-right: 40px;">
          <ul class="navbar-nav" style="display:flex; justify-content:end;">
          <div class="shrink-0 flex items-center">
                   
                   @if (Route::has('login'))
                   <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                   @auth
                       <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover::bg-purple focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                   @else
                       <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover::bg-purple focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                       @if (Route::has('register'))
                           <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover::bg-purple focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                       @endif
                   @endauth
               </div>
           @endif
          </ul>
      </div>
  </div>
</nav>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center dark:bg-purple-900 selection:bg-red-500 selection:text-white">
            
          
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                

                <div class="mt-16">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://i.postimg.cc/GpsxS7pX/carrousel-1.png" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://i.postimg.cc/GpsxS7pX/carrousel-1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://i.postimg.cc/GpsxS7pX/carrousel-1.png" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
                </div>
                <br>
                <br>
                <br>
                <h2 class="text-gray-500 dark:text-gray-400">News & Updates</h2>
                        <hr>

                    <div class="mt-16 flex ">
                    <div class="row d-flex gap-6 justify-content-center">
                        <a href="#" >
                    
                        <div class="col-3 card" style="width: 18rem;padding:0;">
                        <img src="https://images.pexels.com/photos/2240763/pexels-photo-2240763.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Limited tickets available – reserve yours now!</h5>
                        <p class="card-text">
                        "Seize the moment – limited tickets await! Reserve yours now and be part of an unforgettable concert experience."</p>
                        </a>
                    </div>
                    </div>

                    <div class="col-3 card" style="width: 18rem;padding:0;">
                    <a href="https://www.musicalmum.com/how-early-should-you-get-to-a-concert/"  target="_blank" >
                        <img src="https://images.pexels.com/photos/15555382/pexels-photo-15555382/free-photo-of-traffic-jam-at-night.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">How Early Should You Get To A Concert?</h5>
                        <p class="card-text">
                        "Unveil the Concert Timing Secret: Optimal Arrival Explained. Your Ultimate Guide to Timing Your Musical Experience!"</p>
                    </a>    
                    </div>
                    </div>

                    <div class="col-3 card" style="width: 18rem;padding:0;">
                    <a href="https://matadornetwork.com/read/best-tips-concert-safety/" target="_blank" >
                        <img src="https://images.pexels.com/photos/4889278/pexels-photo-4889278.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Stay Concert-Smart: Top Safety Tips from Experts Revealed!</h5>
                        <p class="card-text">"Elevate your experience, stay secure, and groove with confidence as we reveal top insights from the pros."</p>
                    </a>   
                    </div>
                    </div>

                    <div class="col-3 card" style="width: 18rem;padding:0;">
                    <a href="https://parokyaniedgar21.wordpress.com/about/" target="_blank"  >
                        <img src="https://sa.kapamilya.com/absnews/abscbnnews/media/2019/life/05/30/20180930-parokya-ni-edgar.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Learn more about the band!</h5>
                        <p class="card-text">
                        "Dive Deeper into the Parokya ni Edgar Experience: Unveil a Whole New Level!"</p>
                        </a>  
                    </div>
                    </div>
                </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="{{ route('team') }}" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                About the Team
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                       All rights reserved 2024
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
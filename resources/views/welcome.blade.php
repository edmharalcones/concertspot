<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/2a7d893638.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
        
        <link rel="stylesheet" href="{{url('/css/main.css')}}">
        <link rel="icon" href="https://i.postimg.cc/cHpPvCmn/concert-spot-logo-3.png">
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
                <img src="https://i.postimg.cc/JzXPrx9x/banner-1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://i.postimg.cc/gjrHfHVv/banner-2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://i.postimg.cc/rF09jgFT/banner-3.png" class="d-block w-100" alt="...">
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
                    @if(auth()->check())
                        <a href="{{ url('/tickets') }}" >
                        @else
                        <a href="{{ url('/login') }}" >
                    @endif
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
                    <br>
                <br>
                <br>
                <h2 class="text-gray-500 dark:text-gray-400">Active Events</h2>
                        <hr>

                    <div class="mt-16 flex justify-content-center">
                    <div class="row d-flex gap-6 justify-content-center">
                       
                
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "laravel";
    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "SELECT *, DATE_FORMAT(event_time, '%h:%i %p') AS formatted_event_time FROM events";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->connect_error);
    }

    while ($row = $result->fetch_assoc()) {

        echo '
        <div class="col-3 card" style="width: 18rem;padding:0;">
            <img src="' . $row['banner_image'] . '" class="card-img-top" alt="Banner Image">
            <div class="card-body">
                <h5 class="card-title">' . $row["event_name"] . '</h5>
                <p class="card-text">
                    <strong>Artists:</strong> ' . $row["event_artists"] . '<br>
                    <strong>Ticket Price:</strong> ' . $row["ticket_price"] . '<br>
                    <strong>Start Date:</strong> ' . $row["start_date"] . '<br>
                    <strong>End Date:</strong> ' . $row["end_date"] . '<br>
                    <strong>Event Time:</strong> ' . $row["formatted_event_time"] . '
                </p>';
    
        if (auth()->check()) {
            echo '<a href="' . url('/tickets') . '" class="btn btn-success">Book Now!</a>';
        } else {
            echo '<a href="' . url('/login') . '" class="btn btn-success">Book Now!</a>';
        }
    
        echo '
            </div>
        </div>';
    }
    ?>
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
                    <a href="https://www.facebook.com/login/" target="blank_">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#9ca3af}</style><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                    </a>
                    </div>
                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    <a href="https://www.instagram.com/accounts/login/"  target="blank_">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#9ca3af}</style><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg>
                    </a>
                    </div>
                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    <a href="https://www.youtube.com/account"  target="blank_">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#9ca3af}</style><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                       All rights reserved 2024
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
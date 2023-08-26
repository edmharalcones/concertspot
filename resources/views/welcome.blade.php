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
        <style>
    @media (max-width: 640px) {
        .banner-page{
            display: none;
        }
        .navbar{
            padding-bottom:50px !important;
            padding-top:30px !important;
            
        }
    }
</style>
        <title>ConcertSpot</title>
    </head>
    <body class="antialiased">
<nav class="navbar navbar-expand-lg "  style="padding-bottom:20px;padding-top:20px;">
  <div class="container-fluid  h-16">
      <div class="navbar-brands" >
      <a href="{{ route('dashboard') }}">
                        <x-application-logo/>
                    </a>
        </div>
     
          <ul class="navbar-nav" style="display:flex; justify-content:end;">
          <div class="shrink-0 flex items-center">
                   
                   @if (Route::has('login'))
                   <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                   @auth
                       <a href="{{ url('/dashboard') }}" class="font-semibold dark:hover::bg-purple focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                   @else
                       <a href="{{ route('login') }}" class="font-semibold dark:hover::bg-purple focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                       @if (Route::has('register'))
                           <a href="{{ route('register') }}" class="ml-4 font-semibold  dark:hover::bg-purple focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                       @endif
                   @endauth
               </div>
           @endif
          </ul>
      </div>
  
</nav>

</nav>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center dark:bg-purple-900 selection:bg-red-500 selection:text-white">
            
          
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                

                <div class="mt-16">
                    <div class="row">
               <div class="jumbotron col">
                   <br><br><br>
                     <p class="lead" style="color:white;">Where the excitement begins.</p>
                            <h1 class="display-4" style="color:white;font-weight:500;">Book your tickets now!</h1>
                            <br>
                            <p class="lead">
                                <ul style="color:white;list-style-type:circle;font-size:1rem;">
                                    <li>Book with Confidence: Secure, Safe, and Reliable Reservations</li>
                                    <li>Your Pass to Live Entertainment</li>
                                </ul>
                                </p>
                 <br>           
  <p class="lead">
        @if(auth()->check())
                        <a  class="btn" href="{{ url('/tickets') }}" role="button" style="background-color:white;">Get started
                        <i class="fa-solid fa-angle-right"></i></a>
                        @else
                        <a   class="btn" href="{{ url('/login') }}" role="button" style="background-color:white;">Get started
                        <i class="fa-solid fa-angle-right"></i></a>
                    @endif
                    
  </p>
</div>
<div class="col flex justify-content-end banner-page">
    <img src="https://i.postimg.cc/g2wctn6V/Untitled-design-3.png" heigh="auto"/>
</div>
</div>
                </div>
                <br>
                <br>
                <br>
                <h2 style="color:white;font-weight:500;">News & Updates</h2>
                <br>
                <p style="color:white; font-size:smaller;">Get yourself updated with the latest news!</p>
                <br>
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
                <div class="container" style="border-radius: 25px;opacity=0.5;background-color: rgba(254, 175, 229, 0.1);">
                <div class="p-5">
                 <h2  style="color:white;font-weight:500;">Active Events</h2>
                <br>
                <p style="color:white; font-size:smaller;">What are you waiting for?</p>
                </div>
                <br>
                        

                    <div class="mt-16 flex justify-content-center">
                    <div class="row d-flex gap-6 justify-content-center">
                       
                
    <?php
    $servername = "localhost";
    $username = "u548574294_root";
    $password = "AAaa!!8520";
    $database = "u548574294_laravel";
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
<div class="col-3 card mb-5" style="width: 18rem; padding: 0;">
    <img src="' . $row['banner_image'] . '" class="card-img-top" alt="Banner Image">
    <div class="card-body">
        <h5 class="card-title">' . $row["event_name"] . '</h5>
        <p class="card-text">
            <strong>Artists:</strong> ' . $row["event_artists"] . '<br>
            <strong>Start Date:</strong> ' . $row["start_date"] . '<br>
            <strong>End Date:</strong> ' . $row["end_date"] . '<br>
            <strong>Event Time:</strong> ' . $row["formatted_event_time"] . '
        </p>
        <br>';

if (auth()->check()) {
    echo '<div class="button-container" style="display: flex; justify-content: center;">
              <a href="' . url('/tickets') . '" class="btn btn-lg" style="width: 100%;background-color:#feafe5;">Book Now!
              <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>';
} else {
    echo '<div class="button-container" style="display: flex; justify-content: center;">
              <a href="' . url('/login') . '" class="btn btn-lg" style="width: 100%;background-color:#feafe5;border-radius:0px;">Book Now!
              <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>';
}

echo '
    </div>
</div>';

    }
    ?>
</div>
                
                </div>
</div>
<br>
<br>         

<div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">   

    <div class="flex justify-center mt-5 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
            <div class="flex items-center gap-4">
                <img src="https://i.postimg.cc/cHpPvCmn/concert-spot-logo-3.png" width="30px" height="auto"/>ConcertSpot.online
            </div>
            <div class="flex items-center gap-4">
            <p style="text-align: justify;">
                Our goal is to provide you with a seamless and convenient platform<br>
                to centralize all your concert ticketing needs. From discovering upcoming events <br>
                to purchasing tickets our site is your one-stop destination for managing <br>
                your concert experiences . Join us in simplifying and enhancing your concert journey!
            </p>
            </div>
        </div>
                   
        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Login
                </a>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('register') }}" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Register
                </a>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ url('/tickets') }}" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Buy Tickets
                </a>
            </div>
        </div>
        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            
            <div class="flex items-center gap-4">
                <a href="{{ route('faq') }}" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    FAQs
                </a>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('contact') }}" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Contact us
                </a>
            </div>
            <div class="flex items-center gap-4">
                 <a href="{{ route('team') }}" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    About the Team
                </a>
            </div>
        </div>
    </div>
<br>
<hr>
    <div class="flex justify-center mt-1 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
            <div class="flex items-center gap-2">
            <a href="https://www.facebook.com/login/" target="blank_">
                   <i class="fa-brands fa-square-facebook fa-lg" style="color:#9ca3af;"></i>
                    </a>
                    <a href="https://www.instagram.com/accounts/login/"  target="blank_" >
                   <i class="fa-brands fa-square-instagram fa-lg" style="color:#9ca3af;"></i>
                    </a>
                    <a href="https://www.youtube.com/account"  target="blank_">
                    <i class="fa-brands fa-square-youtube fa-lg" style="color:#9ca3af;"></i>
                    </a>
                    
            </div>
        </div>
                   
        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            <div class="flex items-center gap-4">
               
            </div>
        </div>
        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            <div class="flex items-center gap-4">
            All rights reserved 2023
            
            </div>
        </div>
    </div>



</div>
    </body>
</html>
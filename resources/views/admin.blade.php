
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">    
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
              
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    
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
                <div class="table-responsive">
                <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Artists</th>
            <th>Ticket Types</th>
            <th>Ticket Prices</th>
            <th>Current available</th>
            <th>Banner</th>
            <th>Start date</th>
            <th>End date</th>
            <th>Event Time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
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
            die("Invalid query: " . $connection->error);
        }

        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                <td>' . $row["id"] . '</td>
                <td>' . $row["event_name"] . '</td>
                <td>' . $row["event_artists"] . '</td>
                <td>
                    <ul>
                        <li>VIP</li>
                        <li>Patron A</li>
                        <li>Patron B</li>
                        <li>Upper Box</li>
                        <li>Lower Box</li>
                        <li>Gen Ad</li>
                    </ul>
                </td>
                <td>
                    <ul>';
    
            $ticketPricesQuery = "SELECT ticket_price FROM tickets WHERE event_id = " . $row["id"];
            $ticketPricesResult = $connection->query($ticketPricesQuery);
            while ($ticketPriceRow = $ticketPricesResult->fetch_assoc()) {
                echo '<li>' . $ticketPriceRow["ticket_price"] . '</li>';
            }
            echo '</ul>
                </td>
                <td>
                    <ul>';
          
            $maxTicketNumbersQuery = "SELECT max_tickets FROM tickets WHERE event_id = " . $row["id"];
            $maxTicketNumbersResult = $connection->query($maxTicketNumbersQuery);
            while ($maxTicketNumberRow = $maxTicketNumbersResult->fetch_assoc()) {
                echo '<li>' . $maxTicketNumberRow["max_tickets"] . '</li>';
            }
            echo '</ul>
                </td>
                <td><img src="' . $row['banner_image'] . '" width="50" height="50" alt="banner image"/></td>
                <td>' . $row["start_date"] . '</td>
                <td>' . $row["end_date"] . '</td>
                <td>' . $row["formatted_event_time"] . '</td>
                <td>
                    <button class="btn btn-danger btn-sm">
                        <a href="' . route('delete', ['id' => $row['id']]) . '" class="text-light">Delete</a>
                    </button>
                </td>
            </tr>';
        }
        ?>
    </tbody>
</table>
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
                    @if(session('flash_message'))
                                <div class="alert alert-success">
                                    {{ session('flash_message') }}
                                </div>
                            @endif

                            @if($errors->has('error'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('error') }}
                                </div>
                            @endif

                            <form action="{{ route('dashboard.post') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    
    <div class="input-group mb-3">
        <span class="input-group-text" id="event_name">Event Name</span>
        <input type="text" class="form-control" placeholder="Enter event name" name="event_name" id="event_name"required>
    </div>
    <br>
    
    <div class="input-group mb-3">
        <span class="input-group-text" id="event_artists">Event Artists</span>
        <input type="text" class="form-control" placeholder="Enter event artists" name="event_artists" id="event_artists"required>
    </div>
    <br>

    <label class="form-label" for="banner_image">Upload Event Banner</label><br>
    <input type="file" class="form-control" id="banner_image" name="banner_image" />
    <br>
    
    <label for="start_date">Event Start Date</label>
    <input type="date" id="start_date" min="2010-01-01" name="start_date" required>
    
    <label for="end_date">Event End Date &nbsp;</label>
    <input type="date" id="end_date" min="2010-01-01" name="end_date" required>
    
    <label for="event_time">Event time:&nbsp;</label>
    <input type="time" id="event_time" name="event_time"required>
    <br>
    <br>
    

    <h2>Ticket Types:</h2>
    <br>
    <div class="input-group mb-3">
        <label for="vip_price">VIP Ticket Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-1">
        <input type="number" name="vip_price" id ="vip_price"class="form-control" required/><br>
            </div>
        <label for="vip_max"> &nbsp;  &nbsp;Max Tickets (VIP): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
        <div class="col-sm-1">
        <input type="number" name="vip_max" id-="vip_max" class="form-control" required/><br>
        </div>
    </div>

    <div class="input-group mb-3">
        <label for="patrona_price">Patron A Ticket Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-1">
        <input type="number"  name="patronA_price" id="patronA_price" class="form-control" required/><br>
            </div>
        <label for="patrona_max"> &nbsp;  &nbsp;Max Tickets (Patron A): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-1">
        <input type="number" name="patronA_max" id="patronA_max" class="form-control" required/><br>
        </div>
    </div>

    <div class="input-group mb-3">
        <label for="patronb_price">Patron B Ticket Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-1">
        <input type="number" name="patronB_price" id="patronB_price" class="form-control" required/><br>
            </div>
        <label for="patronb_max"> &nbsp;  &nbsp;Max Tickets (Patron B): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-1">
        <input type="number" name="patronB_max" id="patronB_max" class="form-control" required/><br>
        </div>
    </div>

    <div class="input-group mb-3">
        <label for="lower_price">Lower Box Ticket Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-1">
        <input type="number"  name="lower_price" id="lower_price" class="form-control" required/><br>
            </div>
        <label for="lower_max"> &nbsp;  &nbsp;Max Tickets (Lower Box): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-1">
        <input type="number" name="lower_max" id="lower_max" class="form-control" required/><br>
        </div>
    </div>

    <div class="input-group mb-3">
        <label for="upper_price">Upper Box Ticket Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-1">
        <input type="number"  name="upper_price" id="upper_price" class="form-control" required/><br>
            </div>
        <label for="upper_max"> &nbsp;  &nbsp;Max Tickets (Upper Box): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <div class="col-sm-1">
        <input type="number" name="upper_max" id="upper_max" class="form-control" required/><br>
        </div>
    </div>

    <div class="input-group mb-3">
        <label for="genad_price">General Admission Ticket Price: &nbsp;</label>
        <div class="col-sm-1">
        <input type="number"  name="genAd_price" id="genAd_price" class="form-control" required/><br>
            </div>
        <label for="genad_max"> &nbsp;  &nbsp;Max Tickets (General Admission ): &nbsp;</label>
        <div class="col-sm-1">
        <input type="number" name="genAd_max" id="genAd_max" class="form-control" required/><br>
        </div>
    </div>
        

     </div>
    
     <script>

const currentDate = new Date();
        
  
        const formattedDate = currentDate.toISOString().slice(0, 10);

       
        document.getElementById("start_date").min = formattedDate;
        document.getElementById("end_date").min = formattedDate;
    
    function validateAndSubmit() {
        var startDate = new Date(document.getElementById("start_date").value);
        var endDate = new Date(document.getElementById("end_date").value);
        
        if (endDate < startDate) {
            alert("End date cannot be earlier than start date. Please correct the dates.");
            return false; 
        }
        
        return true; 
    }
</script>
    <div class="container px-4">
        <div class="flex justify-start mt-4">
            <x-primary-button onclick="return validateAndSubmit();">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </div>
    <br>
</form>
                    <br>
                    
                    

                </div>
                <div class="p-6 text-gray-900">
                
        </div>
    </div>

            </main>
           
            
        </div>
       

    </body>
</html>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous" ></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/2a7d893638.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url('/css/main.css')}}">
        <link rel="icon" href="https://i.postimg.cc/cHpPvCmn/concert-spot-logo-3.png">
        <title>ConcertSpot</title>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center dark:bg-purple-900 selection:bg-red-500 selection:text-white" >
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Back</a>
                </div>
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h2 class="text-gray-500 dark:text-gray-400">Contact us</h2>
                        <hr>
                <div class="mt-16 flex space-x-6 md:space-x-6 lg:space-x-8 gap-6 lg:gap-8">                
                <div class="container ">
                    <div>
                        <h5 class="text-gray-500 dark:text-gray-400">
                        <i class="fa-solid fa-envelope" style="color: #46e1a8;"></i>
                        tempomaestro@concertspot.online</h5>
                    </div>
                    <br>
                    <div>
                    <h5 class="text-gray-500 dark:text-gray-400">
                        <i class="fa-solid fa-map-location-dot" style="color: #46e1a8;"></i>
                        General Roxas Ave, Cubao, Quezon City, 1109 Metro Manila </h5>
                    </div>
                    <br>
                    <div>
                    <h5 class="text-gray-500 dark:text-gray-400">
                        <i class="fa-solid fa-phone-volume" style="color: #46e1a8;"></i>
                        (046) 111-223</h5>
                     </div>                 
                </div>
            </div>
</div>


            <div class="max-w-7xl mx-auto adjust">
            <h2 class="text-gray-500 dark:text-gray-400">Book your event</h2>
                        <hr>
                <div class="mt-16 flex">                
                <div class="container-fluid">
                <form target="_blank" action="https://formsubmit.co/43d6e570d0ced82d583dba3d2a2fd5f3 " method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <div class="form-row">
                <div class="col">
                <label for="start_date" class="text-gray-500 dark:text-gray-400">Event Start Date</label>
                   <input type="date" id="start_date" min="2010-01-01" name="start_date" class="form-control">
                    <label for="end_date" class="text-gray-500 dark:text-gray-400">Event End Date &nbsp;</label>
                   <input type="date" id="end_date" min="2010-01-01" name="end_date"  class="form-control">
                   </div>
                   <br>
            
                <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email address.." required>
                </div>
                </div>
                </div>
                <br>
                <div class="form-group">
                <textarea placeholder="Your Message" class="form-control" name="message" rows="10" required></textarea>
                </div>
                <br>
                <script>

const currentDate = new Date();
        
        // Format the date in YYYY-MM-DD format (required by date input)
        const formattedDate = currentDate.toISOString().slice(0, 10);

        // Set the minimum attribute of the input to the current date
        document.getElementById("start_date").min = formattedDate;
        document.getElementById("end_date").min = formattedDate;
    // Function to handle form submission
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

                <button type="submit" class="btn btn-success" onclick="return validateAndSubmit();">Submit Message</button>
                <input type="hidden" name="_next" value="{{ route('contact') }}">
                 <input type="hidden" name="_autoresponse" value="Hi Concert Junkie!

Just a quick note to let you know that your message landed safely in our inbox. Like a well-tuned guitar string, we'll be sure to get back to you with some rocking information shortly.

Rock on,
The ConcertSpot Crew">
                </form>
                </div>
                  
                </div>
            </div>


 </div>
    </body>
</html>

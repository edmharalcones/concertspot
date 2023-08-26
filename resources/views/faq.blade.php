<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous" ></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url('/css/main.css')}}">
        <link rel="icon" href="https://i.postimg.cc/cHpPvCmn/concert-spot-logo-3.png">
        <title>ConcertSpot</title>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center dark:bg-purple-900 selection:bg-red-500 selection:text-white">
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Back</a>
                </div>
            <div class="max-w-7xl p-6 lg:p-8">
            <h2 class="text-gray-500 dark:text-gray-400">FAQs</h2>
                        <hr>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Can I choose my seats when purchasing a ticket?
                                </button>
                             </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You have the option to choose your preferred section for all events, subject to availability.
                                Our ticketing system will assign the next accessible seats at the time of your transaction to speed up the booking process.
                                The ability to select seats is provided via the 'Buy Tickets' feature, which is exclusively accessible for ongoing events.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      How do I know if my order is confirmed?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Upon the completion of your online transaction, you will be sent an email confirmation
       to the address you provided during the booking process. Kindly ensure that this email hasn't
        been directed to your "Spam" or "Junk Mail" folder.<br>
        As an alternative, you can also access your purchase information by navigating to the "My Tickets" section within your ConcertSpot account.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      What is our refund and exchange policy?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      As per our purchasing policy, once your booking is confirmed, no refunds, exchanges, or cancellations
       can be granted unless the event undergoes cancellation or rescheduling.
    We strongly advise carefully reviewing your booking details before making a payment.<br>
    Nonetheless, if you intend to seek an exchange or refund and want the Event Organizer to consider it, 
    you must adhere to a specific procedure and furnish all the necessary supporting documents. This typically 
    involves submitting a refund request and supplying pertinent documents that substantiate your rationale 
    for the request, such as a medical note or doctor's certificate. It's crucial to understand that all appeals 
    for ticket refunds and exchanges are subject to approval, and the decision of the Event Organizer is final.

      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
      Can I hold seats and pay for them later?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Tickets must be paid for at the time of your booking.  This practice ensures that the tickets
        are secured and reserved for you, and it's an essential step in the process of confirming your attendance to the event.

      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
      Is there a need to provide my personal details when purchasing tickets?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Yes, it is important to provide your personal details so that we can assist you if you have questions about
       your booking or when we need to contact you for any changes
       or cancellation to the event. 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
    How do I go about reserving the venue for an event?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      To secure the event venue, just get in touch with us through our email address (tempomaestro@concertspot.online), give us a call at (046) 111-223, or use the 'Book an event' section on our website <a href="https://concertspot.online/public/contact" target="blank_" style="text-decoration: underline;">here</a>.
      </div>
    </div>
  </div>




                </div>  


                
                
            </div>

        </div>
    </body>
</html>

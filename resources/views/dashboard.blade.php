<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                     <h2 style="color:#421A85;font-weight:500;font-size:2rem;">Your events</h2>
                </div>
                 <div class="m-4 flex justify-content-center">
                    <div class="row d-flex gap-6 justify-content-center">
                       
                
   
</div>
                
                </div>
                </div>
                <br>
                <br>
                <br>
 <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    
                     <h2 style="color:#421A85;font-weight:500;font-size:1rem;">Send us a message or Report a bug</h2>
                
                    
                    <br>
                    <div class="container">

                        <form target="_blank" action="https://formsubmit.co/43d6e570d0ced82d583dba3d2a2fd5f3" method="POST" enctype="multipart/form-data">
                         <div class="form-group">
                        <div class="form-row">
                        <div class="col">
                            <br>
                        <input type="text" name="name" class="form-control" value= "{{ Auth::user()->name }}" required>
                        </div>
                        <br>
                         <div class="col">
                    <input type="email" name="email" class="form-control" value= "{{ Auth::user()->email }}" required>
                    <br>
                    </div>
                 </div>
                </div>
                     <div class="form-group">
                        <textarea placeholder="Your Message" class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                         <label class="form-label" for="attachment">Upload bug screenshot(optional):</label><br>
     <input type="file" name="attachment" accept="image/png, image/jpeg">
                    </div>
                    <div class="container px-4">
        <div class="flex justify-start mt-4">
            <x-primary-button >
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </div>
            
                    <input type="hidden" name="_next" value="{{ route('dashboard') }}">
                    <input type="hidden" name="_autoresponse" value="Hi Concert Junkie!

Just a quick note to let you know that your message landed safely in our inbox. Like a well-tuned guitar string, we'll be sure to get back to you with some rocking information shortly.

Rock on,
The ConcertSpot Crew">
             </form>
                </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

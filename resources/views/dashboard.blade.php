<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Your events") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("Send us a message or Report a bug") }}
                    <br>
                    <div class="container">

                        <form target="_blank" action="https://formsubmit.co/ea8624ae47adc2d294462a2b0cd43a67  " method="POST">
                         <div class="form-group">
                        <div class="form-row">
                        <div class="col">
                        <input type="text" name="name" class="form-control" value= "{{ Auth::user()->name }}" required>
                        </div>
                         <div class="col">
                    <input type="email" name="email" class="form-control" value= "{{ Auth::user()->email }}" required>
                    </div>
                 </div>
                </div>
                     <div class="form-group">
                        <textarea placeholder="Your Message" class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-block">Submit Message</button>
                    <input type="hidden" name="_next" value="{{ route('dashboard') }}">
             </form>
                </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-blue-800">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/download.jpeg') }}" alt="Sky Pet Animal Hospital">
            </div>
            <div class="text-center text-2xl font-bold mb-6">Paw Care</div>
            <x-validation-errors class="mb-4" />

            <div class="flex items-center justify-between mb-8">
                <x-button class="ml-16 w-64 flex justify-center items-center" onclick="window.location='{{ route('login') }}'">
                     {{ __('Clinic') }}
                </x-button>
            </div>  
         
            <div class="flex items-center justify-between mb-8">
                <button class="ml-16 w-64 flex justify-center items-center" onclick="window.location='{{ route('admindashboard') }}'">
                     {{ __('Admin') }}
                <button>
            </div>  

            </div>

           
        </div>
    </div>
</x-guest-layout>

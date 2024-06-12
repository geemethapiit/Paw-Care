<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex h-screen custom-bg-color">
        <x-sidebar />
        <div class="flex-1 p-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 box-bg-color">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-gray-100 p-4 rounded-lg text-center">
                            <h3 class="font-semibold">Appointments</h3>
                            <p class="text-2xl">16</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg text-center">
                            <h3 class="font-semibold">Medical Records</h3>
                            <p class="text-2xl">32</p>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg text-center">
                            <h3 class="font-semibold">Feedbacks</h3>
                            <p class="text-2xl">02</p>
                        </div>
                    </div>
                </div>
            </div>
            <table class="w-full bg-white shadow rounded">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Service Type</th>
                            <th class="px-4 py-2">Services</th>
                            <th class="px-4 py-2">Veterinarian</th>
                            <th class="px-4 py-2">Available</th>
                        </tr>
                    </thead>
                    </table>
        </div>
    </div>
</x-app-layout>



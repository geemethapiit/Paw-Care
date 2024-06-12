<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex h-screen">
        <x-sidebar />


    <div class="container">
        <div class="form-container">
            <h3 class="form-title">Add New Service</h3>


            <form method="POST" action="{{ route('medical-record.store') }}">
    @csrf
    <div class="form-group">
        <label for="pet_name">Service Type</label>
        <input type="text" name="pet_name" id="pet_name" required>
        @error('pet_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="customer_name">Service</label>
        <input type="text" name="customer_name" id="customer_name" required>
        @error('customer_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="date_of_record">location</label>
        <input type="date" name="date_of_record" id="date_of_record" required>
        @error('date_of_record')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="treatment_given">Veterinarians</label>
        <input type="text" name="treatment_given" id="treatment_given" required>
        @error('treatment_given')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="veterinarian_name">Veterinarian</label>
        <input type="text" name="veterinarian_name" id="veterinarian_name" required>
        @error('veterinarian_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn-submit">Add</button>
    </div>
</form>


           
        </div>
    </div>

</x-app-layout>

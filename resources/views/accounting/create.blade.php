@extends('layouts.app')
@section('content')
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="p-6 bg-gray-800 rounded-md shadow-md">
            <h1 class="text-white text-3xl font-bold mb-4">Create Car</h1>
            <form action="{{ route('cars.store') }}" method="POST" class="text-black">
                @csrf

                <label for="ownerFullName" class="text-white">Owner Full Name</label>
                <input required name="ownerFullName" type="text" id="ownerFullName" class="border-2 p-2 mb-2 w-full">

                <label for="carBrand" class="text-white">Car Brand</label>
                <input required name="carBrand" type="text" id="carBrand" class="border-2 p-2 mb-2 w-full">

                <label for="carPlateNum" class="text-white">Car Plate Number</label>
                <input required name="carPlateNum" type="text" id="carPlateNum" class="border-2 p-2 mb-2 w-full">

                <label for="carColor" class="text-white">Car Color</label>
                <input required name="carColor" type="text" id="carColor" class="border-2 p-2 mb-4 w-full">

                <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded-full hover:bg-green-600">Create</button>
            </form>

            <a href="{{ route('cars.index') }}" class="text-green-500 font-bold mt-4 hover:underline">Back</a>
        </div>
    </div>
@endsection

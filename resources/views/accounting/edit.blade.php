@extends('layouts.app')
@section('content')
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="p-6 bg-gray-800 rounded-md shadow-md">
            <h1 class="text-white text-3xl font-bold mb-4">Edit Car</h1>
            <form method="POST" action="{{ route('cars.update', $car->id) }}" class="text-black">
                @csrf
                @method('PUT')

                <label for="ownerFullName" class="text-white">Owner Full Name</label>
                <input required name="ownerFullName" type="text" id="ownerFullName" value="{{ $car->ownerFullName }}" class="border-2 p-2 mb-2 w-full">

                <label for="carBrand" class="text-white">Car Brand</label>
                <input required name="carBrand" type="text" id="carBrand" value="{{ $car->carBrand }}" class="border-2 p-2 mb-2 w-full">

                <label for="carPlateNum" class="text-white">Car Plate Number</label>
                <input required name="carPlateNum" type="text" id="carPlateNum" value="{{ $car->carPlateNum }}" class="border-2 p-2 mb-2 w-full">

                <label for="carColor" class="text-white">Car Color</label>
                <input required name="carColor" type="text" id="carColor" value="{{ $car->carColor }}" class="border-2 p-2 mb-4 w-full">

                <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-600">Update Car</button>
            </form>

            <a href="{{ route('cars.index') }}" class="text-green-500 font-bold mt-4 hover:underline">Back</a>
        </div>
    </div>
@endsection

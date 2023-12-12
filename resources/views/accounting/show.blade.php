@extends('layouts.app')
@section('content')
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="p-6 bg-gray-800 text-white rounded-md shadow-md">
            <h1 class="text-3xl font-bold mb-4">Car Details</h1>
            <form action="{{ route('cars.index') }}">
                <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded-full mb-4 hover:bg-green-600">Back to List</button>
            </form>
            <table class="w-full border-2 border-gray-800 text-white">
                <thead>
                <tr>
                    <th class="border-2 p-2">ID</th>
                    <th class="border-2 p-2">User ID</th>
                    <th class="border-2 p-2">Owner Full Name</th>
                    <th class="border-2 p-2">Brand</th>
                    <th class="border-2 p-2">Plate Number</th>
                    <th class="border-2 p-2">Color</th>
                    <th class="border-2 p-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($car)
                    <tr>
                        <td class="border-2 p-2">{{ $car->id }}</td>
                        <td class="border-2 p-2">{{ $car->user_id }}</td>
                        <td class="border-2 p-2">{{ $car->ownerFullName }}</td>
                        <td class="border-2 p-2">{{ $car->carBrand }}</td>
                        <td class="border-2 p-2">{{ $car->carPlateNum }}</td>
                        <td class="border-2 p-2">{{ $car->carColor }}</td>
                        <td class="border-2 p-2">
                            <a href="{{ route('cars.edit', $car->id) }}" class="text-purple-600">Edit</a>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td class="border-2 p-2" colspan="7">Car not found</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

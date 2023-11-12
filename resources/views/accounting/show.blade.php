<h1>Show</h1>
<a href="{{ route('cars.index') }}" style="color: darkgreen; font-weight: bold;">Back</a>
<table border="3">
    <tr>
        <th>ID</th>
        <th>Owner Full Name</th>
        <th>Brand</th>
        <th>Plate Number</th>
        <th>Color</th>
        <th>Actions</th>
    </tr>
    @if($car)
        <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->ownerFullName }}</td>
            <td>{{ $car->carBrand }}</td>
            <td>{{ $car->carPlateNum }}</td>
            <td>{{ $car->carColor }}</td>
            <td>
                <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
            </td>
        </tr>
    @else
        <p>Car not found</p>
    @endif
</table>

<h1>Index</h1>
<a href="{{ route('cars.create') }}" style="color: darkgreen; font-weight: bold;">Add a Car</a>
<table border="3">
    <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Owner Full Name</th>
        <th>Brand</th>
        <th>Plate Number</th>
        <th>Color</th>
        <th>Actions</th>
    </tr>
    @foreach($cars as $car)
        <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->user_id }}</td>
            <td>{{ $car->ownerFullName }}</td>
            <td>{{ $car->carBrand }}</td>
            <td>{{ $car->carPlateNum }}</td>
            <td>{{ $car->carColor }}</td>
            <td>
                <a href="{{ route('cars.show', $car->id) }}">View</a>
                <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                <form method="POST" action="{{ route('cars.destroy', $car->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

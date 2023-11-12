<h1>Edit</h1>
<a href="{{ route('cars.index') }}" style="color: darkgreen; font-weight: bold;">Back</a>
<form method="POST" action="{{ route('cars.update', $car->id) }}">
    @csrf
    @method('PUT')
    <label for="ownerFullName">Owner Full Name</label>
    <input required name="ownerFullName" type="text" id="ownerFullName" value="{{ $car->ownerFullName }}">
    <br>
    <label for="carBrand">Car Brand</label>
    <input required name="carBrand" type="text" id="carBrand" value="{{ $car->carBrand }}">
    <br>
    <label for="carPlateNum">Car Plate Number</label>
    <input required name="carPlateNum" type="text" id="carPlateNum" value="{{ $car->carPlateNum }}">
    <br>
    <label for="carColor">Car Color</label>
    <input required name="carColor" type="text" id="carColor" value="{{ $car->carColor }}">
    <br>
    <button type="submit">Update Car</button>
</form>

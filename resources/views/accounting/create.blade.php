    <a href="{{ route('cars.index') }}">Back</a>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        @method('POST')
        <label for="ownerFullName">Owner Full Name</label>
        <input required name="ownerFullName" type="text" id="ownerFullName">
        <br>
        <label for="carBrand">Car Brand</label>
        <input required name="carBrand" type="text" id="carBrand">
        <br>
        <label for="carPlateNum">Car Plate Number</label>
        <input required name="carPlateNum" type="text" id="carPlateNum">
        <br>
        <label for="carColor">Car Color</label>
        <input required name="carColor" type="text" id="carColor">
        <br>
        <button type="submit">Create</button>
    </form>


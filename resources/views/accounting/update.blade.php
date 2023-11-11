<a href="{{ route('cars.index') }}">Back</a>
<br /><br />
<form action="{{ route('cars.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="ownerFullName">Owner Full Name</label>
    <input required name="ownerFullName" type="text" id="ownerFullName" value="{{ $item->ownerFullName }}">
    <br>
    <label for="carBrand">Car Brand</label>
    <input required name="carBrand" type="text" id="carBrand" value="{{ $item->carBrand }}">
    <br>
    <label for="carPlateNum">Car Plate Number</label>
    <input required name="carPlateNum" type="text" id="carPlateNum" value="{{ $item->carPlateNum }}">
    <br>
    <label for="carColor">Car Color</label>
    <input required name="carColor" type="text" id="carColor" value="{{ $item->carColor }}">
    <br>
    <button type="submit">Create</button>



    <strong>Email:</strong>
    <input type="text" name="email" value="{{ $user->email }}" placeholder="Email" />
    <br /><br />
    <button type="submit">Submit</button>
</form>

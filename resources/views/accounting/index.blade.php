Index
<br>
<a href="{{route('cars.create')}}">Create</a>
<?php
$accounting;
?>
<table border="1">
    <tr>
        <th>Code</th>
        <th>Owner Full Name</th>
        <th>Car Brand</th>
        <th>Car Plate Number</th>
        <th>Car Color</th>
    </tr>
    <?php foreach ($accounting as $item): ?>
    <tr>
        <td><?= $item->id ?> <a href="{{ route('cars.update') }}">Edit</a></td>
        <td><?= $item->ownerFullName?></td>
        <td><?= $item->carBrand?></td>
        <td><?= $item->carPlateNum?></td>
        <td><?= $item->carColor?></td>
    </tr>
    <?php endforeach;?>
</table>

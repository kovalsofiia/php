<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accountings extends Model
{
    use HasFactory;
    protected $fillable = [
        'ownerFullName', 'carBrand', 'carPlateNum', 'carColor'
    ];

}

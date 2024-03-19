<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'propertyId',
        'category',
        'ownersName',
        'location',
        'price',
        'status'
    ];
}

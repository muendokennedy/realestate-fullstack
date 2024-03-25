<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'property_id'
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

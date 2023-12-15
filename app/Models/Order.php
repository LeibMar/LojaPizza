<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'pizza_id',
    ];

    public function pizza()
    {
        return $this->belongsTo(Pizza::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

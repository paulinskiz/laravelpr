<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Customer extends Model
{
    use HasFactory;

    private $fillabe = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'city',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

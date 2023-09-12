<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function Reservation(){
        return $this->hasMany(Reservation::class);
    }

    public function Product(){
        return $this->hasMany(Product::class);
    }


    use HasFactory;
}

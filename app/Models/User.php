<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function children()   
{
    return $this->hasMany(Child::class);  
}

public function reservations()   
{
    return $this->hasMany(Reservation::class);  
}
}

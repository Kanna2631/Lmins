<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function reservations(){
        return $this->belongsToMany(reservation::class);
    }
}
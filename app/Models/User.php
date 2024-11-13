<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];
    public function children()   
{
    return $this->hasMany(Child::class);  
}

public function reservations()   
{
    return $this->hasMany(Reservation::class);  
}


}

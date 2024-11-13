<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{   
     protected $fillable = [
        'child_id',
        'date',
        'consultion_reason',
        'clinic_id',
        'is_cancelled'
    ];
use HasFactory;

function getPaginateByLimit(int $limit_count = 5)
{
    return $this::with('clinic')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}

    public function clinic()
{
    return $this->belongsTo(Clinic::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

public function vaccines(){
    return $this->belongsToMany(vaccine::class);
}


public function child(){
    return $this->belongsTo(Child::class);
}
}


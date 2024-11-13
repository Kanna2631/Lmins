<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'birthday',
        'gender',
    ];
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reservations(){
        return $this->belongsToMany(reservation::class);
    }
    public function getPaginateByLimit(int $limit_count = 10)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}